@extends('layouts.headerless')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary loginfrm">

                <div class="logo">
                    <img src="{{ asset('images/winlogo.png') }}" class="img-fluid" alt="Windowstory Limited">
                     <h3 class="card-title frm-title">{{ __('Create Product Category') }}</h3>
                </div>             

                <div class="card-body">
                    <form method="POST" action="{{ route('product_category.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="product_category_name" class="col-md-4 col-form-label text-md-right">{{ __('Product Category Name') }}</label>

                            <div class="col-md-6">
                                <input id="product_category_name" type="text" class="form-control @error('product_category_name') is-invalid @enderror" name="product_category_name" value="{{ old('product_category_name') }}" required autocomplete="product_category_name" autofocus>

                                @error('product_category_name')
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
