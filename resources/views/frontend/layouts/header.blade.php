<div class="topbar">
	<div class="container">
		
		<div class="col-lg-6 col-md-6 topbar__address">
			<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;
			C-051,Shwe Pyi Aye Condo,Bagayar Rd,Sanchaung Township,Yangon.
		</div>

		<div class="col-lg-3 col-md-3 topbar__phone">
			<i class="fa fa-phone" aria-hidden="true"></i> &nbsp;
			(+95)9123456
		</div>

		<div class="col-lg-3 col-md-3 topbar__user">
			<!-- <a class="topbar__login" data-toggle="modal" data-target="#login">Login</a> -->
			<a href="{{ url('/login') }}" class="topbar__login">Login</a>

			|

			<!-- <a class="topbar__register" data-toggle="modal" data-target="#register">Register</a> -->

			<a href="{{ url('/register') }}" class="topbar__register">Register</a>
		</div>
	</div>
</div><!-- topbar -->

<header class="header">
	<div class="container">
		<div class="row">
		<div class="col-lg-3 col-md-3 header__logo">
			<a href="{{ url('/') }}">BKP <span>PAYMENT</span></a>
		</div><!--header__logo-->

		<div class="col-lg-7 col-md-7 header__nav">
			<ul class="">
				<li class="header__list">
					<a href="#" class="header__list--active">Home</a>
				</li>
				<li class="header__list">
					<a href="#">About Us</a>
				</li>
				<li class="header__list">
					<a href="#">Products</a>
				</li>
				<li class="header__list">
					<a href="#">FAQ</a>
				</li>
				<li class="header__list">
					<a href="#">Contact Us</a>
				</li>
			</ul>
		</div><!--header__nav-->

		<div class="col-lg-2 col-md-2 header__icon">
			<i class="fa fa-search header__icon--search" aria-hidden="true"></i>
			<i class="fa fa-cart-arrow-down header__icon--cart" aria-hidden="true"></i>
		</div><!--header__icon-->
		</div>
	</div>
	

</header>