@extends('theme.mocksurl.website')

<style>
	.header_bg-transparent{
		display:none !important;
	}
	.footer-sec{
		display:none;
	}
</style>
@section('content')
	
<!-- Login Screen -->
<section class="login-section">
        <div class="close-link">
            <a href="#"></a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="login-left">
                    <a href="index.php"><img src="images/site-logo.png" alt=""></a>
                    <h2>Welcome to <br> one of the largest <br> betting communities <br> on the planet.</h2>
                </div>
            </div>
            <div class="col-md-6">


				@if(\Session::has('success'))
					<div class="alert alert-success mt-4">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>{!! xss_clean(session('success')) !!}</span>
					</div>
				@endif

				@if(\Session::has('error'))
					<div class="alert alert-danger mt-4">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<span>{!! xss_clean(session('error')) !!}</span>
					</div>
				@endif



				<!--  -->
				<div class="login-right">
					<a href="#"><img src="{{ asset('public/theme/mocksurl/images/site-logo.png') }} " alt=""></a>
					<form action="{{ url('/sign_in') }}" method="post">
							@csrf
							<input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="{{ _lang('Email') }}" required>
							<input type="password" name="password" class="form-control" placeholder="{{ _lang('Password') }}" required>
							<input type="hidden" name="redirect_to" value="{{ url()->previous() }}">
	
							<button type="submit" class="btn-login">{{ _lang('Login') }}</button>
								
							@if(get_option('google_login') == 'enabled')
								<a href="{{ url('/login/google') }}" class="btn btn-google"> {{ _lang('Continue With Google') }}</a>
							@endif
	
							@if(get_option('facebook_login') == 'enabled')
								<a href="{{ url('/login/facebook') }}" class="btn btn-facebook"> {{ _lang('Continue With Facebook') }}</a>
							@endif
	
							<!-- <div class="text-center">
								<a href="{{ route('password.request') }}" class="right_link">{{ _lang('Forget Your Password?') }}</a>
							</div> -->

							<!-- <p>Don’t have an account? <a href="{{ url('sign_up') }}">Sign up?</a></p> -->
	
					</form>


					<p>Don’t have an account? <a href="{{ url('sign_up') }}">Sign up</a></p>
                    <div class="or">or</div>
                    <div class="sign-with-google">
                        <a href="#">
                            <img src="images/google.svg" alt="">
                            <span>Continue with Google</span>
                        </a>
                    </div>
                    <div class="sign-with-google">
                        <a href="#">
                            <img src="images/apple.png" alt="">
                            <span>Continue with Apple</span>
                        </a>
                    </div>
                    <div class="small-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo, sapien a mattis faucibus, ipsum odio varius eros, nec posuere ligula lacus id ante. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                        <p>Phasellus in dolor id nulla tincidunt tempor. Curabitur vel sem ut ante efficitur porta. Nulla vitae arcu. Maecenas ut erat at odio posuere.</p>
                    </div>
                </div> 

				</div>
				<!--  -->

                <!-- <div class="login-right">
                    <a href="#"><img src="images/site-logo.png" alt=""></a>
                    <h5>Log In</h5>
                    <form action="">
                        <input type="text" placeholder="Email or Username">
                        <div class="password-show">
                            <input type="password" placeholder="Password" id="passwordField">
                            <img src="images/eye.svg" id="togglePassword">
                        </div>
                        <p>Forgot your <a href="#">password?</a></p>
                        <button>Sign In</button>
                    </form>


                    <p>Don’t have an account? <a href="{{ url('sign_up') }}">Sign up?</a></p>
                    <div class="or">or</div>
                    <div class="sign-with-google">
                        <a href="#">
                            <img src="images/google.svg" alt="">
                            <span>Continue with Google</span>
                        </a>
                    </div>
                    <div class="sign-with-google">
                        <a href="#">
                            <img src="images/apple.png" alt="">
                            <span>Continue with Apple</span>
                        </a>
                    </div>
                    <div class="small-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo, sapien a mattis faucibus, ipsum odio varius eros, nec posuere ligula lacus id ante. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                        <p>Phasellus in dolor id nulla tincidunt tempor. Curabitur vel sem ut ante efficitur porta. Nulla vitae arcu. Maecenas ut erat at odio posuere.</p>
                    </div>
                </div> -->
            </div>
        </div>
</section>
<!--/ End Login Screen -->
		

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection