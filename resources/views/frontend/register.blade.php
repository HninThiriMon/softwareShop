@extends('frontend.layouts.master')

@section('title','product')
@section('content')
	<div class="crumb">

		<div class="crumb__img">
			<img src="/images/bread-crumb.jpg">
		</div>

		<div class="crumb__content">
			<div class="crumb__title">
				<h3>Register</h3>
			</div>
		</div>
			
	</div>

	<div class="login">
		<div class="container">
			<div class="user__login">

				<div class="login__input">
					<h2>Register</h2>
	    			<form action="" method="">
						
						<div class="form-group">
							<input type="text" name="login" class="form-group input-lg" placeholder="Username" required>
						</div>


						<div class="form-group">
							<input type="text" name="login" class="form-group input-lg" placeholder="Email" required>
						</div>
				
						<div class="form-group">
							<input type="password" name="login" class="form-group input-lg" placeholder="Password" required>
						</div>

						<div class="form-group">
							<input type="password" name="login" class="form-group input-lg" placeholder="Confirm Password" required>
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