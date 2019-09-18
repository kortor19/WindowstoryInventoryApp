@extends('layouts.headerless')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary loginfrm">

                <div class="logo">
                    <img src="{{ asset('images/winlogo.png') }}" class="img-fluid" alt="Windowstory Limited">
                     <h3 class="card-title frm-title">{{ __('Create Material Order') }}</h3>
                </div>             

                <div class="card-body">
                    <form method="POST" action="{{ route('material_order.store') }}">
                        @csrf

                        
                        <div class="form-group row">
                            <label for="material_name" class="col-md-4 col-form-label text-md-right">{{ __('Material Name') }}</label>

                            <div class="col-md-6">
                                <input id="material_name" type="text" class="form-control @error('material_name') is-invalid @enderror" name="material_name" value="{{ old('material_name') }}" required autocomplete="material_name" autofocus>

                                @error('material_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="material_category_id" class="col-md-4 col-form-label text-md-right">{{ __('Material Category ID') }}</label>

                            <div class="col-md-6">
                            <select name="material_category_id" class="form-control" id="material_category_id"  required="required">
                                <option value="">select category id</option>
                            </select>
                                @error('material_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unit_of_measurement" class="col-md-4 col-form-label text-md-right">{{ __('Unit of measurement') }}</label>

                            <div class="col-md-6">
                                <input id="unit_of_measurement" type="text" class="form-control @error('unit_of_measurement') is-invalid @enderror" name="unit_of_measurement" value="{{ old('unit_of_measurement') }}" required autocomplete="unit_of_measurement" autofocus>

                                @error('unit_of_measurement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="reorder_point" class="col-md-4 col-form-label text-md-right">{{ __('Reorder Points') }}</label>

                            <div class="col-md-6">
                                <input id="reorder_point" type="text" class="form-control @error('reorder_point') is-invalid @enderror" name="reorder_point" value="{{ old('reorder_point') }}" required autocomplete="reorder_point">

                                @error('reorder_point')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="variant_id" class="col-md-4 col-form-label text-md-right">{{ __('Variant ID') }}</label>

                            <div class="col-md-6">
                            <select name="variant_id" class="form-control" id="variant_id"  required="required">
                                <option value="">select variant id</option>
                            </select>
                                @error('variant_id')
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
