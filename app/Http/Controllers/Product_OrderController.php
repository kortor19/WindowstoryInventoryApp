<?php

namespace App\Http\Controllers;

use App\ProductOrder;
use Illuminate\Http\Request;
use DB;

class Product_OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productOrder = ProductOrder::all();
        return view('product_order.show', ['product_orders'=>$productOrder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productData = DB::table('product_categories')->pluck('id', 'product_category_name');
        return view('product_order.create')->with('productData', $productData);
        
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
            'product_name'=> 'required',
            'unit'=> 'required',
            'product_category_id'=> 'required',
            
        ]);
        
        $productOrder = ProductOrder::create([

            'product_name' => $request->input('product_name'),
            'unit' => $request->input('unit'),
            'product_category_id' => $request->input('product_category_id'),
        ]);

        if($productOrder){
            return redirect()->route('product_order.create')->with('success', 'Product Order Saved Successfully..!');
        }

        return back()->withInput();

    }

    /**
     * Display the specified resource.
     
     * @param  \App\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ProductOrder $productOrder)
    {
        $productOrder = ProductOrder::all();
        return view('product_order.show', ['product_orders'=>$productOrder]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductOrder $productOrder)
    {
        $productOrder = ProductOrder::find($productOrder->id);
        return view('product_order.edit', ['productOrder' => $productOrder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductOrder $productOrder)
    {
        $productOrder = ProductOrder::find($productOrder->id);
        
        $productOrder->product_name = $request->product_name;
        $productOrder->unit = $request->unit;
        $productOrder->product_category_id = $request->product_category_id;
        
        if($productOrder->save()){
            return redirect()->route('product_order.index')->with('success', 'Product Order Updated Successfully');
        }
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductOrder  $productOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductOrder $productOrder)
    {
        $productOrder = ProductOrder::find($productOrder->id);
        if($productOrder->delete()){
            return redirect()->route('product_order.index')->with('success', 'Product Order Deleted Successfully.');
        }
    }
}
