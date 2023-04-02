<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Payment;
use App\Models\PaymentPurchase;
use App\Models\Product;
use App\Models\PurchaseOffer;
use App\Models\User;
use Session;
use Stripe;
use Hash;
use Auth;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $purchase_offer = PurchaseOffer::get();
        $ads_video_register = \DB::table("ads_sections")->where("ads_for", "register")->first();
        return view('payment.stripe', compact("purchase_offer", "ads_video_register"));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'card_name' => ['required', 'string', 'max:20'],
            'number' => ['required', 'numeric'],
            'cvc' => ['required', 'numeric'],
            'exp_month' => ['required', 'numeric', 'lt:13', 'gt:0'],
            'exp_year' => ['required', 'numeric', 'gt:' . date("Y")],
        ]);

        if (auth()->user()->id) {
            try {
                $purchase_offer = PurchaseOffer::where('id', $request->subscription_id)->firstOrFail();
                $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));

                $res = $stripe->tokens->create([
                    'card' => [
                        'number' => $request->number,
                        'exp_month' => $request->exp_month,
                        'exp_year' => $request->exp_year,
                        'cvc' => $request->cvc,
                    ],
                ]);

                Stripe\Stripe::setApiKey(env("STRIPE_KEY"));

                $response = $stripe->charges->create([
                    'amount' => ($purchase_offer->discounted_amount) * 100,
                    'currency' => 'usd',
                    'source' => $res->id,
                    'description' => 'Subscription',
                ]);
                $payment_details = [
                    'user_id' => auth()->user()->id,
                    'payment_id' => $response->id,
                    'amount' => ($response->amount) / 100,
                    'billing_details' => '',
                    'balance_transaction' => $response->balance_transaction,
                    'payment_method' => $response->payment_method,
                    'fingerprint' => $response->source->fingerprint,
                    'cvc_check' => $response->source->cvc_check,
                    'last4' => $response->source->last4,
                    'receipt_url' => $response->receipt_url,
                    'payment_method_details' => $response->payment_method_details,
                    'status' => $response->status,
                    'type' => 'subscription',
                ];
                Payment::create($payment_details);
                if ($response->status == "succeeded") {
                    User::where("id", auth()->user()->id)->update(["subscription_id" => $request->subscription_id]);
                }
                return response()->json($response, 201);
            } catch (\Throwable $e) {
                return response()->json($e->getMessage(), 500);
            }
        } else {
            return response()->json(["message" => "you are member enter correct password!"], 422);
        }
    }

    public function processStep(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        // $user_info = 
        // dd($request->all());
    }
    public function product_checkout_form(Request $request)
    {
        // ini_set('max_execution_time', 0); // 0 = Unlimited

        $data = [];
        $addressid = $request->addressid;
        return response()->json([
            'success' => 'Next step to checkout',
            'checkoutform' => view('products.product_checkout_card', compact('addressid'))->render(),
        ]);
    }
    private function getUserAddressById($id)
    {
        $address = Address::where('id', $id)->firstOrFail();

        $first_address = $address->name . ', ' . $address->phone;
        $second_address = '';
        if ($address->line1 != '') {
            $second_address = $address->line1;
        }
        if ($address->line2 != '') {
            if ($second_address == '') {
                $second_address = $address->line2;
            } else {
                $second_address = $second_address . ', ' . $address->line2;
            }
        }
        if ($second_address != '') $second_address = $second_address . ', ';
        $second_address = $address->city . ', ' . $address->state . ', ' . $address->country . ', ' . $address->postal_code;
        return "User Details:" . $second_address;
    }
    private function getProductList()
    {
        $old_cart_data = session()->get('cart') ?? array();
        $total_product = '';
        if (isset($old_cart_data['product'])) {
            foreach ($old_cart_data['product'] as $product) {
                if ($total_product != '') $total_product = $total_product . ', ';
                $total_product = $total_product . ' ' . $product['name'] . '( Size=' . $product['size'] . ', Color=' . $product['color'] . ', Quantity=' . $product['quantity'] . ', Total Price=' . priceFormate($product['total_price']) . ')';
            }
        }
        return 'Products : ' . $total_product . ' Final Price=' . priceFormate(total_price_of_cart() + 50);
    }
    private function productPurchases($payment_id)
    {
        $old_cart_data = session()->get('cart') ?? array();
        $total_product = '';
        if (isset($old_cart_data['product'])) {
            foreach ($old_cart_data['product'] as $product) {
                $product_details = Product::where('id', $product['id'])->firstOrFail();
                $product_purchase = [
                    'payment_id' => $payment_id,
                    'user_id' => auth()->user()->id,
                    'product_name' => $product_details->product_name,
                    'product_detail' => $product_details->product_detail,
                    'product_image' => $product['img'],
                    'product_real_amount' => $product_details->product_real_amount,
                    'product_percentage_discount' => $product_details->product_percentage_discount,
                    'product_discounted_amount' => $product_details->product_discounted_amount,
                    'purchase_amount' => $product['discounted_amount'],
                    'purchase_total_amount' => $product['total_price'],
                    'product_sizes' => $product['size'],
                    'product_colors' => $product['color'],
                    'quantity' => $product['quantity'],
                ];
                PaymentPurchase::create([
                    'payment_id' => $payment_id,
                    'user_id' => auth()->user()->id,
                    'product_name' => $product_details->product_name,
                    'product_detail' => $product_details->product_detail,
                    'product_image' => $product['img'],
                    'product_real_amount' => $product_details->product_real_amount,
                    'product_percentage_discount' => $product_details->product_percentage_discount,
                    'product_discounted_amount' => $product_details->product_discounted_amount,
                    'purchase_amount' => $product['discounted_amount'],
                    'purchase_total_amount' => $product['total_price'],
                    'product_sizes' => $product['size'],
                    'product_colors' => $product['color'],
                    'quantity' => $product['quantity'],
                ]);
            }
        }
    }
    public function product_checkout(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'card_name' => ['required', 'string', 'max:20'],
            'number' => ['required', 'numeric'],
            'cvc' => ['required', 'numeric'],
            'exp_month' => ['required', 'numeric', 'lt:13', 'gt:0'],
            'exp_year' => ['required', 'numeric', 'gt:' . date("Y")],
        ]);
        try {
            $user_details = $this->getUserAddressById($request->addressid);
            $total_product = $this->getProductList();

            $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));

            $res = $stripe->tokens->create([
                'card' => [
                    'number' => $request->number,
                    'exp_month' => $request->exp_month,
                    'exp_year' => $request->exp_year,
                    'cvc' => $request->cvc,
                ],
            ]);

            Stripe\Stripe::setApiKey(env("STRIPE_KEY"));

            $response = $stripe->charges->create([
                'amount' => ((int)(total_price_of_cart() + 50)) * 100,
                'currency' => 'usd',
                'source' => $res->id,
                'description' => $user_details . ' ' . $total_product,
            ]);
            $payment_details = [
                'user_id' => auth()->user()->id,
                'payment_id' => $response->id,
                'amount' => ($response->amount) / 100,
                'billing_details' => $user_details,
                'balance_transaction' => $response->balance_transaction,
                'payment_method' => $response->payment_method,
                'fingerprint' => $response->source->fingerprint,
                'cvc_check' => $response->source->cvc_check,
                'last4' => $response->source->last4,
                'receipt_url' => $response->receipt_url,
                'payment_method_details' => $response->payment_method_details,
                'status' => $response->status,
                'type' => 'product',
            ];
            $payment =  Payment::create($payment_details);
            $this->productPurchases($payment->id);
            $request->session()->put('cart', []);
            return response()->json($response, 201);
        } catch (\Throwable $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
