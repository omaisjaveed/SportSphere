@extends('theme.mocksurl.website2')

@section('content2')


<div class="dash-content dash-settings-content">
    <div class="settings-section">
        <div class="notification-heading">
            <h5>Settings</h5>
        </div>
        <div class="post-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="preferences-tab" data-bs-toggle="tab" data-bs-target="#preferences-tab-pane" type="button" role="tab" aria-controls="preferences-tab-pane" aria-selected="true">Preferences</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="blocked-tab" data-bs-toggle="tab" data-bs-target="#blocked-tab-pane" type="button" role="tab" aria-controls="blocked-tab-pane" aria-selected="false">Blocked</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="muted-tab" data-bs-toggle="tab" data-bs-target="#muted-tab-pane" type="button" role="tab" aria-controls="muted-tab-pane" aria-selected="false">Muted</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="preferences-tab-pane" role="tabpanel" aria-labelledby="preferences-tab" tabindex="0">
                    <div class="setting-wrap">
                        <h4>Display</h4>
                        <div class="setting-flex">
                            <h5>Dark Mode</h5>
                            <div class="toggle_btn">
                                <input type="checkbox" class="checkbox" id="toggle-checkbox">
                                <label for="toggle-checkbox" class="checkbox-label">
                                    <i class="fas fa-moon"></i>
                                    <img src="{{ asset('public/theme/mocksurl/images/sun.png') }} " alt="">
                                    <span class="ball"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="setting-wrap">
                        <h4>Experience</h4>
                        <div class="setting-flex">
                            <h5>Language</h5>
                            <div class="translator-btn-main">
                                <div class="inner-flex">
                                    <div class="trans-one">
                                        <p>IN ENGLISH</p>
                                    </div>

                                    <div class="trans-btn-inner">
                                        <div class="switch">
                                            <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
                                            <label for="language-toggle"></label>
                                            <span class="on"></span>
                                            <span class="off"></span>
                                        </div>
                                    </div>

                                    <div class="trans-three">
                                        <p>EN ESPANOL</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="setting-wrap">
                        <h4>Email Notifications</h4>
                        <div class="setting-flex">
                            <h5>Likes</h5>
                            <div class="setting-check">
                                <img src="{{ asset('public/theme/mocksurl/images/double-check.png') }}  " alt="">
                            </div>
                        </div>
                        <div class="setting-flex">
                            <h5>Mentions</h5>
                            <div class="setting-check">
                                <img src="{{ asset('public/theme/mocksurl/images/double-check.png') }}" alt="">
                            </div>
                        </div>
                        <div class="setting-flex">
                            <h5>Direct Messages</h5>
                            <div class="setting-check">
                                <img src="{{ asset('public/theme/mocksurl/images/double-check.png') }}" alt="">
                            </div>
                        </div>
                        <div class="setting-flex">
                            <h5>New Followers</h5>
                            <div class="setting-check">
                                <img src=" {{ asset('public/theme/mocksurl/images/double-check.png') }}" alt="">
                            </div>
                        </div>
                        <div class="setting-flex">
                            <h5>Email me the newsletters</h5>
                            <div class="setting-check">
                                <img src="{{ asset('public/theme/mocksurl/images/double-check.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="setting-wrap setting-wrap-b">
                        <h4>Email</h4>
                        <div class="setting-flex">
                            <div class="verified">
                                <h5>{{Auth::user()->email}}</h5>
                                <span><img src="{{ asset('public/theme/mocksurl/images/double-check.png') }}" alt=""> Verified</span>
                            </div>
                            <!-- <a href="#">Edit</a> -->
                        </div>
                    </div>
                    <div class="setting-wrap setting-wrap-b">
                        <h4>Password</h4>
                        <div class="setting-flex">
                            <h5>**************</h5>
                            <!-- <a href="#">Edit</a> -->
                        </div>
                    </div>


                   



                    <div class="setting-wrap setting-wrap-b">
                        
                        <!--<h4>Become Verified User</h4>-->
                        <div class="setting-flex">
                            
                            <form action="{{ route('become_verified') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                @if(Auth::user()->is_verified == 1)
                                <button class="theme-btn" type="submit">You are Verified User</button>
                                @else
                                <button class="theme-btn" type="submit">Become Verified User</button>
                                @endif
                            </form>

                        </div>
                    </div>
                    
                    
                    
                     <div class="setting-wrap setting-wrap-b">
                        
                        <!--<h4>Become Premium User</h4>-->
                        <div class="setting-flex">
                            
                            <form action="{{ route('become_premium') }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                @if(Auth::user()->is_premium == 1)
                                <button class="theme-btn" type="submit">You are Premium User</button>
                                @else
                                <button class="theme-btn" type="submit">Become Premium User</button>
                                @endif
                            </form>

                        </div>
                    </div>
                    
                    
                    @if(Auth::user()->is_premium == 1 && Auth::user()->premium_expires_at > now())
                        <form action="{{ route('cancel.premium') }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel your premium membership?')">
                            @csrf
                            <button type="submit" class="theme-btn">Cancel Premium Membership</button>
                        </form>
                    @endif



                   

                    


                    

                </div>
                <div class="tab-pane fade" id="blocked-tab-pane" role="tabpanel" aria-labelledby="blocked-tab" tabindex="0">

                </div>
                <div class="tab-pane fade" id="muted-tab-pane" role="tabpanel" aria-labelledby="muted-tab" tabindex="0">

                </div>
            </div>
        </div>
    </div>
</div>




@endsection