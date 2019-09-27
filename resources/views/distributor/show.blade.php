@extends('layouts.headerless')


@section('content')

@include('session.success')

<div class="container">
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
      <th scope="col">Company Name</th>
      <th scope="col">Country</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $x=1; ?>
   @foreach($distributors as $distributor) 
  <tr>
   <td>{{ $x++ }}</td>
   <td>{{$distributor->firstName}}</td>
   <td>{{$distributor->lastName}}</td>
   <td>{{$distributor->gender}}</td>
   <td>{{$distributor->phoneNumber}}</td>
   <td>{{$distributor->email}}</td>
   <td>{{$distributor->address}}</td>
   <td>{{$distributor->companyName}}</td>
   <td>{{$distributor->country}}</td>
   <td colspan="2">
   <a href="{{ route('distributor.edit', $distributor->id)}}" class="btn btn-warning">Edit</a>
   <form  style = "display:inline-block;"  method="post" action="{{route('distributor.destroy', $distributor->id)}}">
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