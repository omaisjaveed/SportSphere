@extends('theme.mocksurl.website')

<style>
	.header_bg-transparent{
		display:none !important;
	}
	.footer-sec{
		display:none;
	}


    .team-selection {
        margin-top: 20px;
    }

    .team-selection h5 {
        margin-bottom: 10px;
        font-weight: bold;
    }

    .team-checkboxes {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .team-checkbox {
        position: relative;
    }

    .team-checkbox input[type="checkbox"] {
        display: none;
    }

    .team-checkbox label {
        display: inline-block;
        padding: 10px 18px;
        border-radius: 10px;
        background: #f3f4f6;
        color: #111827;
        font-weight: 500;
        cursor: pointer;
        transition: 0.3s ease;
        border: 2px solid transparent;
    }

    .team-checkbox input[type="checkbox"]:checked + label {
        background-color: #ed1d23;
        color: #fff;
        border-color: #ed1d23;
    }

    .team-checkbox label:hover {
        background-color: #e5e7eb;
    }

    .checkbox-error {
        color: #dc2626;
        font-size: 14px;
        margin-top: 8px;
        display: none;
    }

</style>
@section('content')
	
<!-- Login Screen -->
<section class="login-section signup-section">
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
                <div class="login-right">

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
                    <!-- <a href="#"><img src="images/site-logo.png" alt=""></a> -->
                    <h5>Get Started</h5>




                    <!--  -->
                    <form action="{{ url('/sign_up') }}" method="post">
						@csrf
						<input type="text" name="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="{{ _lang('Name/Username') }}">
						
						@if($errors->has('name'))
							<div class="invalid-feedback">
					          {{ $errors->first('name') }}
					        </div>
				        @endif

						<input type="email" name="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="{{ _lang('Email') }}">

						@if($errors->has('email'))
							<div class="invalid-feedback">
					          {{ $errors->first('email') }}
					        </div>
				        @endif

						<input type="text" name="phone"  value="{{ old('phone') }}" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="{{ _lang('Phone') }}">

						@if($errors->has('phone'))
							<div class="invalid-feedback">
					          {{ $errors->first('phone') }}
					        </div>
				        @endif

						<input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ _lang('Password') }}">

						@if($errors->has('password'))
							<div class="invalid-feedback">
					          {{ $errors->first('password') }}
					        </div>
				        @endif

						<input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="{{ _lang('Password Confrimation') }}">

						@if($errors->has('password_confirmation'))
							<div class="invalid-feedback">
					          {{ $errors->first('password_confirmation') }}
					        </div>
				        @endif


                        <div class="team-selection">
                        <h6>Select your favorite Leagues (Max 4):</h6>
                        <div class="team-checkboxes" id="team-checkboxes">
                            @php
                                $teams = ['MLB', 'NHL', 'NFL', 'NBA', 'MLS', 'EPL', 'La Liga'];
                            @endphp

                            @foreach ($teams as $team)
                                <div class="team-checkbox">
                                    <input type="checkbox" id="team_{{ $loop->index }}" name="favorite_teams[]" value="{{ $team }}" onchange="limitCheckboxSelection(this)">
                                    <label for="team_{{ $loop->index }}">{{ $team }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div id="checkbox-error" class="checkbox-error">You can select up to 4 Leagues only.</div>
                    </div>

						<button type="submit" class="btn-login">{{ _lang('Sign Up') }}</button>

						<!-- <div class="text-center">
							<a href="{{ url('sign_in') }}" class="right_link">{{ _lang('Already have an account?') }}</a>
						</div> -->
					</form>
                    <!--  -->



                    <!-- <form action="">
                        <input type="text" placeholder="Full Name">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Username">
                        <div class="password-show">
                            <input type="password" placeholder="Password" id="passwordField">
                            <img src="images/eye.svg" id="togglePassword">
                            <span>6+ characters including at least one number</span>
                        </div>
                        <div class="inp-check">
                            <input type="checkbox">
                            <p>Sign me up for upcoming newsletters.</p>
                        </div>
                        <button>Sign Up</button>
                    </form> -->




                    <p>Already have an account? <a href=" {{ url('sign_in') }}">Log in</a></p>
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
                    <p>By signing up, you agree to the <a href="#">Terms and Conditions.</a></p>
                </div>
            </div>
        </div>
    </section>
<!--/ End Login Screen -->
		

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>

<script>
    function limitCheckboxSelection(checkbox) {
        const checkboxes = document.querySelectorAll('input[name="favorite_teams[]"]:checked');
        const errorDiv = document.getElementById('checkbox-error');
        
        if (checkboxes.length > 4) {
            checkbox.checked = false;
            errorDiv.style.display = 'block';
        } else {
            errorDiv.style.display = 'none';
        }
    }
</script>
@endsection