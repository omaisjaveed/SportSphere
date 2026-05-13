@extends('theme.mocksurl.website')

@section('content')



<section class="banner about-us">
    <div class="container">

        <div data-aos="fade-up" class="banner-txt">
            <h1>Contact <span>Us</span></h1>
        </div>

    </div>
</section>

<section class="history abt">
    <div class="container">
        

    </div>

    <div class="waves about-us">
        <img src="{{ asset('public/theme/mocksurl/images/white-waves.png') }} " alt="">
    </div>

</section>

<section class="contact-us">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="boating-journey">
                    <img src=" {{ asset('public/theme/mocksurl/images/boating-journey.png') }}  " alt="">

                    <div class="customer-contact second">
                        <div class="sub-contact">
                            <img src="{{ asset('public/theme/mocksurl/images/contact-2.svg') }}   " alt="">
                            <p>Call us for any inquiry</p>
                            <h4>(305) 294-3425</h4>

                            <div class="sub-user">
                                <img src="images/contact-1.svg" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="inner-align-new">

                <div class="contact-box second">
                    <h2>CONTACT US</h2>

                    <div class="fieldss">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="field-one">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Your Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-one">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-one">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-one">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="message-type">
                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder=""
                                            rows="3"></textarea>
                                    </div>
                                    <div class="sub-btn">
                                        <a href="#">SEND A MESSAGE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="handle-bar">
                        <img src="images/ship-handle.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



@endsection