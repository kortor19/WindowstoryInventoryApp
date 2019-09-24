<?php

namespace App\Http\Controllers;

use App\Stock_Order;
use Illuminate\Http\Request;

class Stock_OrderController extends Controller
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
        return view('stock_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock_Order  $stock_Order
     * @return \Illuminate\Http\Response
     */
    public function show(Stock_Order $stock_Order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock_Order  $stock_Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock_Order $stock_Order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock_Order  $stock_Order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock_Order $stock_Order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock_Order  $stock_Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock_Order $stock_Order)
    {
        //
    }
}
