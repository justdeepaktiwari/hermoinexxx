<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $add_cart_msg = "Product added into cart successfullly!";
        $update_cart_msg = "Cart updated successfullly!";
        $all_cart = $request->session()->get('cart') ?? array();
        $product_cart = isset($all_cart['product']) ? $all_cart['product'] : array();
        $latest_product = Product::orderBy("id", "DESC")->limit(8)->get();
        return view("products.index", compact("latest_product", "product_cart", "add_cart_msg", "update_cart_msg"));
    }
    public function list(Request $request)
    {
        // $request->session()->pull('cart');
        // dd($request->session()->all());
        $add_cart_msg = "Product added into cart successfullly!";
        $update_cart_msg = "Cart updated successfullly!";
        $all_cart = $request->session()->get('cart') ?? array();
        $product_cart = isset($all_cart['product']) ? $all_cart['product'] : array();
        $products = Product::where('product_name', '!=', '');
        if ($request->get('type')) {
            $type_slug = $request->get('type');
            if ($type_slug == 'latest-product') {
                $products->orderBy("id", "DESC");
            }
        }
        if ($request->get('search')) {
            $text_search = $request->get('search');
            $products->where('product_name', 'like', '%' . $text_search . '%');
            $products->orWhere('product_sizes', 'like', '%' . $text_search . '%');
            $products->orWhere('product_colors', 'like', '%' . $text_search . '%');
        }

        $products = $products->paginate(8)->withQueryString();

        return view("products.list", compact("products", 'product_cart', "add_cart_msg", "update_cart_msg"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        $product = Product::where("id", $id)->with('reviews.users')->withCount('reviews')->firstOrFail();

        if ($product->product_image) {
            $number_pic = $product->product_image;
            $number_pic = json_decode($number_pic);
            $number_pic = count($number_pic);
        } else {
            $number_pic = 0;
        }

        return view("products.product-detail", compact('product', 'number_pic'));
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
