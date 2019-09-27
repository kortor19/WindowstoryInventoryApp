@extends('layouts.headerless')


@section('content')
@include('session.success')


<div class="container">
<h2> Variants Records </h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/No</th>
      <th scope="col">Variant Code</th>
      <th scope="col">Color Code</th>
      <th scope="col">Control Side</th>
      <th scope="col">Cord Color</th>
      <th scope="col">Cord Length</th>
      <th scope="col">Head Rail Color</th>
      <th scope="col">Bottom Rail Color</th>
      <th scope="col">Side by Side</th>
      <th scope="col">Default Price</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $x=1; ?>
   @foreach($variants as $variant) 
  <tr>
   <td>{{ $x++ }}</td>
   <td>{{$variant->variant_code}}</td>
   <td>{{$variant->color_code}}</td>
   <td>{{$variant->control_side}}</td>
   <td>{{$variant->cord_color}}</td>
   <td>{{$variant->cord_length}}</td>
   <td>{{$variant->head_rail_color}}</td>
   <td>{{$variant->bottom_rail_color}}</td>
   <td>{{$variant->side_by_side}}</td>
   <td>{{$variant->default_price}}</td>
   <td colspan="2">
   <a href="{{ route('variant.edit', $variant->id)}}" class="btn btn-warning">Edit</a>
   <form  style = "display:inline-block;"  method="post" action="{{route('variant.destroy', $variant->id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="DELETE">
   <button type="submit" class="btn btn-danger">Delete</button>
   </form>
   </td>
  </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection