@extends('theme.mocksurl.website')

@section('content')


<section class="banner-top" style="background-image: url('{{ get_option('banner_image') != '' ? asset('public/uploads/media/'.get_option('banner_image')) : asset('public/theme/default/images/slider-image2.jpg') }}')"">    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div data-aos="fade-down" class="wish-box">
                    <div class="wishlist">
                        <div class="buffalo">
                            <a href="buffalo-bills.php"><h4 class="color-change">Buffalo <br> Bills</h4></a>
                        </div>
                        <div class="pulls">
                            <img src=" {{ asset('public/theme/mocksurl/images/pulls.png') }} " alt="">
                        </div>
                        <div class="rating">
                            <div class="pulls-rating">
                                <h5 class="color-change">22.86</h5>
                                <p class="color-change">14.21 ( 5.94%)</p>
                            </div>
                            <div class="minus">
                                <img src="images/Line 20.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wishlist">
                        <div class="buffalo">
                            <h4 class="color-change">Miami <br>Dolphins</h4>
                        </div>
                        <div class="pulls">
                            <img src="{{ asset('public/theme/mocksurl/images/pulls.png') }}  " alt="">
                        </div>
                        <div class="rating">
                            <div class="pulls-rating">
                                <h5 class="color-change">22.86</h5>
                                <p class="color-change">14.21 ( 5.94%)</p>
                            </div>
                            <div class="minus">
                                <img src="{{ asset('public/theme/mocksurl/images/pulls.png') }} " alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wishlist">
                        <div class="buffalo">
                            <h4 class="color-change">New York <br>Jets</h4>
                        </div>
                        <div class="pulls">
                            <img src="images/pulls.png" alt="">
                        </div>
                        <div class="rating">
                            <div class="pulls-rating">
                                <h5 class="color-change">22.86</h5>
                                <p class="color-change">14.21 ( 5.94%)</p>
                            </div>
                            <div class="minus">
                                <img src="{{ asset('public/theme/mocksurl/images/pulls.png') }}   images/Line 20.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wishlist">
                        <div class="buffalo">
                            <h4 class="color-change">Baltimore <br>Ravens</h4>
                        </div>
                        <div class="pulls">
                            <img src="images/pulls.png" alt="">
                        </div>
                        <div class="rating">
                            <div class="pulls-rating">
                                <h5 class="color-change">22.86</h5>
                                <p class="color-change">14.21 ( 5.94%)</p>
                            </div>
                            <div class="minus">
                                <img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wishlist">
                        <div class="buffalo">
                            <h4 class="color-change">Pittsburgh <br>Steelers</h4>
                        </div>
                        <div class="pulls">
                            <img src="{{ asset('public/theme/mocksurl/images/pulls.png') }}  " alt="">
                        </div>
                        <div class="rating">
                            <div class="pulls-rating">
                                <h5 class="color-change">22.86</h5>
                                <p class="color-change">14.21 ( 5.94%)</p>
                            </div>
                            <div class="minus">
                                <img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }}  " alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wishlist">
                        <div class="buffalo">
                            <h4 class="color-change">Cincinnati <br>Bengals</h4>
                        </div>
                        <div class="pulls">
                            <img src="images/pulls.png" alt="">
                        </div>
                        <div class="rating">
                            <div class="pulls-rating">
                                <h5 class="color-change">22.86</h5>
                                <p class="color-change">14.21 ( 5.94%)</p>
                            </div>
                            <div class="minus">
                                <img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }} " alt="">
                            </div>
                        </div>
                    </div>
                    <div class="wishlist">
                        <div class="buffalo">
                            <h4 class="color-change">Cleveland <br>Browns</h4>
                        </div>
                        <div class="pulls">
                            <img src="images/pulls.png" alt="">
                        </div>
                        <div class="rating">
                            <div class="pulls-rating">
                                <h5 class="color-change">22.86</h5>
                                <p class="color-change">14.21 ( 5.94%)</p>
                            </div>
                            <div class="minus">
                                <img src="{{ asset('public/theme/mocksurl/images/Line 20.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div data-aos="fade-up" class="banner-txt">
                    <h1>{{ get_trans_option('banner_title') }}</h1>
                    <p>“{{ get_trans_option('banner_sub_title') }}”</p>

                    <div class="banner-btn">
                        <div class="btn-one">
                            <a href="#">{!! xss_clean(get_trans_option('banner_button_text')) !!}</a>
                        </div>
                        <div class="btn-two">
                            <a href="#">{!! xss_clean(get_trans_option('banner_button_2_text')) !!}   </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="logo-adds">
    <div class="container">

        <div data-aos="fade-up" class="adds-head">
            <h2>FEATURED <span>SPORTS</span></h2>
            <p>
            {!! xss_clean(get_trans_option('fea_sport_content')) !!}
            
            <!--Lorem Ipsum has been the industry's standard dummy text ever <br> since the 1500s when an unknown printer-->
            <!--    took ,,-->
                </p>
        </div>

        <div class="brands-logo">
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-one.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-two.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-three.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-four.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-five.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-six.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-seven.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-one.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-two.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-three.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-four.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-five.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-six.png') }} " alt=""></a>
            </div>
            <div class="brand-slides">
                <a href="#"><img src="{{ asset('public/theme/mocksurl/images/logo-seven.png') }} " alt=""></a>
            </div>
        </div>

    </div>
</section>

<section class="key-feature">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="fearure-head">
                    <h2><span>Key</span> Features</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-txt">
                    <p>
                    {!! xss_clean(get_trans_option('key_fea_content')) !!}
                    
                    <!--Lorem Ipsum has been the industry's standard dummy text ever since the when an ..-->
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="learn-more">
                    <a href="#">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="chat-and-others">
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div data-aos="flip-left" class="chat-box">
                    <div class="box-img">
                        <img src="images/chat-logo-1.svg" alt="">
                    </div>
                    <h3>Watchlists</h3>
                    <p>
                     {!! xss_clean(get_trans_option('Watchlists_content')) !!}
                    <!--Easily track your favorite teams’ games and updates.-->
                    </p>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div data-aos="flip-right" class="chat-box">
                    <div class="box-img">
                        <img src="images/chat-logo-2.svg" alt="">
                    </div>
                    <h3>Live Chat<br> Forums</h3>
                    <p>
                     {!! xss_clean(get_trans_option('live_content')) !!}
                    <!--Engage with other fans in real-time conversations.-->
                    </p>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div data-aos="flip-left" class="chat-box">
                    <div class="box-img">
                        <img src="images/chat-logo-3.svg" alt="">
                    </div>
                    <h3>Game Room</h3>
                    <p>
                     {!! xss_clean(get_trans_option('game_room_content')) !!}
                    <!--Join live game rooms to chat and predict game outcomes.-->
                    </p>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div data-aos="flip-right" class="chat-box">
                    <div class="box-img">
                        <img src="images/chat-logo-4.svg" alt="">
                    </div>
                    <h3>Predict It & Streak Badges</h3>
                    <p>
                     {!! xss_clean(get_trans_option('Predict_content')) !!}
                    <!--Engage with other fans in real-time conversations.-->
                    </p>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ready-to-join">
    <div class="container">

    <div data-aos="zoom-in" class="join-head">
        <h1>Ready to Join the <span>Community</span> of Super Fans?</h1>
        <p>
        
        {!! xss_clean(get_trans_option('ready_content')) !!}
        <!--Lorem Ipsum has been the industry's standard dummy text ever <br> since the 1500s when an unknown printer took ,,-->
        </p>

        <div class="join-btns">
            <div class="join-one">
                <a href="{{url('sign_up')}}">SIGN UP NOW</a>
            </div>
            <div class="join-two">
                <a href="#">EXPLORE FEATURE</a>
            </div>
        </div>
    </div>

    </div>
</section>



@endsection

<!-- @section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection -->