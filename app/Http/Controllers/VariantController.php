<?php

namespace App\Http\Controllers;

use App\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variant = Variant::all();
        return view('variant.show', ['variants'=>$variant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('variant.create');
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
            'variant_code'=> 'required',
            'color_code'=> 'required',
            'control_side'=>'required',
            'cord_color'=> 'required',
            'cord_length'=> 'required',
            'head_rail_color'=> 'required',
            'bottom_rail_color' => 'required',
            'side_by_side'=>'required',
            'default_price'=>'required',
            
        ]);
        
        $variant = Variant::create([

            'variant_code' => $request->input('variant_code'),
            'color_code' => $request->input('color_code'),
            'control_side'=> $request->input('control_side'),
            'cord_color' => $request->input('cord_color'),
            'cord_length' => $request->input('cord_length'),
            'head_rail_color' => $request->input('head_rail_color'),
            'bottom_rail_color' => $request->input('bottom_rail_color'),
            'side_by_side' => $request->input('side_by_side'),  
            'default_price' => $request->input('default_price'),
            
        ]);

        if($variant){
            return redirect()->route('variant.create')->with('success', 'Variants Saved Successfully..!');
        }

        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function show(Variant $variant)
    {
        $variant = Variant::all();
        return view('variant.show', ['variants'=>$variant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function edit(Variant $variant)
    {
        $variant = Variant::find($variant->id);
        return view('variant.edit', ['variant' => $variant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variant $variant)
    {
        $variant = Variant::find($variant->id);
        
        $variant->variant_code = $request->variant_code;
        $variant->color_code = $request->color_code;
        $variant->control_side = $request->control_side;
        $variant->cord_length = $request->cord_length;
        $variant->head_rail_color = $request->head_rail_color;
        $variant->bottom_rail_color = $request->bottom_rail_color;
        $variant->side_by_side = $request->side_by_side;
        $variant->default_price = $request->default_price;
        
        if($variant->save()){
            return redirect()->route('variant.index')->with('success', 'Variants Record Updated Successfully');
        }
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Variant  $variant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variant $variant)
    {
        $variant = Variant::find($variant->id);
        if($variant->delete()){
            return redirect()->route('variant.index')->with('success', 'Variants  Deleted Successfully.');
  
        }
    }
}
