<?php

namespace App\Http\Controllers;

use App\Models\PaymentPurchase;
use App\Http\Requests\StorePaymentPurchaseRequest;
use App\Http\Requests\UpdatePaymentPurchaseRequest;

class PaymentPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePaymentPurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentPurchaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentPurchase  $paymentPurchase
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentPurchase $paymentPurchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentPurchase  $paymentPurchase
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentPurchase $paymentPurchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentPurchaseRequest  $request
     * @param  \App\Models\PaymentPurchase  $paymentPurchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentPurchaseRequest $request, PaymentPurchase $paymentPurchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentPurchase  $paymentPurchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentPurchase $paymentPurchase)
    {
        //
    }
}
