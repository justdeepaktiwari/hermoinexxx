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
        return view("products.product-checkout");
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
        $cart_data = array();
        if (trim($request->addCartType) == "product") {
            $detail_product = Product::where("id", $request->itemId)->firstOrFail();
            $cart_data['type'] = $request->addCartType;
            $cart_data['name'] = $detail_product->product_name;
            $cart_data['real_amount'] = $detail_product->product_real_amount;
            $cart_data['discounted_amount'] = $detail_product->product_discounted_amount;
            $cart_data['size'] = 'S';
            $cart_data['color'] = 'Blue';
            $cart_data['quantity'] = $request->quantity;
        }

        return response()->json([
            'success' => 'Got Simple Ajax Request.',
            'input' => $input,
            'cart_data ' => $cart_data
        ]);
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
