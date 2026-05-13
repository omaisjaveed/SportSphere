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
	

	<div class="dash-section">
		<div class="container">
			<div class="row">

				<div class="col-md-4">


					<!--  -->
					<div class="dash-left">
						<a href="#"><img src="{{ asset('public/theme/mocksurl/images/site-logo.png') }}" alt=""></a>
						<div class="profile-dropdown">
							<div class="profile-txt">
								<a href="#">
									<h6>H</h6>
									<h5>Profile <img src="{{ asset('public/theme/mocksurl/images/arrow-down.png') }}  " alt=""></h5>
								</a>
							</div>
							<ul id="nav-bar">
							
								<li>
									<a href="{{ url('profile/notifications') }}">
										<img src="{{ asset('public/theme/mocksurl/images/noti.png') }}  " alt="">
										<h5>Notifications</h5>
									</a>
								</li>
								
								<li>
									<a href="{{ url('profile/posts') }}">
										<img src="{{ asset('public/theme/mocksurl/images/post-plus.png') }}  " alt="">
										<h5>Add Post</h5>
									</a>
								</li>
								<!--<li>-->
								<!--	<a href="{{ url('profile/messages') }}">-->
								<!--		<img src="{{ asset('public/theme/mocksurl/images/message.png') }}  " alt="">-->
								<!--		<h5>Messages</h5>-->
								<!--	</a>-->
								<!--</li>-->
								<li>
									<a href="{{ url('/chat-rooms') }}">
										<img src="{{ asset('public/theme/mocksurl/images/message.png') }}  " alt="">
										<h5>Messages</h5>
									</a>
								</li>
								<li>
									<a href="{{ url('profile/settings') }}">
										<img src="{{ asset('public/theme/mocksurl/images/settings.png') }}  " alt="">
										<h5>Settings</h5>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="{{ asset('public/theme/mocksurl/images/light.png') }}  " alt="">
										<h5>Light Mode</h5>
									</a>
								</li>
							</ul>
						</div>
						<div class="profile-post">
							<a href="{{ url('profile/edit-profile') }}" ><img src=" {{ asset('public/theme/mocksurl/images/edit.png') }}  " alt="">Edit Profile</a>
						</div>
						<div data-aos="fade-down" class="wish-box">
							<div class="wishlist">
								<div class="buffalo">
									<a href="{{ url('team/buffalo-bills/posts') }}">
										<h4 class="color-change">Buffalo <br> Bills</h4>
									</a>
								</div>
								<div class="pulls">
									<img src=" {{ asset('public/theme/mocksurl/images/pulls.png') }} " alt="">
								</div>
								<div class="rating">
									<div class="pulls-rating">
										<h5 class="color-change">2&nbsp;&nbsp; - &nbsp;&nbsp;3</h5>

									</div>
									<div class="minus">
										<img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }}  " alt="">
									</div>
								</div>
							</div>
							<div class="wishlist">
								<div class="buffalo">
								    <a href="{{ url('team/Miami-Dolphins/posts') }}">
										<h4 class="color-change">Miami <br>Dolphins</h4>
									</a>
								</div>
								<div class="pulls">
									<img src="{{ asset('public/theme/mocksurl/images/pulls.png') }}  " alt="">
								</div>
								<div class="rating">
									<div class="pulls-rating">
										<h5 class="color-change">2&nbsp;&nbsp; - &nbsp;&nbsp;3</h5>

									</div>
									<div class="minus">
										<img src=" {{ asset('public/theme/mocksurl/images/Line 20.png') }}  " alt="">
									</div>
								</div>
							</div>
							<div class="wishlist">
								<div class="buffalo">
									<!--<h4 class="color-change">New York <br>Jets</h4>-->
									 <a href="{{ url('team/New-York-Jets/posts') }}">
									    <h4 class="color-change">New York <br>Jets</h4>
									</a>
								</div>
								<div class="pulls">
									<img src="{{ asset('public/theme/mocksurl/images/pulls.png') }}   " alt="">
								</div>
								<div class="rating">
									<div class="pulls-rating">
										<h5 class="color-change">2&nbsp;&nbsp; - &nbsp;&nbsp;3</h5>

									</div>
									<div class="minus">
										<img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }}  " alt="">
									</div>
								</div>
							</div>
							<div class="wishlist">
								<div class="buffalo">
									
									 <a href="{{ url('team/Baltimore-Ravens/posts') }}">
										<h4 class="color-change">Baltimore <br>Ravens</h4>
									</a>
								</div>
								<div class="pulls">
									<img src="{{ asset('public/theme/mocksurl/images/pulls.png') }}   " alt="">
								</div>
								<div class="rating">
									<div class="pulls-rating">
										<h5 class="color-change">2&nbsp;&nbsp; - &nbsp;&nbsp;3</h5>

									</div>
									<div class="minus">
										<img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }}" alt="">
									</div>
								</div>
							</div>
							<div class="wishlist">
								<div class="buffalo">
									<!--<h4 class="color-change">Pittsburgh <br>Steelers</h4>-->
									 <a href="{{ url('team/Pittsburgh-Steelers/posts') }}">
									    <h4 class="color-change">Pittsburgh <br>Steelers</h4>
									</a>
								</div>
								<div class="pulls">
									<img src="{{ asset('public/theme/mocksurl/images/pulls.png') }}  " alt="">
								</div>
								<div class="rating">
									<div class="pulls-rating">
										<h5 class="color-change">2&nbsp;&nbsp; - &nbsp;&nbsp;3</h5>

									</div>
									<div class="minus">
										<img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }}" alt="">
									</div>
								</div>
							</div>
							<div class="wishlist">
								<div class="buffalo">
								
									<a href="{{ url('team/Cincinnati-Bengals/posts') }}">
									   	<h4 class="color-change">Cincinnati <br>Bengals</h4>
									</a>
								</div>
								<div class="pulls">
									<img src="{{ asset('public/theme/mocksurl/images/pulls.png') }} " alt="">
								</div>
								<div class="rating">
									<div class="pulls-rating">
										<h5 class="color-change">2&nbsp;&nbsp; - &nbsp;&nbsp;3</h5>

									</div>
									<div class="minus">
										<img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }}" alt="">
									</div>
								</div>
							</div>
							<div class="wishlist">
								<div class="buffalo">
									
									<a href="{{ url('team/Cleveland-Browns/posts') }}">
									   <h4 class="color-change">Cleveland <br>Browns</h4>
									</a>
								</div>
								<div class="pulls">
									<img src=" {{ asset('public/theme/mocksurl/images/pulls.png') }}" alt="">
								</div>
								<div class="rating">
									<div class="pulls-rating">
										<h5 class="color-change">2&nbsp;&nbsp; - &nbsp;&nbsp;3</h5>

									</div>
									<div class="minus">
										<img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }}" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--<div class="post-modal-section">-->
					<!--	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
					<!--		<div class="modal-dialog modal-dialog-centered">-->
					<!--			<div class="modal-content">-->
					<!--				<div class="post-modal-header">-->
					<!--					<div class="post-user-header">-->
					<!--						<a href="#">-->
					<!--							<img src="{{ asset('public/theme/mocksurl/images/post-user.png') }}  " alt="">-->
					<!--						</a>-->
					<!--						<input type="text" placeholder="What’s In Your Mind ( Lorem Ipsum )">-->
					<!--					</div>-->
					<!--					<div class="post-close" data-bs-dismiss="modal" aria-label="Close">-->
					<!--						<img src="{{ asset('public/theme/mocksurl/images/close.png') }} " alt="">-->
					<!--					</div>-->
					<!--				</div>-->
					<!--				<div class="post-add-btn-wrap">-->
					<!--					<div class="post-add-btn-img">-->
					<!--						<a href="#"><img src="{{ asset('public/theme/mocksurl/images/target.png') }}" alt=""></a>-->
					<!--						<a href="#"><img src="{{ asset('public/theme/mocksurl/images/gallery.png') }}" alt=""></a>-->
					<!--						<a href="#"><img src="{{ asset('public/theme/mocksurl/images/gif.png') }}" alt=""></a>-->
					<!--					</div>-->
					<!--					<div class="post-add-btn">-->
					<!--						<a href="#" class="theme-btn">Post</a>-->
					<!--					</div>-->
					<!--				</div>-->
					<!--			</div>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					<!--  -->
					
				</div>

				<div class="col-md-8">


					<!--  -->
					<div class="dash-header">
						<div class="dash-nav-wrap">
							<div class="dash-search">
								<form action="">
									<input type="text" placeholder="Search here...">
									<img src="{{ asset('public/theme/mocksurl/images/search.png') }} " alt="">
								</form>
							</div>
							<div class="dash-nav">
								<ul>
									<li><a href="{{ url('/') }}">Home</a></li>
									<li><a href="{{ url('/AboutUs') }}">About</a></li>
									<li><a href="{{ url('/') }}">Features</a></li>
									<li><a href="{{ url('/trending') }}">Trending</a></li>
									<li class="li-chat">
									    
									    <a class="theme-btn" href="{{ url('/chat-rooms') }}">
									        Create chat room
									    </a>
									    
									 </li>
								</ul>
							</div>
						</div>
						<div class="dash-score-section">
							<marquee direction="" scrolldelay="85" onmouseover="this.stop();" onmouseout="this.start();">
								<div class="dash-score-main-flex">
									<div class="dash-score-wrap">
										<div class="dash-score-wrap-flex">
											<h5>Buffalo Bills</h5>
											<div class="dash-score">
												<div class="dash-score-flex">
													<h6>W</h6>
													<h6><span>13</span></h6>
												</div>
												<div class="dash-score-flex">
													<h6>L</h6>
													<h6><span>4</span></h6>
												</div>
												<div class="dash-score-flex">
													<h6>T</h6>
													<h6><span>0</span></h6>
												</div>
												<div class="dash-score-flex">
													<h6>PCT</h6>
													<h6><span>.765</span></h6>
												</div>
											</div>
										</div>
									</div>
									<div class="dash-score-wrap">
										<div class="dash-score-wrap-flex">
											<h5>Miami Dolphins</h5>
											<div class="dash-score">
												<div class="dash-score-flex">
													<h6>W</h6>
													<h6><span>13</span></h6>
												</div>
												<div class="dash-score-flex">
													<h6>L</h6>
													<h6><span>4</span></h6>
												</div>
												<div class="dash-score-flex">
													<h6>T</h6>
													<h6><span>0</span></h6>
												</div>
												<div class="dash-score-flex">
													<h6>PCT</h6>
													<h6><span>.765</span></h6>
												</div>
											</div>
										</div>
									</div>
									<div class="dash-score-wrap">
										<div class="dash-score-wrap-flex">
											<h5>New York Jets</h5>
											<div class="dash-score">
												<div class="dash-score-flex">
													<h6>W</h6>
													<h6><span>13</span></h6>
												</div>
												<div class="dash-score-flex">
													<h6>L</h6>
													<h6><span>4</span></h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</marquee>
							<div class="dash-score-more">
								<a href="#">
									<img src="{{ asset('public/theme/mocksurl/images/more.png') }} " alt="">
									<h6>More</h6>
								</a>
							</div>
						</div>
					</div>
					<!--  -->


					<div class="dash-content-section">
						<div class="row">
							<div class="col-md-8">
								@yield('content2')
								
							</div> <!-- End col-md-8 -->

							<div class="col-md-4">
								<div class="dash-blog">
									<div class="blog-box">
										<div class="blog-head">
											<h5>Latest News</h5>
											<a href="#">View<img src="{{ asset('public/theme/mocksurl/images/arrow-right.png') }}" alt=""></a>
										</div>
										<div class="blog-txt">
											<a href="#">
												<p>Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took ..</p>
												<img src="{{ asset('public/theme/mocksurl/images/blog-img.png') }}" alt="">
											</a>
										</div>
										<div class="blog-user">
											<a href="#"><img src="{{ asset('public/theme/mocksurl/images/blog-user.png') }}" alt=""></a>
											<p>Lorem Ipsum</p>
											<span>14m ago</span>
										</div>
									</div>

									<div class="blog-box">
										<div class="blog-head">
											<h5>Latest News</h5>
											<a href="#">View<img src="{{ asset('public/theme/mocksurl/images/arrow-right.png') }}" alt=""></a>
										</div>
										<div class="blog-txt">
											<a href="#">
												<p>Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took ..</p>
												<img src="{{ asset('public/theme/mocksurl/images/blog-img.png') }}" alt="">
											</a>
										</div>
										<div class="blog-user">
											<a href="#"><img src="{{ asset('public/theme/mocksurl/images/blog-user.png') }}" alt=""></a>
											<p>Lorem Ipsum</p>
											<span>14m ago</span>
										</div>
									</div>
								</div> <!-- End dash-blog -->
							</div> <!-- End col-md-4 -->
						</div> <!-- End row -->
					</div> <!-- End dash-content-section -->


					
				</div>

				
			</div>
		</div>
	</div>

	<!--/ End Header -->



	<!-- Start Footer Area -->
	<!--<footer>-->
	<!--	<section class="footer-sec">-->
	<!--		<div class="container">-->

	<!--			<div class="footer-logo">-->
	<!--				<img src="images/site-logo.png" alt="" class="footer-logo-img">-->
	<!--				<div class="half-cut">-->
	<!--					<img src="images/half-cut.png" alt="">-->
	<!--				</div>-->
	<!--			</div>-->

	<!--			<div data-aos="zoom-in-down" class="social-media">-->
	<!--				<ul>-->
	<!--					<li> <a href="#">Social Media :</a> </li>-->
	<!--					<li> <a href="#"> <img src="{{ asset('public/theme/mocksurl/images/social-1.svg') }}   " alt=""></a> </li>-->
	<!--					<li> <a href="#"> <img src="images/social-2.svg" alt=""></a> </li>-->
	<!--					<li> <a href="#"> <img src="images/social-3.svg" alt=""></a> </li>-->
	<!--					<li> <a href="#"> <img src="images/social-4.svg" alt=""></a> </li>-->
	<!--				</ul>-->
	<!--			</div>-->

	<!--			<div class="translator-btn-main">-->
	<!--				<div class="inner-flex">-->
	<!--					<div class="trans-one">-->
	<!--						<p>IN ENGLISH</p>-->
	<!--					</div>-->

	<!--					<div class="trans-btn-inner">-->
	<!--						<div class="switch">-->
	<!--							<input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">-->
	<!--							<label for="language-toggle"></label>-->
	<!--							<span class="on"></span>-->
	<!--							<span class="off"></span>-->
	<!--						</div>-->
	<!--					</div>-->

	<!--					<div class="trans-three">-->
	<!--						<p>EN ESPANOL</p>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->

	<!--			<div class="footer-nav">-->
	<!--				<ul>-->
	<!--					<li> <a href="#">Privacy Policy</a> </li>-->
	<!--					<li> <a href="#">Terms of Service </a> </li>-->
	<!--					<li> <a href="#"> Contact Us </a> </li>-->
	<!--				</ul>-->
	<!--			</div>-->

	<!--		</div>-->
	<!--	</section>-->
	<!--</footer>-->
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