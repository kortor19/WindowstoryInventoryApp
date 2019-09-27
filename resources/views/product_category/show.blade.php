@extends('layouts.headerless')
 
@section('content')
@include('session.success')


<div class="container">
<h2> Product Category Records </h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/No</th>
      <th scope="col">product Category Name</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $x=1; ?>
   @foreach($product_categories as $productCategory) 
  <tr>
   <td>{{ $x++ }}</td>
   <td>{{$productCategory->product_category_name}}</td>
   <td colspan="2">
   <a href="{{ route('product_category.edit', $productCategory->id)}}" class="btn btn-warning">Edit</a>
   <form  style = "display:inline-block;"  method="post" action="{{route('product_category.destroy', $productCategory->id)}}">
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