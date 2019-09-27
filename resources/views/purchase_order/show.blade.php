@extends('layouts.headerless')
 
@section('content')
@include('session.success')


<div class="container">
<h2> Purchase Order Records </h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/No</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price Per Unit</th>
      <th scope="col">Total</th>
      <th scope="col">Tax</th>
      <th scope="col">material ID</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $x=1; ?>
   @foreach($purchase_orders as $purchaseOrder) 
  <tr>
   <td>{{ $x++ }}</td>
   <td>{{$purchaseOrder->quantity}}</td>
   <td>{{$purchaseOrder->price_per_unit}}</td>
   <td>{{$purchaseOrder->total}}</td>
   <td>{{$purchaseOrder->tax}}</td>
   <td>{{$purchaseOrder->material_id}}</td>
   <td colspan="2">
   <a href="{{ route('purchase_order.edit', $purchaseOrder->id)}}" class="btn btn-warning">Edit</a>
   <form  style = "display:inline-block;"  method="post" action="{{route('purchase_order.destroy', $purchaseOrder->id)}}">
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