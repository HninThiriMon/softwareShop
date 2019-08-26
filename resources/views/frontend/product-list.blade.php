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


	<div class="product__list">
		<div class="available-products">
			<div class="row product">
				<h2></h2>
				<div class="col-md-4 col-lg-4">
					<div class="row product__item">
						<div class="col-lg-3 col-md-3">
							<div class="product__item--number">
								1
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<h4>Product One</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.....<a href="#">MORE</a></p>
						</div>
					
					</div>
					
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="row product__item">
						<div class="col-lg-3 col-md-3">
							<div class="product__item--number">
								2
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<h4>Product Two</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.....<a href="#">MORE</a></p>
						</div>
					
					</div>
					
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="row product__item">
						<div class="col-lg-3 col-md-3">
							<div class="product__item--number">
								3
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<h4>Product Three</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.....<a href="#">MORE</a></p>
						</div>
					
					</div>
					
				</div>
			</div><!--product-->

			<div class="row product">
				<div class="col-md-4 col-lg-4">
					<div class="row product__item">
						<div class="col-lg-3 col-md-3">
							<div class="product__item--number">
								1
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<h4>Product One</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.....<a href="#">MORE</a></p>
						</div>
					
					</div>
					
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="row product__item">
						<div class="col-lg-3 col-md-3">
							<div class="product__item--number">
								2
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<h4>Product Two</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.....<a href="#">MORE</a></p>
						</div>
					
					</div>
					
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="row product__item">
						<div class="col-lg-3 col-md-3">
							<div class="product__item--number">
								3
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<h4>Product Three</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.....<a href="#">MORE</a></p>
						</div>
					
					</div>
					
				</div>
			</div><!--product-->

			<div class="row product">
				<div class="col-md-4 col-lg-4">
					<div class="row product__item">
						<div class="col-lg-3 col-md-3">
							<div class="product__item--number">
								1
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<h4>Product One</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.....<a href="#">MORE</a></p>
						</div>
					
					</div>
					
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="row product__item">
						<div class="col-lg-3 col-md-3">
							<div class="product__item--number">
								2
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<h4>Product Two</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.....<a href="#">MORE</a></p>
						</div>
					
					</div>
					
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="row product__item">
						<div class="col-lg-3 col-md-3">
							<div class="product__item--number">
								3
							</div>
						</div>

						<div class="col-lg-9 col-md-9">
							<h4>Product Three</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore.....<a href="#">MORE</a></p>
						</div>
					
					</div>
					
				</div>
			</div><!--product-->
			
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

		</div><!--available-products-->

		
	</div>

	

	<!-- Style as home product available -->
	<!--list.scss-->
	

@stop