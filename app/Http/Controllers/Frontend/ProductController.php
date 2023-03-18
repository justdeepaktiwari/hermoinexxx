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
    public function index()
    {
        $latest_product = Product::orderBy("id", "DESC")->limit(8)->get();
        return view("products.index", compact("latest_product"));
    }
    public function list(Request $request)
    {
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

        return view("products.list", compact("products"));
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
        $detail_product = Product::where("id", $id)->first();

        if ($detail_product->product_image) {
            $number_pic = $detail_product->product_image;
            $number_pic = json_decode($number_pic);
            $number_pic = count($number_pic);
        } else {
            $number_pic = 0;
        }

        return view("products.product-detail", compact('detail_product', 'number_pic'));
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
