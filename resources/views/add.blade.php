@extends('layout')

@section('content')
<div class="col-sm-6">
<form method="POST" action="add">
    <div class="form-group">
        <label>Name </label>
        <input type="text" class="form-control" name="name" placeholder="Enter Name">
      </div>
      @csrf
    <div class="form-group">
      <label>Email </label>
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label>Address </label>
        <input type="address" class="form-control" name="address" placeholder="Enter Address"> 
      </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
@endsection