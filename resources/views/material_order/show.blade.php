@extends('layouts.headerless')
 
@section('content')
@include('session.success')


<div class="container">
<h2> Material Order Records </h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/No</th>
      <th scope="col">Material Name</th>
      <th scope="col">Material Category ID</th>
      <th scope="col">Unit of Measurement</th>
      <th scope="col">Reorder Points</th>
      <th scope="col">Variant ID</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $x=1; ?>
   @foreach($material_orders as $materialOrder) 
  <tr>
   <td>{{ $x++ }}</td>
   <td>{{$materialOrder->material_name}}</td>
   <td>{{$materialOrder->material_category_id}}</td>
   <td>{{$materialOrder->unit_of_measurement}}</td>
   <td>{{$materialOrder->reorder_points}}</td>
   <td>{{$materialOrder->variant_id}}</td>
   <td colspan="2">
   <a href="{{ route('material_order.edit', $materialOrder->id)}}" class="btn btn-warning">Edit</a>
   <form  style = "display:inline-block;"  method="post" action="{{route('material_order.destroy', $materialOrder->id)}}">
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