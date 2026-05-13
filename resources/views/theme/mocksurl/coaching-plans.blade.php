@extends('theme.mocksurl.website')

@section('content')

<section class="main-banner">
    <div class="conrtainer">

        <div class="banner-bg">
            <img src="{{ asset('public/theme/mocksurl/images/banner-bg-img.PNG') }}" alt="">

            <div data-aos="fade-right" class="banner-cont">
                <!--<h5>welcome to OUR WEBSITE</h5>-->
                <h1>COACHING PLANS</h1>
                <!--<p>Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry  has been the industry's ..</p>-->
                <!--<a href="{{ url('/contact-us') }}">Contact Us</a>-->
            </div>

        </div>

    </div>
</section>

<section class="our-coaching-plan our-coaching-plan-inner">
    <div class="container">

        <div data-aos="flip-up" class="numbering-slides">

            <h2>Our Coaching Plans</h2>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Urna non Amet, <br> nam enim eleifend nunc. Lectus mattis sit tortor .</p>-->
        </div>

        <div class="circle-slides">

			<div class="slide-box slides-1">
				<h2>1</h2>
				<h4>Foundation Plan: Beginners & Youth Development</h4>
				<p>Designed for players just starting their football journey, this plan focuses on the fundamentals of the game, 
				including basic technical skills, coordination, and an introduction to tactical understanding. 
				Our goal is to instill a love for the game while fostering foundational abilities that players will build on as they progress.</p>
			</div>

			<div class="slide-box slides-2">
				<h2>2</h2>
				<h4>Competitive Development Plan</h4>
				<p>This plan is tailored for intermediate players looking to elevate their skills and prepare for competitive play. 
				It covers advanced technical training, game strategy, and match-readiness. 
				Players will refine their ability to perform under pressure and develop the mindset needed for league and tournament play success.</p>
			</div>

			<div class="slide-box slides-3">
				<h2>3</h2>
				<h4>Elite Performance Plan: Advanced Coaching</h4>
				<p>For advanced and elite players, this plan offers high-intensity, specialized training aimed at honing position-specific skills, tactical awareness, and mental resilience. 
				With a strong focus on performance psychology, this plan prepares players for the demands of high-level competition and professional trials.</p>
			</div>

			<div class="slide-box slides-1">
				<h2>4</h2>
				<h4>Pro-Pathway Plan</h4>
				<p>This plan is designed for players pursuing careers in football, from high school and college recruitment to professional opportunities. 
				It includes private training, performance optimization, 
				and targeted guidance on how to navigate recruitment processes, ensuring players are fully prepared for their next steps in football.</p>
			</div>

		</div>

		<div class="frame-players">
		    
			<div class="row align-items-center">

				<div class="col-md-7">
					<div class="player-1">
						<img src="{{ asset('public/theme/mocksurl/images/football-player.png') }}" alt="">

						<!--<div class="grey-bg">-->
						<!--	<h2>$78/session</h2>-->
						<!--</div>-->
					</div>
				</div>

				<div class="col-md-5">
					<div class="player-listing">
					    
					    <div class="player-listing-inner">
					        
						<p><b>Fundamental Skills Training: </b> Focus on basic technical skills, including dribbling, passing, and shooting, to develop strong ball control and footwork.</p>
						<p><b>Coordination & Motor Skills: </b> Drills designed to enhance balance, agility, and overall body coordination are critical for young athletes.</p>
						<p><b>Introduction to Tactical Awareness: </b> Players will learn simple game strategies and positioning to better understand team dynamics.</p>
						<p><b>Confidence Building: </b> Through fun, engaging sessions, we work on fostering a love for the game and building confidence in young players.</p>
						<p><b>Small Group Training:</b> Each session is conducted in small groups to provide personalized attention and maximize learning.</p>
						<p><b>Progressive Skill Development:</b> Training modules will grow with the player's skill level, ensuring they are always learning and improving.</p>
						<p><b>Focus on Sportsmanship:</b> Players are taught the importance of teamwork, respect, and fair play on and off the field.</p>
					    
					    </div>

						<div class="start-btn">
							<a href="#">Get Started</a>
						</div>
					</div>
				</div>

			</div>
			
			<div class="row align-items-center">

				<div class="col-md-7">
					<div class="player-1">
						<img src="{{ asset('public/theme/mocksurl/images/football-player.png') }}" alt="">

						<!--<div class="grey-bg">-->
						<!--	<h2>$78/session</h2>-->
						<!--</div>-->
					</div>
				</div>

				<div class="col-md-5">
					<div class="player-listing">
					    
						<div class="player-listing-inner">
					        
						<p><b>Fundamental Skills Training: </b> Focus on basic technical skills, including dribbling, passing, and shooting, to develop strong ball control and footwork.</p>
						<p><b>Coordination & Motor Skills: </b> Drills designed to enhance balance, agility, and overall body coordination are critical for young athletes.</p>
						<p><b>Introduction to Tactical Awareness: </b> Players will learn simple game strategies and positioning to better understand team dynamics.</p>
						<p><b>Confidence Building: </b> Through fun, engaging sessions, we work on fostering a love for the game and building confidence in young players.</p>
						<p><b>Small Group Training:</b> Each session is conducted in small groups to provide personalized attention and maximize learning.</p>
						<p><b>Progressive Skill Development:</b> Training modules will grow with the player's skill level, ensuring they are always learning and improving.</p>
						<p><b>Focus on Sportsmanship:</b> Players are taught the importance of teamwork, respect, and fair play on and off the field.</p>
					    
					    </div>

						<div class="start-btn">
							<a href="{{ url('/contact-us') }}">Contact Us</a>
						</div>
					</div>
				</div>

			</div>
			
			<div class="row align-items-center">

				<div class="col-md-7">
					<div class="player-1">
						<img src="{{ asset('public/theme/mocksurl/images/football-player.png') }}" alt="">

						<!--<div class="grey-bg">-->
						<!--	<h2>$78/session</h2>-->
						<!--</div>-->
					</div>
				</div>

				<div class="col-md-5">
					<div class="player-listing">
					    
						<div class="player-listing-inner">
					        
						<p><b>Fundamental Skills Training: </b> Focus on basic technical skills, including dribbling, passing, and shooting, to develop strong ball control and footwork.</p>
						<p><b>Coordination & Motor Skills: </b> Drills designed to enhance balance, agility, and overall body coordination are critical for young athletes.</p>
						<p><b>Introduction to Tactical Awareness: </b> Players will learn simple game strategies and positioning to better understand team dynamics.</p>
						<p><b>Confidence Building: </b> Through fun, engaging sessions, we work on fostering a love for the game and building confidence in young players.</p>
						<p><b>Small Group Training:</b> Each session is conducted in small groups to provide personalized attention and maximize learning.</p>
						<p><b>Progressive Skill Development:</b> Training modules will grow with the player's skill level, ensuring they are always learning and improving.</p>
						<p><b>Focus on Sportsmanship:</b> Players are taught the importance of teamwork, respect, and fair play on and off the field.</p>
					    
					    </div>

						<div class="start-btn">
							<a href="{{ url('/contact-us') }}">Contact Us</a>
						</div>
					</div>
				</div>

			</div>
			
			<div class="row align-items-center">

				<div class="col-md-7">
					<div class="player-1">
						<img src="{{ asset('public/theme/mocksurl/images/football-player.png') }}" alt="">

						<!--<div class="grey-bg">-->
						<!--	<h2>$78/session</h2>-->
						<!--</div>-->
					</div>
				</div>

				<div class="col-md-5">
					<div class="player-listing">
					    
						<div class="player-listing-inner">
					        
						<p><b>Fundamental Skills Training: </b> Focus on basic technical skills, including dribbling, passing, and shooting, to develop strong ball control and footwork.</p>
						<p><b>Coordination & Motor Skills: </b> Drills designed to enhance balance, agility, and overall body coordination are critical for young athletes.</p>
						<p><b>Introduction to Tactical Awareness: </b> Players will learn simple game strategies and positioning to better understand team dynamics.</p>
						<p><b>Confidence Building: </b> Through fun, engaging sessions, we work on fostering a love for the game and building confidence in young players.</p>
						<p><b>Small Group Training:</b> Each session is conducted in small groups to provide personalized attention and maximize learning.</p>
						<p><b>Progressive Skill Development:</b> Training modules will grow with the player's skill level, ensuring they are always learning and improving.</p>
						<p><b>Focus on Sportsmanship:</b> Players are taught the importance of teamwork, respect, and fair play on and off the field.</p>
					    
					    </div>

						<div class="start-btn">
							<a href="{{ url('/contact-us') }}">Contact Us</a>
						</div>
					</div>
				</div>

			</div>
			
		</div>

    </div>
</section>


@endsection