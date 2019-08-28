
@extends('frontend.layouts.master')

@section('title','product')
@section('content')
	<div class="login">
		<div class="container">
			<div class="user__login">

				<div class="login__input">
					<h2>Register</h2>
                    <form action="{{url('user/register')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @foreach($errors->all() as $error)
                        <p class="alert-danger">{{$error}}</p>
                    @endforeach
						<div class="form-group">
							<input type="text" name="name" class="form-group input-lg" placeholder="Username" required>
						</div>


						<div class="form-group">
							<input type="text" name="email" class="form-group input-lg" placeholder="Email" required>
						</div>
				
						<div class="form-group">
							<input type="password" name="password" class="form-group input-lg" placeholder="Password" required>
						</div>

						<div class="form-group">
							<input type="password" name="password_confirmation" class="form-group input-lg" placeholder="Confirm Password" required>
						</div>
						

						<div class="form-group">
							<input type="checkbox" id="remember" for="remember">
							<label for="remember" class="checkbox_label">
							&nbsp; I agree the terms and conditions.</label>
						</div>

						<div class="form-group">
							<input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
						</div>

						<p class="">
							Already have an account?
							<a href="{{ url('/login') }}">Login</a>
						</p>

					</form>
				</div>
				      
			</div>
		</div>
	</div>
@endsection

































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