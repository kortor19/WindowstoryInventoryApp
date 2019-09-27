<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customer.show', ['customers'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
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
            'state' => 'required',
            'country'=>'required',
            
        ]);
        
        $customer = Customer::create([

            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'gender'=> $request->input('gender'),
            'email' => $request->input('email'),
            'phoneNumber' => $request->input('phoneNumber'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),  
            
        ]);

        if($customer){
            return redirect()->route('customer.create')->with('success', 'Customer Record Saved Successfully..!');
        }

        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $customer = Customer::all();
        return view('customer.show', ['customers'=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $customer = Customer::find($customer->id);
        return view('customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer = Customer::find($customer->id);
        
        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->gender = $request->gender;
        $customer->phoneNumber = $request->phoneNumber;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->state = $request->state;
        $customer->country = $request->country;
        
        if($customer->save()){
            return redirect()->route('customer.index')->with('success', 'Customer Record Updated Successfully');
        }
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer = Customer::find($customer->id);
        if($customer->delete()){
            return redirect()->route('customer.index')->with('success', 'Customer Record Deleted Successfully.');  
        }
    }
}
