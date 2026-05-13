@extends('theme.mocksurl.website')

@section('content')

<section class="main-banner">
    <div class="conrtainer">

        <div class="banner-bg">
            <img src="{{ asset('public/theme/mocksurl/images/banner-bg-img.PNG') }}" alt="">

            <div data-aos="fade-right" class="banner-cont">
                <h1>MERCHANDISE</h1>
            </div>

        </div>

    </div>
</section>


<section class="mechandise">
    <div class="container-fluid">

        <div class="shoot row">
            <img src="{{ asset('public/theme/mocksurl/images/football-shoot-bg.png') }}" alt="">

            @foreach(allProducts() as $product)
                        @php
                            $originalPrice = $product->price;
                            $userDiscount = Auth::check() && Auth::user()->user_type == 'affiliated' ? Auth::user()->getRewards()['discount'] : 0;
                            $discountedPrice = $originalPrice - ($originalPrice * $userDiscount / 100);
                        @endphp
                     <div class="col-lg-4">
                     <div class="team-brand">
                            <a href="{{ url('product/' . $product->slug) }}">
                                <img class="prod-img" src="{{ asset('storage/app/' . $product->image->file_path) }}"
                                    alt="{{ $product->translation->name }}">
                            </a>

                            <div class="rating">
                                {!! xss_clean(show_rating($product->reviews->avg('rating'))) !!}

                                <h2>{{ $product->translation->name }}</h2>
                                <p>{{ strip_tags($product->translation->description) }}</p>
                                <div class="down-head">
                                    <h4><i class="fa-solid fa-arrow-right"></i> ${{ $product->price }}</h4>
                                </div>
                            </div>

                            <div class="shirt-bg">
                                <img src="{{ asset('public/theme/mocksurl/images/Rectangle 39380.png') }}" alt="">
                            </div>
                        </div>
                     </div>
            @endforeach

            <!-- @foreach(allProducts()->where('id', 3) as $product)
                        @php
                            $originalPrice = $product->price;
                            $userDiscount = Auth::check() && Auth::user()->user_type == 'affiliated' ? Auth::user()->getRewards()['discount'] : 0;
                            $discountedPrice = $originalPrice - ($originalPrice * $userDiscount / 100);
                        @endphp
                        <div class="uniform">

                            <div class="inner-head">
                                <h4>OUR</h4>
                                <h3>Merchandise</h3>
                            </div>
                            <a href="{{ url('product/' . $product->slug) }}">
                                <img class="prod-img" src="{{ asset('storage/app/' . $product->image->file_path) }}"
                                    alt="{{ $product->translation->name }}">
                            </a>
                            <div class="rating">
                                {!! xss_clean(show_rating($product->reviews->avg('rating'))) !!}
                                <h2>{{ $product->translation->name }}</h2>
                                <p>{{ strip_tags($product->translation->description) }}</p>
                                <div class="down-head">
                                    <h4><i class="fa-solid fa-arrow-right"></i> ${{ $product->price }}</h4>
                                </div>
                            </div>
                            <div class="uniform-bg">
                                <img src="{{ asset('public/theme/mocksurl/images/Rectangle 39380.png') }}" alt="">
                            </div>
                        </div>
            @endforeach
            
            @foreach(allProducts()->where('id', 2) as $product)
                        @php
                            $originalPrice = $product->price;
                            $userDiscount = Auth::check() && Auth::user()->user_type == 'affiliated' ? Auth::user()->getRewards()['discount'] : 0;
                            $discountedPrice = $originalPrice - ($originalPrice * $userDiscount / 100);
                        @endphp

                        <div class="shorts">
                            <div class="product-dis">
                                <p>Lorem Ipsum has been <br> the industry's standard <br> dummy text ever since <br> the 1500s, </p>

                                <div class="view-all">
                                    <a href="{{ url('/shop') }}">View All</a>
                                </div>
                            </div>
                            <div class="product">
                                <a href="{{ url('product/' . $product->slug) }}">
                                    <img class="prod-img" src="{{ asset('storage/app/' . $product->image->file_path) }}"
                                        alt="{{ $product->translation->name }}">
                                </a>

                                <div class="shorts bg">
                                    <img src="{{ asset('public/theme/mocksurl/images/Rectangle 39380.png') }}" alt="">
                                </div>

                                <div class="rating">
                                    {!! xss_clean(show_rating($product->reviews->avg('rating'))) !!}

                                    <h2>{{ $product->translation->name }}</h2>
                                    <p>{{ strip_tags($product->translation->description) }}</p>
                                    <div class="down-head">
                                        <h4><i class="fa-solid fa-arrow-right"></i> ${{ $product->price }}</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
            @endforeach

            @foreach(allProducts()->where('id', 4) as $product)
                        @php
                            $originalPrice = $product->price;
                            $userDiscount = Auth::check() && Auth::user()->user_type == 'affiliated' ? Auth::user()->getRewards()['discount'] : 0;
                            $discountedPrice = $originalPrice - ($originalPrice * $userDiscount / 100);
                        @endphp

                        <div class="new-team">
                            <a href="{{ url('product/' . $product->slug) }}">
                                <img class="prod-img" src="{{ asset('storage/app/' . $product->image->file_path) }}"
                                    alt="{{ $product->translation->name }}">
                            </a>
                            <div class="new-shirt-bg">
                                <img src="{{ asset('public/theme/mocksurl/images/Rectangle 39380.png') }}" alt="">

                                <div class="rating">
                                    {!! xss_clean(show_rating($product->reviews->avg('rating'))) !!}

                                    <h2>{{ $product->translation->name }}</h2>
                                    <p>{{ strip_tags($product->translation->description) }}</p>
                                    <div class="down-head">
                                        <h4><i class="fa-solid fa-arrow-right"></i> ${{ $product->price }}</h4>
                                    </div>
                                </div>

                            </div>
                        </div>

            @endforeach -->

        </div>
    </div>
</section>

@endsection