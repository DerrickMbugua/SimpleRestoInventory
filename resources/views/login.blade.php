@extends('layout')

@section('content')
    <h1>Login User</h1>
    <form method="POST" action="login">
        <div class="form-group">
            <label>Email </label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
          </div>
          @csrf
        
        <div class="form-group">
            <label>Password </label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password"> 
          </div>
          
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
@stop