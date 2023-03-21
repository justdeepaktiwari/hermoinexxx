<?php

namespace App\Http\Controllers;

use App\Models\ProductColor;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = ProductColor::paginate(10);
        return view("admin.products-color.index", compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.products-color.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProductColor::create(["color_name" => $request->color_name]);
        return redirect()->route("product-color.index")->with("success", "Successfully created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return \Illuminate\Http\Response
     */
    public function show(ProductColor $productColor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = ProductColor::where("id", $id)->first();
        return view("admin.products-color.edit", compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductColor  $productColor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        ProductColor::where("id", $id)->update(["color_name" => $request->color_name]);
        return redirect()->route("product-color.index")->with("success", "Successfully created");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductColor  $productColor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductColor::where("id", $id)->delete();
        return redirect()->route("product-color.index")->with("success", "Deleted successfully!");
    }
}
