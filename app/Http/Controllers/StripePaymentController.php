<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Address;
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
        return view('payment.stripe');
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
            'amount' => ['required', 'numeric'],
            'number' => ['required', 'numeric'],
            'cvc' => ['required', 'numeric'],
            'exp_month' => ['required', 'numeric', 'lt:13', 'gt:0'],
            'exp_year' => ['required', 'numeric', 'gt:' . date("Y")],
            'description' => ['required', 'string'],
        ]);

        $user_info = (array)json_decode($request->user_info);
        // dd($user_info);
        $password = $user_info["password"];
        $email = $user_info['email'];
        $credentials = ['email' => $email, 'password' => $password];
        $subscription_id = $user_info["subscription_id"];

        unset($user_info["_token"]);
        if (!User::where("email", $user_info["email"])->exists()) {
            $user_info["password"] = Hash::make($user_info["password"]);
            $user_info["subscription_id"] = 4;
            User::create($user_info);
        }

        if (Auth::attempt($credentials)) {
            try {
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
                    'amount' => $request->amount * 100,
                    'currency' => 'usd',
                    'source' => $res->id,
                    'description' => $request->description,
                ]);

                if ($response->status == "succeeded") {
                    User::where("email", $user_info["email"])->update(["subscription_id" => $subscription_id]);
                }
                print_r($response);
                die();
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
            $request->session()->put('cart', []);
            return response()->json($response, 201);
        } catch (\Throwable $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
