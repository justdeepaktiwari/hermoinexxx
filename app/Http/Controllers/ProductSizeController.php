<?php

namespace App\Http\Controllers;

use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = ProductSize::paginate(10);
        return view("admin.products-size.index", compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.products-size.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProductSize::create(["product_size" => $request->product_size]);
        return redirect()->route("product-size.index")->with("success", "Successfully created");
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSize $productSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $size = ProductSize::where("id", $id)->first();
        return view("admin.products-size.edit", compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductSize  $productSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        ProductSize::where("id", $id)->update(["product_size" => $request->product_size]);
        return redirect()->route("product-size.index")->with("success", "Successfully created");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductSize  $productSize
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductSize::where("id", $id)->delete();
        return redirect()->route("product-size.index")->with("success", "Deleted successfully!");
    }
}
