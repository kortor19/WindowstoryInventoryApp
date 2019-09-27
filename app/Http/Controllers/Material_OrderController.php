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
        // $data = DB::table('material_orders')
        // ->join('material_categories', 'material_categories.id', '='. 'material_orders.material_category_id')
        // ->join('variants', 'variants.id', '=', 'material_orders.variant_id')
        // ->select('material_orders.material_name', 'material_categories.material_category_name', 'variants.variant_code')
        // ->get();

        // return view('material_order.create', compact('data'));

        
        //$materialData = DB::table('material_categories')->pluck('id', 'material_category_name');
        //return view('material_order.create')->with('materialData', $materialData);
        // return view('material_order.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MaterialOrder  $materialOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialOrder $materialOrder)
    {
        //
    }
}
