<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Tenun Mulya &mdash; @yield('title')</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="#">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

	@stack('style')

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{ route('user.index') }}" >
								<img src="{{ asset('tenunmulya.png') }}" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="{{ $type_menu === 'home' ? 'current-list-item' : '' }}"><a href="{{ route('user.index') }}">Home</a></li>
								<li class="{{ $type_menu === 'about' ? 'current-list-item' : '' }}"><a href="{{ route('user.about') }}">About</a></li>
								<li class="{{ $type_menu === 'catalog' ? 'current-list-item' : '' }}"><a href="{{ route('user.catalog') }}">Catalog</a></li>
								<li class="{{ $type_menu === 'contact' ? 'current-list-item' : '' }}"><a href="{{ route('user.contact') }}">Contact</a></li>
								<li class="{{ $type_menu === 'rating' ? 'current-list-item' : '' }}"><a href="{{ route('user.rating') }}">Rating</a></li>
								<li>
									<div class="header-icons">
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
										@auth
											@if(auth('web')->user()->role == 'admin')
												<a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
												<a href="{{ route('admin.dashboard.index') }}">Dashboard</a>
											@else
												<a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
											@endif
											@else
												<a href="{{ route('auth.signin') }}">Join us</a>
												<a href="{{ route('auth.signin') }}">Sign in</a>
										@endauth
									</div>
								</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

    <!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

    <!-- main content area -->
    @yield('content')
    <!-- end main content area -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About Tenun Mulya</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Address</h2>
						<ul>
							<li>Jl. Bandar Lor Gg. IX A No.15, Bandar Lor, Kec. Mojoroto, Kota Kediri, Jawa Timur 64114.</li>
							<li>support@tenunmulya.com</li>
							<li>+62 8810 2799 0757</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="{{ route('user.index') }}">Home</a></li>
							<li><a href="{{ route('user.about') }}">About</a></li>
							<li><a href="{{ route('user.catalog') }}">Catalog</a></li>
							<li><a href="{{ route('user.contact') }}">Contact</a></li>
							<li><a href="{{ route('user.rating') }}">Rating</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Join us</h2>
						<p>Join to our website to get the latest updates.</p>
						<form action="{{ route('auth.signin') }}">
							<button type="submit" style="width: 100%">Sign up</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2024 - <a href="#">Kelompok 2</a>,  All Rights Reserved.
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	@stack('scripts')
	
	<!-- jquery -->
	<script src="{{ asset('frontend/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('frontend/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ asset('frontend/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ asset('frontend/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ asset('frontend/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ asset('frontend/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{ asset('frontend/js/main.js') }}"></script>

</body>
</html>