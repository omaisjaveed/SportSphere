@extends('theme.mocksurl.website')

@section('content')

<!-- Start Checkout -->
<section class="shop checkout section">
	<div class="container">
		<div class="row"> 

			<div class="col-lg-12">	
				<div class="order-success">
					<i class="ti-check-box"></i>
					<h2>{{ _lang('Your Order has been Placed Sucessfully') }}</h2>
					<p>{{ _lang('Your Order ID') }}#: {{ $order->id }}</p>
					<a href="{{ url('/the-shop') }}" class="btn-back-to-store">{{ _lang('Back to Store') }}</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Checkout -->

@endsection

