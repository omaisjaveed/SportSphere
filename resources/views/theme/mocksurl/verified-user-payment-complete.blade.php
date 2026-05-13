@extends('theme.mocksurl.website2')

@section('content2')

<section class="payment-section">
    <div class="dash-content">
    

        <div class="dash-content dash-notification-content">
            <div class="notification-section">
                <!-- <div class="notification-heading">
                    <h5>Notifications</h5>
                </div> -->
                <div class="notification-main">
                    <div class="notification-box">
                        <div class="order-success text-center">
                            <i class="ti-check-box "> </i>

                            <h1 class="text-center">{{ $userObj->name }}</h1>
                            <h5>{{ _lang('Thank you for your payment! You are now a verified user') }}</h5>

                            <div class="view-more-btn view-more-btn2">
                                <a href="{{ url('/profile/edit-profile') }}" class="theme-btn">Back to Profile</a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>

    </div> <!-- End dash-content -->
</section>




@endsection