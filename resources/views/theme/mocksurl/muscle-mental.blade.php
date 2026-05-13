@extends('theme.mocksurl.website')

@section('content')

<section class="main-banner">
	<div class="conrtainer">

		<div class="banner-bg">
			<img src="{{ asset('public/theme/mocksurl/images/banner-bg-img.PNG') }}" alt="">
			<div data-aos="fade-right" class="banner-cont">
				<h1>Performance Recovery & Restoration</h1>
			</div>
		</div>
	</div>
</section>

<section class="muscle-mental">
	<div class="container">
		<div class="medical-treatment">
			<div data-aos="flip-left" class="muscles">
				<h2>{{ get_trans_option('muscle_title1') }}</h2>
				<p>{!! get_trans_option('muscle_content') !!}</p>
				<!--<div class="start-btn-new">-->
				<!--	<a-->
				<!--		href="{{ get_trans_option('muscle_button_link') }}">{{ get_trans_option('muscle_button_text') }}</a>-->
				<!--</div>-->
			</div>
		</div>
	</div>
</section>


@endsection