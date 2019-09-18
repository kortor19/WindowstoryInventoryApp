<?php

namespace App\Http\Controllers;

use App\Material_Category;
use Illuminate\Http\Request;

class Material_CategoryController extends Controller
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
        return view('material_category.create');
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
     * @param  \App\Material_Category  $material_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Material_Category $material_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material_Category  $material_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Material_Category $material_Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material_Category  $material_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material_Category $material_Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material_Category  $material_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material_Category $material_Category)
    {
        //
    }
}
