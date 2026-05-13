@extends('theme.mocksurl.website')

@section('content')
<!-- End Breadcrumbs -->
	
<!-- Shopping Cart -->
<div class="shopping-cart section">
	@include('theme.default.components.cart-body')
</div>
<!--/ End Shopping Cart -->

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection