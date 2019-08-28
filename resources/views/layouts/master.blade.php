<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>@yield('title')Berakah Peneil </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Hosting City Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />



		<!--end profile-css -->

		<!-- <link href="{{ asset('user_package/css/bootstrap.css') }}" rel="stylesheet"> -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/frontend/animate.css') }}" rel="stylesheet">
		<link href="{{ asset('css/frontend/flexslider.css') }}" rel="stylesheet">
		<link href="{{ asset('css/frontend/slickslider.css') }}" rel="stylesheet">
		<link href="{{ asset('css/frontend/slick-theme.css') }}" rel="stylesheet">
		<link href="{{ asset('css/frontend/square/green.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


		<!-- //font-awesome icons -->
		<!-- font -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>

		<!-- //font -->
	

		@yield('style-files')
	</head>
	
	<body>
		
	
		<div class="">
			@include('layouts.header')			
			@yield('content')
			@include('layouts.footer')
	    </div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/frontend/modernizr.js"></script>	
		<script src="js/frontend/jquery.flexslider.js"></script>
		<script src="js/frontend/slick.js"></script>
		<script src="js/frontend/active.js"></script>
		<script src="js/frontend/icheck.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				 $(window).on('load', function() { 
            // Animate loader off screen
            		$(".preloader").fadeOut("slow");
        		});


				$('.flexslider').flexslider({
				    animation: "fade",
				    slideshow: true,
				    rtl: false,
				    directionNav: true,
				    prevText: "",
				    nextText: "",
				    controlNav: false,
				    slideshowSpeed: 7000
				});

				$('.client__slider').slick({
	        		slidesToShow: 6,
	        		slidesToScroll: 3,
	        		autoplay: true,
	        		autoplaySpeed: 1500,
	        		arrows: false,
	        		dots: true,
	        		loop: false,
	        		pauseOnHover: false,
			        responsive: [{
			            breakpoint: 768,
			            settings: {
			                slidesToShow: 4
			            }
			        }, {
			            breakpoint: 520,
			            settings: {
			                slidesToShow: 3
			            }
			        }]
	    		});

	    		$('input').iCheck({
    				checkboxClass: 'icheckbox_square-green',
    				radioClass: 'iradio_square-green',
    				increaseArea: '20%' // optional
  				});

  			});
		</script>
	</body>	
</html>