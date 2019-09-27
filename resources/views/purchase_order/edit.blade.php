@extends('layouts.headerless')
@section('content')
@include('session.success')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary purchasefrm">

                <div class="logo">
                    <img src="{{ asset('images/winlogo.png') }}" class="img-fluid" alt="Windowstory Limited">
                     <h3 class="card-title frm-title">{{ __('Update Purchase Order') }}</h3>
                </div>             

                <div class="card-body">
                    <form method="POST" action="{{ route('purchase_order.update', $purchaseOrder->id) }}">
                        @csrf

                        
                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{$purchaseOrder->quantity}}" required autocomplete="quantity" autofocus>

                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price_per_unit" class="col-md-4 col-form-label text-md-right">{{ __('Price Per Unit') }}</label>

                            <div class="col-md-6">
                                <input id="price_per_unit" type="text" class="form-control @error('price_per_unit') is-invalid @enderror" name="price_per_unit" value="{{$purchaseOrder->price_per_unit}}" required autocomplete="price_per_unit" autofocus>

                                @error('price_per_unit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>

                            <div class="col-md-6">
                            <input id="total" type="text" class="form-control @error('total') is-invalid @enderror" name="total" value="{{$purchaseOrder->total}}" required autocomplete="total" autofocus>

                            <!-- <select name="gender" class="form-control" id="gender"  required="required">
                                <option value="male">Male</option>
                                <option value="female">female</option>
                            </select> -->
                                @error('total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tax" class="col-md-4 col-form-label text-md-right">{{ __('Tax') }}</label>

                            <div class="col-md-6">
                                <input id="tax" type="text" class="form-control @error('tax') is-invalid @enderror" name="tax" value="{{$purchaseOrder->tax}}" required autocomplete="tax">

                                @error('tax')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="material_id" class="col-md-4 col-form-label text-md-right">{{ __('Material ID') }}</label>

                            <div class="col-md-6">
                             <select name="material_id" value="{{$purchaseOrder->material_id}}" class="form-control" id="material_id"  required="required">
                                <option value="">Select material ID</option>
                            </select> 
                                @error('material_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Update') }}
                                </button>
                            </div>
                                
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
