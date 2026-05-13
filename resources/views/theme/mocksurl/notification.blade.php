@extends('theme.mocksurl.website2')

@section('content2')


<div class="dash-content">
   
    <div class="dash-content dash-notification-content">
        <div class="notification-section">
            <div class="notification-heading">
                <h5>Notifications</h5>
            </div>
            <div class="notification-main">
                <div class="notification-box">
                    <div class="notification-img">
                        <div class="prem">
                            <img src="{{ asset('public/theme/mocksurl/images/premium-small.png') }}  " alt="">
                        </div>
                        <a href="#"><img src="{{ asset('public/theme/mocksurl/images/other-user.png') }}  " alt=""></a>
                    </div>
                    <div class="notification-txt">
                        <div class="notification-head">
                            <h4>user_name</h4>
                            <div class="prem-score">
                                <h6>3</h6>
                            </div>
                            <h6>Feb 25, 2025 2:44 AM</h6>
                        </div>
                        <div class="notification-p">
                            <p><b>LoremIpsum</b> is now following you!</p>
                        </div>
                        <div class="notification-s">
                            <a href="#">Send a Direct Message</a>
                        </div>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="notification-img">
                        <a href="#"><img src="{{ asset('public/theme/mocksurl/images/user2.png') }}  " alt=""></a>
                    </div>
                    <div class="notification-txt">
                        <div class="notification-head">
                            <h4>Jonathan</h4>
                            <h6>Feb 25, 2025 2:44 AM</h6>
                        </div>
                        <div class="notification-p">
                            <p><b>LoremIpsum</b> is now following you!</p>
                        </div>
                        <div class="notification-s">
                            <a href="#">Send a Direct Message</a>
                        </div>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="notification-img">
                        <a href="#"><img src="{{ asset('public/theme/mocksurl/images/user3.png') }}  " alt=""></a>
                    </div>
                    <div class="notification-txt">
                        <div class="notification-head">
                            <h4>Charles</h4>
                            <h6>Feb 25, 2025 2:44 AM</h6>
                        </div>
                        <div class="notification-p">
                            <p><b>LoremIpsum</b> is now following you!</p>
                        </div>
                        <div class="notification-s">
                            <a href="#">Send a Direct Message</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-more-btn view-more-btn2">
                <a href="#" class="theme-btn">View More</a>
            </div>
        </div>
    </div>

</div> <!-- End dash-content -->




@endsection