@extends('layouts.headerless')
 
@section('content')
@include('session.success')


<div class="container">
<h2> Product Order Records </h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Unit</th>
      <th scope="col">Product Category ID</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $x=1; ?>
   @foreach($product_orders as $productOrder) 
  <tr>
   <td>{{ $x++ }}</td>
   <td>{{$productOrder->product_name}}</td>
   <td>{{$productOrder->unit}}</td>
   <td>{{$productOrder->product_category_id}}</td>
   <td colspan="2">
   <a href="{{ route('product_order.edit', $productOrder->id)}}" class="btn btn-warning">Edit</a>
   <form  style = "display:inline-block;"  method="post" action="{{route('product_order.destroy', $productOrder->id)}}">
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