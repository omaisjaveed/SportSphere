@extends('theme.mocksurl.website')

@section('content')

<section class="banner about-us">
    <div class="container">

        <div data-aos="fade-up" class="banner-txt">
            <h1>Testimonials</h1>
        </div>

    </div>
</section>

<section class="history abt">
    <div class="container">
        

    </div>

    <div class="waves about-us">
        <img src="{{ asset('public/theme/mocksurl/images/white-waves.png') }}   " alt="">
    </div>

</section>


<section class="testimonials-sec">
    <div class="container">
        <h2>What Our Customers Are Saying</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                <div class="testimonial-box">
                    <img src="images/person-1.jpg" alt="">
                    <p>I've been boating for over 15 years, and it's rare to find a place with great prices and people who know what they're talking about. These guys helped me track down a part I couldn't find anywhere else and had it shipped out the same day. I'll be a customer for life.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                <div class="testimonial-box">
                    <img src="images/person-2.jpg" alt="">
                    <p>"I order many supplies online for my fishing charters, and KWM has never let me down. Everything arrives quickly and in perfect shape. I recently switched from one of the 'big name' suppliers—and I'm never returning.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                <div class="testimonial-box">
                    <img src="images/person-3.jpg" alt="">
                    <p>I had a question about a plumbing fitting and decided to leave a voicemail. I hope for a callback. Nope. Someone answered immediately, knew exactly what I needed, and even gave me an installation tip. You don't get that kind of help at big box stores.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                <div class="testimonial-box">
                    <img src="images/person-3.jpg" alt="">
                    <p>I grew up going to hardware stores where people knew your name. KWM Hardware gives me that feeling, even when shopping from another state. It's rare and refreshing.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                <div class="testimonial-box">
                    <img src="images/person-2.jpg" alt="">
                    <p>I've been wrenchin' on boats since before email was a thing, and I tell ya—KWM Hardware reminds me of the kind of shop my old man used to take me to. Straight shooters, fair prices, and they treat you like you matter.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                <div class="testimonial-box">
                    <img src="images/person-1.jpg" alt="">
                    <p>I was lookin' for a hard-to-find part for my bilge setup, and these guys not only had it—they knew exactly what I needed before I finished explainin'. It felt more like chattin' with a buddy than dealin' with a company.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection