@extends('layout')

@section('content')
    <h1>Register New User</h1>
    <form method="POST" action="register">
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
            <label>Password </label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password"> 
          </div>
          <div class="form-group">
            <label>Contact </label>
            <input type="text" class="form-control" name="contact" placeholder="Enter Contact">
          </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
@stop