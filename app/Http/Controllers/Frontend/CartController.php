<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        return view("products.product-checkout", compact('product_cart', 'total_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $old_cart_data = $request->session()->get('cart') ?? array();
        $cart_data = array();
        if (trim($request->addCartType) == "product") {
            $details = Product::where("id", $request->itemId)->firstOrFail();
            $cart_data['type'] = $request->addCartType;
            $cart_data['name'] = $details->product_name;
            $cart_data['id'] = $details->id;
            $cart_data['real_amount'] = $details->product_real_amount;
            $cart_data['discounted_amount'] = $details->product_discounted_amount;
            $cart_data['size'] = 'S';
            $cart_data['color'] = 'Blue';
            $cart_data['quantity'] = $request->quantity;
            $old_cart_data['product'][$details->id] = $cart_data;
        }

        $request->session()->put('cart', $old_cart_data);
        return response()->json([
            'success' => 'Got Simple Ajax Request.',
            'input' => $input,
            'cart_data ' => $cart_data
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
            'success' => 'Got Simple Ajax Request.',
            'input' => $input,
            'cart_data ' => $cart_data,
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
