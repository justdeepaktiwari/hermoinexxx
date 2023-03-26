<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_cart = session()->get('cart');
        $product_cart = isset($all_cart['product']) ? $all_cart['product'] : array();
        $total_count = sizeof($product_cart);
        $addresses = Address::where('user_id', auth()->user()->id)->get();
        return view("products.product-checkout", compact('product_cart', 'total_count', 'addresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->session()->put('cart', []);
        $input = $request->all();
        $old_cart_data = $request->session()->get('cart') ?? array();
        $cart_data = array();
        if (trim($request->addCartType) == "product") {
            $details = Product::where("id", $request->itemId)->firstOrFail();
            $random_img = json_decode($details->product_image);
            $random_number = floor(rand(0, (count($random_img) - 1)));
            $cart_data['img'] = 'uploads/products/' . $random_img[$random_number];
            $cart_data['type'] = $request->addCartType;
            $cart_data['name'] = $details->product_name;
            $cart_data['id'] = $details->id;
            $cart_data['real_amount'] = $details->product_real_amount;
            $cart_data['discounted_amount'] = $details->product_discounted_amount;
            $cart_data['size'] = $input['productSize'];
            $cart_data['color'] = $input['productColor'];
            $cart_data['quantity'] = $request->quantity;
            $cart_data['total_price'] = ($request->quantity) * ($details->product_discounted_amount);
            $old_cart_data['product'][$details->id] = $cart_data;
        }

        $request->session()->put('cart', $old_cart_data);
        return response()->json([
            'success' => 'Add to cart',
            'cart_count' => $this->countCart(),
            'price' => priceFormate(($request->quantity) * $cart_data['discounted_amount']),
            'actionMsg' => "Cart updated successfullly!",
        ]);
    }
    public function remove(Request $request)
    {
        $input = $request->all();
        $old_cart_data = $request->session()->get('cart') ?? array();
        $cart_data = array();
        if (trim($request->removeCartType) == "product") {
            if (isset($old_cart_data['product'][$request->itemId])) {
                unset($old_cart_data['product'][$request->itemId]);
            }
        }
        $request->session()->put('cart', $old_cart_data);
        return response()->json([
            'success' => 'Remove to cart.',
            'cart_count' => $this->countCart(),
        ]);
    }
    function countCart()
    {
        $old_cart_data = session()->get('cart') ?? array();
        return isset($old_cart_data['product']) ? sizeof($old_cart_data['product']) : 0;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
