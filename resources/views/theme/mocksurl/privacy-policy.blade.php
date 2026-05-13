@extends('theme.mocksurl.website')

@section('content')

<section class="main-banner">
    <div class="conrtainer">
        <div class="banner-bg">
            <img src="{{ asset('public/theme/mocksurl/images/banner-bg-img.PNG') }}" alt="">
            <div data-aos="fade-right" class="banner-cont">
                <h1>Privacy Policy</h1>
            </div>
        </div>
    </div>
</section>

<section class="privacy">
    <div class="container">
        <div class="policy">
            <h2>{{ get_trans_option('privacy_policy_title') }}</h2>
        </div>
        <div class="p-1">
            {!! get_trans_option('privacy_policy_content1') !!}
        </div>

    </div>
</section>



@endsection