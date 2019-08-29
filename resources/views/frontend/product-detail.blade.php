@extends('frontend.layouts.master')


@section('content')
<div class="crumb">

	<div class="crumb__img">
	<img src="/images/bread-crumb.jpg">
	</div>

	<div class="crumb__content">
		<div class="crumb__title">
			<h3>Product Detail</h3>
		</div>
	</div>
	
</div>

<div class="product-detail">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-md-8">
				<div class="tab-content">

		    		<div id="nature" class="tab-pane fade in active">
		      			
		      			<img src="/images/img1.jpg">
		    		</div>

		    		<div id="snow" class="tab-pane fade">
					    
					    <img src="/images/img2.jpg">
				    </div>

				    <div id="mountain" class="tab-pane fade">
						
						<img src="/images/img3.jpg">
					</div>

					<div id="light" class="tab-pane fade">
						
						<img src="/images/img4.jpg">
					</div>
				</div><!--tab content-->


				<div class="nav nav-pills">
					<div>
						<a data-toggle="pill" href="#nature" class="active">
							<img src="/images/img1.jpg">
						</a>
					</div>

					<div>
						<a data-toggle="pill" href="#snow">
							<img src="/images/img2.jpg">
						</a>
					</div>

					<div>
						<a data-toggle="pill" href="#mountain">
							<img src="/images/img3.jpg">
						</a>
					</div>

					<div>
						<a data-toggle="pill" href="#light">
							<img src="/images/img4.jpg">
						</a>
					</div>
				</div>

				<h3>BKP Product Name</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div><!--col-lg-8 col-md-8-->

			<div class="col-lg-4 col-md-4 buy-now">
				<!-- <p>Alternate Date: <input type = "text" id = "datepicker-4"></p> -->
				<div class="">
					<h3>Buy Product</h3>
					
					<div class="buy-product__date-input">
		                <input type='text' class="form-control" id='start-date' required placeholder="Choose Start Date" />

		                <input type='text' class="form-control" id='end-date' required placeholder="Choose End Date" />
	                </div>

				</div>

			</div><!--col-lg-4 col-md-4-->

		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript">

	$("#start-date").datepicker({
        dateFormat: "MM dd, yy"
    });

    $("#end-date").datepicker({
        dateFormat: "MM dd, yy"
    });

</script>

@endsection