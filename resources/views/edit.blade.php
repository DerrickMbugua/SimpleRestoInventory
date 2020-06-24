@extends('layout')

@section('content')
<div class="col-sm-6">
    <h1>Edit Page</h2>
<form method="POST" action="/edit">
    <div class="form-group">
        <input type="hidden" name="id" value="{{$data->id}}">
        <label>Name </label>
        <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Enter Name">
      </div>
      @csrf
    <div class="form-group">
      <label>Email </label>
      <input type="email" class="form-control" name="email" value="{{$data->email}}" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>Address </label>
        <input type="address" class="form-control" name="address" value="{{$data->address}}" placeholder="Enter Address"> 
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection