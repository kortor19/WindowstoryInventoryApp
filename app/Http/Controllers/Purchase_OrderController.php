<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use Illuminate\Http\Request;
use DB;

class Purchase_OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchaseOrder = PurchaseOrder::all();
        return view('purchase_order.show', ['purchase_orders'=>$purchaseOrder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $purchaseData = DB::table('material_orders')->pluck('id', 'material_name');
        return view('purchase_order.create')->with('purchaseData', $purchaseData);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'quantity'=> 'required|numeric',
            'price_per_unit'=> 'required',
            'total'=>'required',
            'tax'=> 'required',
            'material_id'=> 'required',
        ]);
        
        $purchaseOrder = PurchaseOrder::create([

            'quantity' => $request->input('quantity'),
            'price_per_unit' => $request->input('price_per_unit'),
            'total' => $request->input('total'),
            'tax' => $request->input('tax'),
            'material_id' => $request->input('material_id'),
            
        ]);

        if($purchaseOrder){
            return redirect()->route('purchase_order.create')->with('success', 'Purchase Order Saved Successfully..!');
        }

        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseOrder $purchaseOrder)
    {
        $purchaseOrder = PurchaseOrder::all();
        return view('purchase_order.show', ['purchase_orders'=>$purchaseOrder]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseOrder $purchaseOrder)
    {
        $purchaseOrder = PurchaseOrder::find($purchaseOrder->id);
        return view('purchase_order.edit', ['purchaseOrder' => $purchaseOrder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseOrder $purchaseOrder)
    {
        $purchaseOrder = PurchaseOrder::find($purchaseOrder->id);
        
        $purchaseOrder->quantity = $request->quantity;
        $purchaseOrder->price_per_unit = $request->price_per_unit;
        $purchaseOrder->total = $request->total;
        $purchaseOrder->tax = $request->tax;
        $purchaseOrder->material_id = $request->material_id;
        
        if($purchaseOrder->save()){
            return redirect()->route('purchase_order.index')->with('success', 'Purchase Order Updated Successfully');
        }
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseOrder $purchaseOrder)
    {
        $purchaseOrder = PurchaseOrder::find($purchaseOrder->id);
        if($purchaseOrder->delete()){
            return redirect()->route('purchase_order.index')->with('success', 'Purchase Order Deleted Successfully.');
        }
    }
}
