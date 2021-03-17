@extends('master')

@section('content')
<div class="login">
<div class="container p-3">
    <div class="text-center">
        <h3>Sign up</h3>        
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4 ">
        <form method="POST" action="register">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" name="fullname" class="form-control"  placeholder="Enter your name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control"  placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
        </div>
    </div>
</div>
</div>
@endsection