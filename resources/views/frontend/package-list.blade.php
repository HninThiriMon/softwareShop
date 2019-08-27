@extends('frontend.layouts.master')

@section('title','product')
@section('content')
	<div class="crumb">

		<div class="crumb__img">
			<img src="/images/bread-crumb.jpg">
		</div>

		<div class="crumb__content">
			<div class="crumb__title">
				<h3>Product-List</h3>
			</div>
		</div>
		
	</div>


	<div class="package_list">
		<div class="container packages">
			<div class="row package">
				<h2>Product Package</h2>
				<div class="col-md-4 col-lg-4">
					<div class="package__item">
						<div class="package__img">
							<img src="/images/blog_5.jpg">
						</div>
						
						<div class="package__title">
							<h4>Product Name</h4>
							<div class="package__price">
								<sup>$</sup>
								755
							</div>
							<small>Per Year</small>
						</div>
						<div class="package__body">

							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							

							<a href="{{ url('/package-list') }}" class="package__btn">View More</a> 

						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="package__item">
						<div class="package__img">
							<img src="/images/blog_5.jpg">
						</div>
						
						<div class="package__title">
							<h4>Product Name</h4>
							<div class="package__price">
								<sup>$</sup>
								755
							</div>
							<small>Per Year</small>
						</div>
						<div class="package__body">

							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							

							<a href="{{ url('/package-list') }}" class="package__btn">View More</a> 

						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="package__item">
						<div class="package__img">
							<img src="/images/blog_5.jpg">
						</div>


						
						<div class="package__title">
							<h4>Product Name</h4>
							<div class="package__price">
								<sup>$</sup>
								755
							</div>
							<small>Per Year</small>
						</div>
						<div class="package__body">

							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							

							<a href="{{ url('/package-list') }}" class="package__btn">View More</a> 

						</div>
					</div>
				</div>
			</div>

			<div class="row package">
				<h2>Product Package</h2>
				<div class="col-md-4 col-lg-4">
					<div class="package__item">
						<div class="package__img">
							<img src="/images/blog_5.jpg">
						</div>
						
						<div class="package__title">
							<h4>Product Name</h4>
							<div class="package__price">
								<sup>$</sup>
								755
							</div>
							<small>Per Year</small>
						</div>
						<div class="package__body">

							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							

							<a href="{{ url('/package-list') }}" class="package__btn">View More</a> 

						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="package__item">
						<div class="package__img">
							<img src="/images/blog_5.jpg">
						</div>
						
						<div class="package__title">
							<h4>Product Name</h4>
							<div class="package__price">
								<sup>$</sup>
								755
							</div>
							<small>Per Year</small>
						</div>
						<div class="package__body">

							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							

							<a href="{{ url('/package-list') }}" class="package__btn">View More</a> 

						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="package__item">
						<div class="package__img">
							<img src="/images/blog_5.jpg">
						</div>


						
						<div class="package__title">
							<h4>Product Name</h4>
							<div class="package__price">
								<sup>$</sup>
								755
							</div>
							<small>Per Year</small>
						</div>
						<div class="package__body">

							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							

							<a href="{{ url('/package-list') }}" class="package__btn">View More</a> 

						</div>
					</div>
				</div>
			</div>

			<div class="paginate">
				<ul class="">
					<li><a href="#" class="prev">&laquo</a></li>
					<li><a href="#" class="active">1</a></li>
					<li> <a href="#">2</a></li>
					<li> <a href="#">3</a></li>
					<li> <a href="#">4</a></li>
					<li> <a href="#">5</a></li>
					<li><a href="#" class="next">&raquo;</a></li>
				</ul><!--Pagination-->
			</div>
		</div>
	</div><!--packages-->

	<!-- https://codepen.io/vineethtr/pen/MYBeyB -->

@stop
<!--list.scss-->