@extends('layouts.headerless')


@section('content')



<div class="container">
@include('session.success')
<h2> Customer Records </h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S/No</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Gender</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">State</th>
      <th scope="col">Country</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $x=1; ?>
   @foreach($customers as $customer) 
  <tr>
   <td>{{ $x++ }}</td>
   <td>{{$customer->firstName}}</td>
   <td>{{$customer->lastName}}</td>
   <td>{{$customer->gender}}</td>
   <td>{{$customer->phoneNumber}}</td>
   <td>{{$customer->email}}</td>
   <td>{{$customer->address}}</td>
   <td>{{$customer->state}}</td>
   <td>{{$customer->country}}</td>
   <td colspan="2">
   <a href="{{ route('customer.edit', $customer->id)}}" class="btn btn-warning">Edit</a>
   <form  style = "display:inline-block;"  method="post" action="{{route('customer.destroy', $customer->id)}}">
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