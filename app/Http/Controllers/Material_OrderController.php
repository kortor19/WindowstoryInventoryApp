<?php

namespace App\Http\Controllers;

use App\Material_Order;
use Illuminate\Http\Request;

class Material_OrderController extends Controller
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
        return view('material_order.create');
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
     * @param  \App\Material_Order  $material_Order
     * @return \Illuminate\Http\Response
     */
    public function show(Material_Order $material_Order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material_Order  $material_Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Material_Order $material_Order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material_Order  $material_Order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material_Order $material_Order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material_Order  $material_Order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material_Order $material_Order)
    {
        //
    }
}
