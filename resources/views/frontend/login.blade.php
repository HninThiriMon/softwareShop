@extends('frontend.layouts.master')

@section('title','product')
@section('content')
	<div class="container-fluid">
			
			<div class="col-md-4 col-lg-4"></div>
			<div class="col-md-4 col-lg-4 login">
				<div class="login__input">
					<h2>Login</h2>
					<form action="" method="">
						<div class="form-group">
							<input type="text" name="login" class="form-group input-lg" placeholder="Email" required>
						</div>
						
						<div class="form-group">
							<input type="password" name="login" class="form-group input-lg" placeholder="Password" required>
						</div>

						<button type="submit" class="btn btn-default">Submit</button>

					</form>
				</div>
			</div>
			<div class="col-md-4 col-lg-4"></div>
	</div>
@stop