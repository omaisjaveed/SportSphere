<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta Tag -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content="<?php echo isset($description) ? $description : '';  ?>" name="description">
	<title>{{ isset($seo_title) ? $seo_title : get_option('site_title', config('app.name')) }}</title>


	<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
	$url_p = "https://";
} else {
	$url_p = "https://";
}
$url_p .= $_SERVER['HTTP_HOST'];
$url_p .= $_SERVER['REQUEST_URI'];
$url_p = str_replace(".php", "", $url_p);
$url_p = str_replace("index", "", $url_p);
$url_p = preg_replace('/\?.*/', '', $url_p);
$url_p = str_replace("//", "/", $url_p);
$url_p = str_replace("https:/", "https://", $url_p);
	?>

	<meta property="og:locale" content="en_US" />
	<meta property="fb:app_id" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="<?= $url_p; ?>" />
	<meta property="og:site_name" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:secure_url" content="" />
	<meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="576" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:image:alt" content="" />

	<link rel="icon" type="image/png" href="{{ get_favicon() }}">
	<!-- Box Icon Start -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="{{ asset('public/theme/mocksurl/css/slick.css') }}">


	<!-- LIBRARIES -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- CUSTOM STYLE -->
	<link rel="stylesheet" href="{{ asset('public/theme/mocksurl/css/style.css') }}">

	<!-- Bootstrap -->
	<!-- <link rel="stylesheet" href="{{ asset('public/theme/default/css/bootstrap.css') }}"> -->
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/niceselect.css') }}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/animate.css') }}">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/flex-slider.min.css') }}">
	<!-- Jquery Ui -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/jquery-ui.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/owl-carousel.css') }}">
	<!-- Slicknav -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/slicknav.min.css') }}">

	<link href="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet" />

	<!-- <link rel="stylesheet" href="{{ asset('public/theme/default/css/reset.css') }}"> -->
	<!-- <link rel="stylesheet" href="{{ asset('public/theme/default/style.css?v=1.1') }}"> -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/responsive.css?v=1.1') }}">




	<link rel="stylesheet" href="https://demos.creative-tim.com/fullcalendar/assets/css/fullcalendar.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ asset('public/theme/mocksurl/css/style.css?v=1.1') }}  ">

	@include('theme.default.components.custom_styles')
	@include('layouts.others.languages')

	<script type="text/javascript">
		var _url = "{{ url('') }}";
	</script>

</head>

<body class="js">
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	@if(\Session::has('checkout_error'))
		<div class="alert alert-danger rounded-0">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<p class="text-center m-0 text-white">{{ session('checkout_error') }}</p>
		</div>
	@endif

	<!-- Header -->
	

	<header class="header_bg-transparent">
		<div class="header-top">
			<div class="site-logo">
				<img src="{{ asset('public/theme/mocksurl/images/site-logo.png') }}  " alt="">
			</div>

			<div class="sub-nav-line">
				<ul>
					<li> <a href="{{ url('/') }}">HOME</a> </li>
					<li> <a href="{{ url('/AboutUs') }}">ABOUT</a> </li>
					<li> <a href="{{ url('/') }}">FEATURES</a> </li>
					<li> <a href="{{ url('/trending') }}">TRENDING</a> </li>
				</ul>
			</div>

			<div class="search-field">
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Search Here...">
				<div class="search-icn">
					<p><i class="fa-solid fa-magnifying-glass"></i></p>
				</div>
			</div>

			<div class="sign-up-btn">
				<!-- <a href="login.php">SIGNIN</a>
				<a href="signup.php">SIGNUP</a> -->

				@if(! Auth::check())
					<!-- <i class="ti-lock"></i> -->
					<a href="{{ url('/sign_in') }}">{{ _lang('Login') }}</a>
				@else
					<!-- <i class="ti-user"></i> -->
					 <a href="{{ url('/profile/posts/') }}">{{ _lang('Profile') }}</a>
					<i class="ti-power-off"></i><a href="{{ url('/sign_out') }}">{{ _lang('Logout') }}</a>
				@endif
				

			</div>

			<div class="toggle_btn">
				<input type="checkbox" class="checkbox" id="toggle-checkbox">
				<label for="toggle-checkbox" class="checkbox-label">
					<i class="fas fa-moon"></i>
					<i class="fas fa-sun"></i>
					<span class="ball"></span>
				</label>
			</div>

		</div>
	</header>

	<!--/ End Header -->

	@yield('content')

	<!-- Start Footer Area -->
	<footer>
		<section class="footer-sec">
			<div class="container">

				<div class="footer-logo">
					<img src="{{ asset('public/theme/mocksurl/images/site-logo.png') }}   " alt="" class="footer-logo-img">
					<div class="half-cut">
						<img src="{{ asset('public/theme/mocksurl/images/half-cut.png') }}   " alt="">
					</div>
				</div>

				<div data-aos="zoom-in-down" class="social-media">
					<ul>
						<li> <a href="#">Social Media :</a> </li>
						<li> <a href="#"> <img src="{{ asset('public/theme/mocksurl/images/social-1.svg') }}  " alt=""></a> </li>
						<li> <a href="#"> <img src="{{ asset('public/theme/mocksurl/images/social-2.svg') }}  " alt=""></a> </li>
						<li> <a href="#"> <img src="{{ asset('public/theme/mocksurl/images/social-3.svg') }}  " alt=""></a> </li>
						<li> <a href="#"> <img src="{{ asset('public/theme/mocksurl/images/social-4.svg') }}   " alt=""></a> </li>
					</ul>
				</div>

				<div class="translator-btn-main">
					<div class="inner-flex">
						<div class="trans-one">
							<p>IN ENGLISH</p>
						</div>

						<div class="trans-btn-inner">
							<div class="switch">
								<input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
								<label for="language-toggle"></label>
								<span class="on"></span>
								<span class="off"></span>
							</div>
						</div>

						<div class="trans-three">
							<p>EN ESPANOL</p>
						</div>
					</div>
				</div>

				<div class="footer-nav">
					<ul>
						<li> <a href="#">Privacy Policy</a> </li>
						<li> <a href="#">Terms of Service </a> </li>
						<li> <a href="#"> Contact Us </a> </li>
					</ul>
				</div>

			</div>
		</section>
	</footer>
	<!-- /End Footer Area -->

	<script src="{{ asset('public/theme/mocksurl/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/theme/mocksurl/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/theme/mocksurl/js/slick.js') }}"></script>
	<!--<script  src="js/jquery.fancybox.min.js"></script>-->
	<script src="{{ asset('public/theme/mocksurl/js/wow.js') }}"></script>
	<script src="{{ asset('public/theme/mocksurl/js/functions.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
		integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>




	<script src="{{ asset('public/theme/mocksurl/js/jquery.min.js') }}  "></script>
	<script  src="{{ asset('public/theme/mocksurl/js/bootstrap.min.js') }}  "></script>
	<script  src="{{ asset('public/theme/mocksurl/js/slick.js') }}  "></script>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
	<script  src="{{ asset('public/theme/mocksurl/js/wow.js') }}  "></script>
	<script  src="{{ asset('public/theme/mocksurl/js/functions.js') }}   "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
    integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://demos.creative-tim.com/fullcalendar/assets/js/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>



	<script>
		AOS.init();
	</script>

	<!-- Jquery -->
	<script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('public/theme/default/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('public/theme/default/js/bootstrap.min.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('public/theme/default/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('public/theme/default/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('public/theme/default/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('public/theme/default/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('public/theme/default/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('public/theme/default/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('public/theme/default/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('public/theme/default/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('public/theme/default/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('public/theme/default/js/easing.js') }}"></script>

	<script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/typeahead.bundle.js') }}"></script>

	<script src="{{ asset('public/backend/assets/js/print.js') }}"></script>

	<!-- Active JS -->
	<script src="{{ asset('public/theme/default/js/active.js?v=1.2') }}"></script>

	<!-- Custom JS -->
	@yield('js-script')
</body>

</html>