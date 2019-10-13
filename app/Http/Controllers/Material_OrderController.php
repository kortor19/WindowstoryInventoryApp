<?php

namespace App\Http\Controllers;

use App\MaterialOrder;
use Illuminate\Http\Request;
use DB;

class Material_OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materialOrder = MaterialOrder::all();
        return view('material_order.show', ['material_orders'=>$materialOrder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        $materialData = DB::table('material_categories')->pluck('id', 'material_category_name');
        $variantData = DB::table('variants')->pluck('id', 'variant_code');

        return view('material_order.create')->with('materialData', $materialData)
                                ->with('variantData', $variantData);
        
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
            'material_name'=> 'required',
            'material_category_id' => 'required', 
            'unit_of_measurement' => 'required',
            'reorder_points' => 'required',
            'variant_id' => 'required',
        ]);
        
        $materialOrder = MaterialOrder::create([

            'material_name' => $request->input('material_name'), 
            'material_category_id' => $request->input('material_category_id'),
            'unit_of_measurement' => $request->input('unit_of_measurement'),
            'reorder_points' => $request->input('reorder_points'),
            'variant_id' => $request->input('variant_id'),
                      
        ]);

        if($materialOrder){
            return redirect()->route('material_order.create')->with('success', 'Material Order  Saved Successfully..!');
        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MaterialOrder  $materialOrder
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialOrder $materialOrder)
    {
        $materialOrder = MaterialOrder::all();
        return view('material_order.show', ['material_orders'=>$materialOrder]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MaterialOrder  $materialOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialOrder $materialOrder)
    {
        $materialOrder = MaterialOrder::find($materialOrder->id);
        return view('material_order.edit', ['materialOrder' => $materialOrder]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MaterialOrder  $materialOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialOrder $materialOrder)
    {
        $materialOrder = MaterialOrder::find($materialOrder->id);
        
        $materialOrder->material_name = $request->material_name;
        $materialOrder->material_category_id = $request->material_category_id;
        $materialOrder->unit_of_measurement = $request->unit_of_measurement;
        $materialOrder->reorder_points = $request->reorder_points;
        $materialOrder->variant_id = $request->variant_id;
        
        if($materialOrder->save()){
            return redirect()->route('material_order.index')->with('success', 'Material Order Updated Successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MaterialOrder  $materialOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialOrder $materialOrder)
    {
        $materialOrder = MaterialOrder::find($materialOrder->id);
        if($materialOrder->delete()){
            return redirect()->route('material_order.index')->with('success', 'Material Order Deleted Successfully.');  
        }
    }
}
