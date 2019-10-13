@extends('layouts.headerless')
@section('content')
@include('session.success')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary materialorderfrm">

                <div class="logo">
                    <img src="{{ asset('images/winlogo.png') }}" class="img-fluid" alt="Windowstory Limited">
                     <h3 class="card-title frm-title">{{ __('Update Material Order') }}</h3>
                </div>             

                <div class="card-body">
                    <form method="POST" action="{{ route('material_order.update', $materialOrder->id) }}">
                    <input type="hidden" name="_method" value="PUT">
                        @csrf

                        <div class="form-group row">
                            <label for="material_name" class="col-md-4 col-form-label text-md-right">{{ __('Material Name') }}</label>

                            <div class="col-md-6">
                                <input id="material_name" type="text" class="form-control @error('material_name') is-invalid @enderror" name="material_name" value="{{$materialOrder->material_name}}" required autocomplete="material_name" autofocus>

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
                            <input id="material_category_id" type="text" class="form-control @error('material_category_id') is-invalid @enderror" name="material_category_id" value="{{$materialOrder->material_category_id}}" required autocomplete="material_category_id" autofocus>
                               
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
                                <input id="unit_of_measurement" type="text" class="form-control @error('unit_of_measurement') is-invalid @enderror" name="unit_of_measurement" value="{{$materialOrder->unit_of_measurement}}" required autocomplete="unit_of_measurement" autofocus>

                                @error('unit_of_measurement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="reorder_points" class="col-md-4 col-form-label text-md-right">{{ __('Reorder Points') }}</label>

                            <div class="col-md-6">
                                <input id="reorder_points" type="text" class="form-control @error('reorder_points') is-invalid @enderror" name="reorder_points" value="{{$materialOrder->reorder_points}}" required autocomplete="reorder_points">

                                @error('reorder_points')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="variant_id" class="col-md-4 col-form-label text-md-right">{{ __('Variant ID') }}</label>

                            <div class="col-md-6">
                            <input id="variant_id" type="text" class="form-control @error('variant_id') is-invalid @enderror" name="variant_id" value="{{$materialOrder->variant_id}}" required autocomplete="variant_id">
                            
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
                                    {{ __('update') }}
                                </button>
                            </div>
                                
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
    @if($errors->any())
    @foreach($errors->all() as $errors)
    <li class="text-danger">{{$errors}} </li>
    @endforeach
    @endif
</div>
        </div>
    </div>
</div>
@endsection