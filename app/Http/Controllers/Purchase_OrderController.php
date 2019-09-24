<?php

namespace App\Http\Controllers;

use App\Purchase_Order;
use Illuminate\Http\Request;

class Purchase_OrderController extends Controller
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
     return view('purchase_order.create');
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
     * @param  \App\Purchase_Order  $purchase_Order
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase_Order $purchase_Order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purchase_Order  $purchase_Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase_Order $purchase_Order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purchase_Order  $purchase_Order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase_Order $purchase_Order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purchase_Order  $purchase_Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase_Order $purchase_Order)
    {
        //
    }
}
