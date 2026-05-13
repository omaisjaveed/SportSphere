@extends('theme.mocksurl.website')

@section('content')


<section class="banner-top" style="background-image: url('{{ get_option('about_us_image') != '' ? asset('public/uploads/media/'.get_option('about_us_image')) : asset('public/theme/default/images/slider-image2.jpg') }}')"">
    <div class="container">
        <div class="abt-banner-txt">
            <h1>ABOUT US</h1>
        </div>
    </div>
</section>

<section class="abt-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="abt-img-main">
                    <img src="{{ asset('public/uploads/media/'.get_option('about_us_image_2')) }}  " alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="abt-txt">
                    <div class="abt-heading">
                        <p>ABOUT</p>
                        <h2>SPORTS <span>TWITS</span></h2>
                    </div>

                    <div class="invertor-txt">
                        <p>
                        {!! xss_clean(get_trans_option('about_us_content')) !!}
                        <!--Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown-->
                        <!--    printer took a galley of type and scrambled it to make a type specimen book. </p>-->
                        
                        <!--<p>It has survived not only five centuries, but also the leap into electronic typesetting,-->
                        <!--    remaining-->
                        <!--    essentially unchanged.It was popularised in the 1960s with the release of Letraset sheets-->
                        <!--    containing Lorem Ipsum passages, and more recently with desktop publishing software like-->
                        <!--    Aldus-->
                        <!--    PageMaker including versions of Lorem Ipsum.</p>-->
                        <!--<p>-->

                        <!--    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an-->
                        <!--    unknown-->
                        <!--    printer took a galley of type and scrambled it to make a type specimen book. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-pra-txt">
            <p> {!! xss_clean(get_trans_option('about_us_content_2')) !!}
            <!--Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>-->
            <!--<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. -->
            </p>
        </div>
    </div>
</section>


@endsection