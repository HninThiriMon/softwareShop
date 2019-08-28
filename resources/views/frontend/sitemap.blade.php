@extends('frontend.layouts.master')

@section('title','product')
@section('content')
	<div class="crumb">

		<div class="crumb__img">
			<img src="/images/bread-crumb.jpg">
		</div>

		<div class="crumb__content">
			<div class="crumb__title">
				<h3>Sitemap</h3>
			</div>
		</div>
			
	</div>
	<div class="sitemap">
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3">
						<h4>OUR COMPANY</h4>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Term of Use</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="{{ url('/sitemap')}}">Site Map</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-3">
						<h4>PRODUCTS</h4>
						<ul>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
						</ul>
					</div>


					<div class="col-lg-3 col-md-3">
						<h4>QUICK LINK</h4>
						<ul>
							<li><a href="#">Lorem Ipsum Dolar Site</a></li>
							<li><a href="#">Lorem Ipsum Dolar Site</a></li>
							<li><a href="#">Lorem Ipsum Dolar Site</a></li>
							<li><a href="#">Lorem Ipsum Dolar Site</a></li>
							<li><a href="#">Lorem Ipsum Dolar Site</a></li>
							<li><a href="#">Lorem Ipsum Dolar Site</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-3">
						<h4>Contact</h4>
						<ul>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection