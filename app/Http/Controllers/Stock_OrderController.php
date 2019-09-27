<?php

namespace App\Http\Controllers;

use App\StockOrder;
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
        $data=$request->all();
        $lastid = Stock_Order::create($data)->id;
        if(count($request->item_name) > 0){
            foreach($request->item_name as $item=>$v)
            $data2 = array(
                'customer_id' => $lastid,
                'variant_id' => $request->variant_id[$item],
                'item_name' => $request->item_name[$item],
                'width' => $request->width[$item],
                'height' => $request->height[$item],
                'sqm' => $request->sqm[$item],
                'quantity' => $request->quantity[$item],
                'unit_price' => $request->unit_price[$item],
                'amount' => $request->amount[$item],
                'total' => $request->total[$item],
                'location' => $request->location[$item],
                'out_in' => $request->out_in[$item],

            );

            Stock_Order::insert($data2);
        }
        return redirect()->back()->width('success', 'data insert successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StockOrder  $stockOrder
     * @return \Illuminate\Http\Response
     */
    public function show(StockOrder $stockOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockOrder  $stockOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(StockOrder $stockOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockOrder  $stockOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockOrder $stockOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockOrder  $stockOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockOrder $stockOrder)
    {
        //
    }
}
