<?php

namespace App\Http\Controllers;

use App\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributor = Distributor::all();
        return view('distributor.show', ['distributors'=>$distributor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.create');
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
            'firstName'=> 'required',
            'lastName'=> 'required',
            'gender'=>'required',
            'email'=> 'required',
            'phoneNumber'=> 'required|numeric',
            'address'=> 'required',
            'companyName' => 'required',
            'country'=>'required',
            
        ]);
        
        $distributor = Distributor::create([

            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'gender'=> $request->input('gender'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'address' => $request->input('address'),
            'companyName' => $request->input('companyName'),
            'country' => $request->input('country'),  
            
        ]);

        if($distributor){
            return redirect()->route('distributor.create')->with('success', 'Distributor Record Saved Successfully..!');
        }

        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function show(Distributor $distributor)
    {
        $distributor = Distributor::all();
        return view('distributor.show', ['distributors'=>$distributor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function edit(Distributor $distributor)
    {
        $distributor = Distributor::find($distributor->id);
        return view('distributor.edit', ['distributor' => $distributor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distributor $distributor)
    {
        $distributor = Distributor::find($distributor->id);
        
        $distributor->firstName = $request->firstName;
        $distributor->lastName = $request->lastName;
        $distributor->gender = $request->gender;
        $distributor->phoneNumber = $request->phoneNumber;
        $distributor->email = $request->email;
        $distributor->address = $request->address;
        $distributor->companyName = $request->companyName;
        $distributor->country = $request->country;
        
        if($distributor->save()){
            return redirect()->route('distributor.index')->with('success', 'Distributor Record Updated Successfully');
        }
        return back()->withInput();
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distributor $distributor)
    {
        $distributor = Distributor::find($distributor->id);
        if($distributor->delete()){
            return redirect()->route('distributor.index')->with('success', 'Distributor Record Deleted Successfully.');  
        }
    }
}
