@extends('layouts.master')
@section('title','Register')
@section('content')


<div class="login">
		<div class="container">
			<div class="user__login">

	    			<div class="login__input">
	    				<h2>Login</h2>
                        <form action="{{url('user/login')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        @foreach($errors->all() as $error)
                            <p class="alert-danger">{{$error}}</p>
                        @endforeach
							<div class="form-group">
								<input type="text" name="email" class="form-group input-lg" placeholder="Email" required>
							</div>
					
							<div class="form-group">
								<input type="password" name="password" class="form-group input-lg" placeholder="Password" required>
							</div>
							

							<div class="form-group">
								<input type="checkbox" id="remember" for="remember">
								<label for="remember" class="checkbox_label">&nbsp; Remember me </label>

								<a href="#">Forgot Password?</a>
							</div>

							<div class="form-group">
								<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
							</div>

							<p class="">
								Don't have an account?
								<a href="{{ url('/register') }}">Register Now !</a>
							</p>

						</form>
					</div>
			      
			</div>	
				
		</div>
	</div>




















<!-- 
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
</div> -->

@endsection