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
			
    @if(Auth::check())
      <a class="dropdown-item" href="{{url('user/logout')}}">Logout</a><br>
    @else
      <a href="{{url('user/login')}}" class="topbar__login">Login</a> 
	  /
      <a href="{{url('user/register')}}" class="topbar__register">Register</a>
    @endif

			<!-- <a class="topbar__register" data-toggle="modal" data-target="#register">Register</a> -->

		
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
					<a href="{{url('package-list')}}">Products</a>
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
























































<!-- <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
    @if(Auth::check())
      <a class="dropdown-item" href="{{url('user/logout')}}">Logout</a><br>
    @else
      <a class="dropdown-item" href="{{url('user/login')}}">Login</a><br>
      <a class="dropdown-item" href="{{url('user/register')}}">Register</a><br>
    @endif
      <div class="dropdown-divider"></div>
    
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul> -->