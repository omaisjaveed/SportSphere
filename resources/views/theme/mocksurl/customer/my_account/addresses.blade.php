@extends('theme.mocksurl.website2')

@section('content')
	
<!-- Login Screen -->
<section id="auth"> 
	<div class="container">
		<div class="row" style="margin-top:90px">
		   <div class="col-lg-4 col-md-4">
			  <div class="customer_dashboard">
				 @include('theme.mocksurl.customer.my_account.menu')
			  </div>
		   </div>
		   

		   
		</div>
	</div>
</section>
<!--/ End Login Screen -->
		

@endsection
