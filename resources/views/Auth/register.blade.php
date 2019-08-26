@extends('layouts.master')
@section('title','Register')
@section('content')

<div class="containter">
<div class="col-md-8 col-md-offset-2">
<div class="well well bs-compnent">
    <form action="{{url('user/register')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <legend>Register Form</legend>
        @foreach($errors->all() as $error)
            <p class="alert-danger">{{$error}}</p>
        @endforeach
        <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" name="name" id="">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="">
        </div>
        <div class="form-group">
            <label for="confirmpassword">Password Confirmation</label>
            <input type="password" class="form-control" name="password_confirmation" id="">
        </div>

        <button type="submit" class="btn btn-primary pull-right">Register </button>
        <div class="clearfix"></div>
    </form>

</div>
</div>
</div>

@endsection