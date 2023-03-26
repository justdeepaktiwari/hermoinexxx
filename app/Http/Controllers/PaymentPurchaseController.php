<?php

namespace App\Http\Controllers;

use App\Models\PaymentPurchase;
use App\Http\Requests\StorePaymentPurchaseRequest;
use App\Http\Requests\UpdatePaymentPurchaseRequest;
use Illuminate\Http\Request;

class PaymentPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_status = [
            'Confirmed' => 'Confirmed',
            'Delivered' => 'Delivered',
        ];

        $orders = PaymentPurchase::with(['users', 'payments'])->get();
        return view('admin.orders.index', compact('orders', 'order_status'));
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
    public function update(Request $request, $id)
    {
        $order = PaymentPurchase::where('id', $id)->firstOrFail();
        $order_updated = $order->update([
            'status' => $request->status,
        ]);
        return back()->with('success', 'Order updated successfully.');
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
