@extends('layouts.headerless')
@section('content')
@include('session.success')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary variantfrm">

                <div class="logo">
                    <img src="{{ asset('images/winlogo.png') }}" class="img-fluid" alt="Windowstory Limited">
                     <h3 class="card-title frm-title">{{ __('Update Variants') }}</h3>
                </div>             

                <div class="card-body">
                    <form method="POST" action="{{ route('variant.update', $variant->id) }}">
                    <input type="hidden" name="_method" value="PUT">
                        @csrf

                        
                        <div class="form-group row">
                            <label for="variant_code" class="col-md-4 col-form-label text-md-right">{{ __('Variant Code') }}</label>

                            <div class="col-md-6">
                                <input id="variant_code" type="text" class="form-control @error('variant_code') is-invalid @enderror" name="variant_code" value="{{$variant->variant_code}}" required autocomplete="variant_code" autofocus>

                                @error('variant_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="color_code" class="col-md-4 col-form-label text-md-right">{{ __('Color Code') }}</label>

                            <div class="col-md-6">
                                <input id="color_code" type="text" class="form-control @error('color_code') is-invalid @enderror" name="color_code" value="{{$variant->color_code}}" required autocomplete="color_code" autofocus>

                                @error('color_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="control_side" class="col-md-4 col-form-label text-md-right">{{ __('Control Side') }}</label>

                            <div class="col-md-6">
                            <input id="control_side" type="text" class="form-control @error('control_side') is-invalid @enderror" name="control_side" value="{{$variant->control_side}}" required autocomplete="control_side" autofocus>

                            <!-- <select name="gender" class="form-control" id="gender"  required="required">
                                <option value="male">Male</option>
                                <option value="female">female</option>
                            </select> -->
                                @error('control_side')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cord_color" class="col-md-4 col-form-label text-md-right">{{ __('Cord Color') }}</label>

                            <div class="col-md-6">
                                <input id="cord_color" type="text" class="form-control @error('cord_color') is-invalid @enderror" name="cord_color" value="{{$variant->cord_color}}" required autocomplete="cord_color">

                                @error('cord_color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cord_length" class="col-md-4 col-form-label text-md-right">{{ __('Cord Length') }}</label>

                            <div class="col-md-6">
                                <input id="cord_length" type="text" class="form-control @error('cord_length') is-invalid @enderror" name="cord_length" value="{{$variant->cord_length}}" required autocomplete="cord_length">

                                @error('cord_length')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="head_rail_color" class="col-md-4 col-form-label text-md-right">{{ __('Head Rail Color') }}</label>

                            <div class="col-md-6">
                                <input id="head_rail_color" type="text" class="form-control @error('head_rail_color') is-invalid @enderror" name="head_rail_color" value="{{$variant->head_rail_color}}" required autocomplete="head_rail_color">

                                @error('head_rail_color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="bottom_rail_color" class="col-md-4 col-form-label text-md-right">{{ __('Bottom Rail Color') }}</label>

                            <div class="col-md-6">
                                <input id="bottom_rail_color" type="text" class="form-control @error('bottom_rail_color') is-invalid @enderror" name="bottom_rail_color" value="{{$variant->bottom_rail_color}}" required autocomplete="bottom_rail_color">

                                @error('bottom_rail_color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="side_by_side" class="col-md-4 col-form-label text-md-right">{{ __('Side by Side') }}</label>

                            <div class="col-md-6">
                                <input id="side_by_side" type="text" class="form-control" name="side_by_side" value="{{$variant->side_by_side}}" required autocomplete="side_by_side">
                                @error('side_by_side')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="default_price" class="col-md-4 col-form-label text-md-right">{{ __('Default Price') }}</label>

                            <div class="col-md-6">
                                <input id="default_price" type="text" class="form-control" name="default_price" value="{{$variant->default_price}}" required autocomplete="default_price">
                                @error('default_price')
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
