@extends('layout')
@section('title', 'Login')
@section('content')
    <h1>SIGN IN</h1>
    <div class="container">
    <form style="width: 500px">
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder= "EMAIL">
        </div>
    <div class="mb-3">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder= "PASSWORD">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type=signin class="btn btn-primary">Sign In</button>
    <button type=signingoogle class="btn btn-secondary">Sign In With Google</button>
    </form>
    </div>


@endsection