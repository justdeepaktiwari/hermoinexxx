<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOffer;
use Illuminate\Http\Request;

class PurchaseOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan_offer = PurchaseOffer::get();
        return view("admin.purchase.index", compact("plan_offer"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\PurchaseOffer  $purchaseOffer
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseOffer $purchaseOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchaseOffer  $purchaseOffer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchaseOffer = PurchaseOffer::where("id", $id)->first();
        return view("admin.purchase.edit", compact('purchaseOffer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PurchaseOffer  $purchaseOffer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $purchaseOffer = PurchaseOffer::where("id", $id);
        
        $update = $request->all();
        unset($update["_token"]);
        unset($update["_method"]);

        $purchaseOffer->update($update);
        return redirect()->route("purchase.index")->with("success", "Purchase offer updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchaseOffer  $purchaseOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseOffer $purchaseOffer)
    {
        //
    }
}
