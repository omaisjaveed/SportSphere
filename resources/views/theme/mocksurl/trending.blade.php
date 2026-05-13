@extends('theme.mocksurl.website')

@section('content')


<section class="banner-top" style="background-image: url('{{ get_option('trending_us_image') != '' ? asset('public/uploads/media/'.get_option('trending_us_image')) : asset('public/theme/default/images/slider-image2.jpg') }}')"">
    <div class="container">
        <div class="abt-banner-txt">
            <h1>TRENDING</h1>
        </div>
    </div>
</section>

<section class="trending-table">
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <div class="buffalo-chart">
                    <div data-aos="fade-down" class="wish-box">
                        <div class="trending-head">
                            <h3>WISHLIST</h3>
                        </div>

                        <div class="wishlist">
                            <div class="buffalo">
                                <h4>Buffalo <br> Bills</h4>
                            </div>
                            <div class="pulls">
                                <img src="images/pulls.png" alt="">
                            </div>
                            <div class="rating">
                                <div class="pulls-rating">
                                    <!--<h5>22.86</h5>-->
                                    <p>{!! xss_clean(get_trans_option('Buffalo_bills_Score')) !!}</p>
                                </div>
                                <div class="minus">
                                    <img src="images/Line 20.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="wishlist">
                            <div class="buffalo">
                                <h4>Miami <br>Dolphins</h4>
                            </div>
                            <div class="pulls">
                                <img src="images/pulls.png" alt="">
                            </div>
                            <div class="rating">
                                <div class="pulls-rating">
                                    <!--<h5>22.86</h5>-->
                                    <p>{!! xss_clean(get_trans_option('Miami_Dolphin_Score')) !!}</p>
                                </div>
                                <div class="minus">
                                    <img src="images/Line 20.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="wishlist">
                            <div class="buffalo">
                                <h4>New York <br>Jets</h4>
                            </div>
                            <div class="pulls">
                                <img src="images/pulls.png" alt="">
                            </div>
                            <div class="rating">
                                <div class="pulls-rating">
                                    <!--<h5>22.86</h5>-->
                                    <p>{!! xss_clean(get_trans_option('NewYork_Jets_Score')) !!}</p>
                                </div>
                                <div class="minus">
                                    <img src="images/Line 20.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="wishlist">
                            <div class="buffalo">
                                <h4>Baltimore <br>Ravens</h4>
                            </div>
                            <div class="pulls">
                                <img src="images/pulls.png" alt="">
                            </div>
                            <div class="rating">
                                <div class="pulls-rating">
                                    <!--<h5>22.86</h5>-->
                                    <p>{!! xss_clean(get_trans_option('Baltimore_Ravens_Score')) !!}</p>
                                </div>
                                <div class="minus">
                                    <img src="images/Line 20.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="wishlist">
                            <div class="buffalo">
                                <h4>Pittsburgh <br>Steelers</h4>
                            </div>
                            <div class="pulls">
                                <img src="images/pulls.png" alt="">
                            </div>
                            <div class="rating">
                                <div class="pulls-rating">
                                    <!--<h5>22.86</h5>-->
                                    <p>{!! xss_clean(get_trans_option('Pittsburch_Steelers_Score')) !!}</p>
                                </div>
                                <div class="minus">
                                    <img src="images/Line 20.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!--<div class="wishlist">-->
                        <!--    <div class="buffalo">-->
                        <!--        <h4>Cincinnati <br>Bengals</h4>-->
                        <!--    </div>-->
                        <!--    <div class="pulls">-->
                        <!--        <img src="images/pulls.png" alt="">-->
                        <!--    </div>-->
                        <!--    <div class="rating">-->
                        <!--        <div class="pulls-rating">-->
                                    <!--<h5>22.86</h5>-->
                        <!--            <p>{!! xss_clean(get_trans_option('Pittsburch_Steelers_Score')) !!}</p>-->
                        <!--        </div>-->
                        <!--        <div class="minus">-->
                        <!--            <img src="images/Line 20.png" alt="">-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="wishlist">-->
                        <!--    <div class="buffalo">-->
                        <!--        <h4>Cleveland <br>Browns</h4>-->
                        <!--    </div>-->
                        <!--    <div class="pulls">-->
                        <!--        <img src="images/pulls.png" alt="">-->
                        <!--    </div>-->
                        <!--    <div class="rating">-->
                        <!--        <div class="pulls-rating">-->
                                    <!--<h5>22.86</h5>-->
                        <!--            <p>{!! xss_clean(get_trans_option('Pittsburch_Steelers_Score')) !!}</p>-->
                        <!--        </div>-->
                        <!--        <div class="minus">-->
                        <!--            <img src="images/Line 20.png" alt="">-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="trending-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Trending</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Most
                                Active</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="watcher-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="watcher" aria-selected="false">Watchers</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="tab-inner-body">
                                <ul>
                                    <li class="active"> <a href="#">NFL</a> </li>
                                    <li> <a href="#">NHL</a> </li>
                                    <li> <a href="#">NBA</a> </li>
                                    <li> <a href="#">MLB</a> </li>
                                    <li> <a href="#">MLS</a> </li>
                                    <li> <a href="#">EPL</a> </li>
                                    <li> <a href="#">LALIGA</a> </li>
                                </ul>


                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <div class="accordian-header-flex-main">
                                                    <div class="buffalo bilz">
                                                        <h3>Buffalo Bills</h3>
                                                    </div>
                                                    <div class="team-logo">
                                                        <img src="images/team-logo-1.png" alt="">
                                                    </div>
                                                    <div class="score-count">
                                                        <div class="score">
                                                            <p>SCORE</p>
                                                        </div>
                                                        <div class="totalscore">
                                                            <p>{!! xss_clean(get_trans_option('Buffalo_bills_Score')) !!}  </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            
                                                 {!! xss_clean(get_trans_option('Buffalo_bills_Content')) !!}
                                                 
                                                
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                <div class="accordian-header-flex-main">
                                                    <div class="buffalo bilz">
                                                        <h3>Miami Dolphins</h3>
                                                    </div>
                                                    <div class="team-logo">
                                                        <img src="images/team-logo-2.png" alt="">
                                                    </div>
                                                    <div class="score-count">
                                                        <div class="score">
                                                            <p>SCORE</p>
                                                        </div>
                                                        <div class="totalscore">
                                                            <p>{!! xss_clean(get_trans_option('Miami_Dolphin_Score')) !!}   </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            
                                                {!! xss_clean(get_trans_option('Miami_Dolphin')) !!}
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <div class="accordian-header-flex-main">
                                                    <div class="buffalo bilz">
                                                        <h3>New York Jets</h3>
                                                    </div>
                                                    <div class="team-logo">
                                                        <img src="images/team-logo-3.png" alt="">
                                                    </div>
                                                    <div class="score-count">
                                                        <div class="score">
                                                            <p>SCORE</p>
                                                        </div>
                                                        <div class="totalscore">
                                                             <p>{!! xss_clean(get_trans_option('NewYork_Jets_Score')) !!}  </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                {!! xss_clean(get_trans_option('NewYork_Jets')) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                                aria-expanded="false" aria-controls="collapsefour">
                                                <div class="accordian-header-flex-main">
                                                    <div class="buffalo bilz">
                                                        <h3>Baltimore Ravens</h3>
                                                    </div>
                                                    <div class="team-logo">
                                                        <img src="images/team-logo-4.png" alt="">
                                                    </div>
                                                    <div class="score-count">
                                                        <div class="score">
                                                            <p>SCORE</p>
                                                        </div>
                                                        <div class="totalscore">
                                                            
                                                             <p>{!! xss_clean(get_trans_option('Baltimore_Ravens_score')) !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="collapsefour" class="accordion-collapse collapse"
                                            aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                             {!! xss_clean(get_trans_option('Baltimore_Ravens')) !!}
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfive">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                                aria-expanded="false" aria-controls="collapsefive">
                                                <div class="accordian-header-flex-main">
                                                    <div class="buffalo bilz">
                                                        <h3>Pittsburgh Steelers</h3>
                                                    </div>
                                                    <div class="team-logo">
                                                        <img src="images/team-logo-5.png" alt="">
                                                    </div>
                                                    <div class="score-count">
                                                        <div class="score">
                                                            <p>SCORE</p>
                                                        </div>
                                                        <div class="totalscore">
                                                           
                                                            
                                                             <p>{!! xss_clean(get_trans_option('Pittsburch_Steelers_Score')) !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="collapsefive" class="accordion-collapse collapse"
                                            aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            {!! xss_clean(get_trans_option('Pittsburch_Steelers')) !!}
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="tab-inner-body">
                                <div class="teams-select">
                                    <div class="team-names">
                                        <div class="team-flex-one">
                                            <h3>NFL</h3>
                                            <p>National Football League</p>
                                        </div>
                                        <div class="team-flex-two">
                                            <img src="images/team-name-1.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="team-number">
                                        <h4>1</h4>
                                    </div>
                                </div>
                                <div class="teams-select">
                                    <div class="team-names">
                                        <div class="team-flex-one">
                                            <h3>NHL</h3>
                                            <p>National Football League</p>
                                        </div>
                                        <div class="team-flex-two">
                                            <img src="images/team-name-2.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="team-number">
                                        <h4>2</h4>
                                    </div>
                                </div>
                                <div class="teams-select">
                                    <div class="team-names">
                                        <div class="team-flex-one">
                                            <h3>NBA</h3>
                                            <p>National Football League</p>
                                        </div>
                                        <div class="team-flex-two">
                                            <img src="images/team-name-3.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="team-number">
                                        <h4>3</h4>
                                    </div>
                                </div>
                                <div class="teams-select">
                                    <div class="team-names">
                                        <div class="team-flex-one">
                                            <h3>MLB</h3>
                                            <p>National Football League</p>
                                        </div>
                                        <div class="team-flex-two">
                                            <img src="images/team-name-4.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="team-number">
                                        <h4>4</h4>
                                    </div>
                                </div>

                                <div class="page-pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            
                        </div>

                        <div class="tab-pane fade" id="watcher" role="tabpanel" aria-labelledby="watcher-tab">...</div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



@endsection