@extends('layouts.master')
@section('title','Register')
@section('content')

<div class="containter">
<div class="col-md-8 col-md-offset-2">
<div class="well well bs-compnent">
    <form action="{{url('user/login')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <legend>Login Form</legend>
        @foreach($errors->all() as $error)
            <p class="alert-danger">{{$error}}</p>
        @endforeach
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="">
        </div>
        <button type="submit" class="btn btn-primary pull-right">Login </button>
        <div class="clearfix"></div>
    </form>

</div>
</div>
</div>

@endsection