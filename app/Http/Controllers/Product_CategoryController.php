<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use Illuminate\Http\Request;

class Product_CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategory = ProductCategory::all();
        return view('product_category.show', ['product_categories'=>$productCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product_category.create');
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
            'product_category_name'=> 'required',
            
        ]);
        
        $productCategory = ProductCategory::create([

            'product_category_name' => $request->input('product_category_name'),
        ]);

        if($productCategory){
            return redirect()->route('product_category.create')->with('success', 'Product Category Saved Successfully..!');
        }

        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        $productCategory = ProductCategory::all();
        return view('product_category.show', ['product_categories'=>$productCategory]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        $productCategory = ProductCategory::find($productCategory->id);
        return view('product_category.edit', ['productCategory' => $productCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $productCategory = ProductCategory::find($productCategory->id);
        
        $productCategory->product_category_name = $request->product_category_name;
        
        if($productCategory->save()){
            return redirect()->route('product_category.index')->with('success', 'Product Category Updated Successfully');
        }
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory = ProductCategory::find($productCategory->id);
        if($productCategory->delete()){
            return redirect()->route('product_category.index')->with('success', 'Product Category Deleted Successfully.');
        }
    }
}
