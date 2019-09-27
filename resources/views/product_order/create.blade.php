@extends('layouts.headerless')

@section('content')
@include('session.success')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary productorderfrm">

                <div class="logo">
                    <img src="{{ asset('images/winlogo.png') }}" class="img-fluid" alt="Windowstory Limited">
                     <h3 class="card-title frm-title">{{ __('Create Product Order') }}</h3>
                </div>             

                <div class="card-body">
                    <form method="POST" action="{{ route('product_order.store') }}">
                        @csrf

                        
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" required autocomplete="product_name" autofocus>

                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unit" class="col-md-4 col-form-label text-md-right">{{ __(' Unit') }}</label>

                            <div class="col-md-6">
                                <input id="unit" type="text" class="form-control @error('unit') is-invalid @enderror" name="unit" value="{{ old('unit') }}" required autocomplete="unit" autofocus>

                                @error('unit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    
                        <div class="form-group row">
                            <label for="product_category_id" class="col-md-4 col-form-label text-md-right">{{ __('Product Category ID') }}</label>

                            <div class="col-md-6">
                             <select name="product_category_id" class="form-control" id="product_category_id"  required="required">
                                <option value="">Select Product Category ID</option>
                                @foreach($productData as $id => $name)
                                <option value="{{$name}}">{{$id}}</option>
                                 @endforeach
                            </select> 
                                @error('product_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Submit') }}
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
