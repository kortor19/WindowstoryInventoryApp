<?php

namespace App\Http\Controllers;

use App\MaterialCategory;
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
        $materialCategory = MaterialCategory::all();
        return view('material_category.show', ['material_categories'=>$materialCategory]);
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
        $request-> validate([
            'material_category_name'=> 'required',
        ]);
        
        $materialCategory = MaterialCategory::create([

            'material_category_name' => $request->input('material_category_name'),            
        ]);

        if($materialCategory){
            return redirect()->route('material_category.create')->with('success', 'Material Category  Saved Successfully..!');
        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MaterialCategory  $materialCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialCategory $materialCategory)
    {
        $materialCategory = MaterialCategory::all();
        return view('material_category.show', ['material_categories'=>$materialCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MaterialCategory  $materialCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialCategory $materialCategory)
    {
        $materialCategory = MaterialCategory::find($materialCategory->id);
        return view('material_category.edit', ['materialCategory' => $materialCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MaterialCategory  $materialCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialCategory $materialCategory)
    {
        $materialCategory = MaterialCategory::find($materialCategory->id);
        
        $materialCategory->material_category_name = $request->material_category_name;
        
        if($materialCategory->save()){
            return redirect()->route('material_category.index')->with('success', 'Material Category Updated Successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MaterialCategory  $materialCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialCategory $materialCategory)
    {
        $materialCategory = MaterialCategory::find($materialCategory->id);
        if($materialCategory->delete()){
            return redirect()->route('material_category.index')->with('success', 'Material Category Deleted Successfully.');  
        }
    }
}
