@extends('theme.mocksurl.website')

@section('content')

<section class="main-banner">
	<div class="conrtainer">

		<div class="banner-bg">
			<img src="{{ asset('public/theme/mocksurl/images/banner-bg-img') }}.PNG" alt="">

			<div data-aos="fade-right" class="banner-cont">
				<h1>SERVICES</h1>
			</div>
		</div>
	</div>
</section>

<section class="players-info">
	<div class="container">
		<div class="our-services">

			<div data-aos="flip-up" class="slider-top">
				<h2>{{ get_trans_option('service_title') }}</h2>
				<p>{!! get_trans_option('service_content') !!}</p>
			</div>
			<div class="circle-bio">
				<div class="container">
					<div class="row">
						@if(isset($services) && $services->isNotEmpty())
							@foreach($services as $service)
								<div class="col-md-4">
									<div data-aos="flip-up" class="circle-1">
										<img src="{{ url('public/' . $service->image_url) }}" alt="{{ $service->name }}">
										<h3>{{ $service->name }}</h3>
										<div class="circle-wrapper">
											{!! $service->description !!}
										</div>
										<!--<a href="#"><i class="fa-solid fa-arrow-right"></i></a>-->
									</div>
								</div>
							@endforeach
						@else
							<p>No services available</p>
						@endif
					</div>
					<div class="book-btn">
						<a
							href="{{ get_trans_option('service_button_link') }}">{{ get_trans_option('service_button_text') }}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection