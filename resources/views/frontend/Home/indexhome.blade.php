@extends('frontend.index')
@section('content')


@include('frontend.banner.banner')

<!--------------------------------------------------------   Hero box sec   ---------------------------------------------------------->

<section class="hero-grid-sec">
    <div class="mobile-scroll-right">
        <img src="{{ asset('frontend/images/arrows.png') }}" alt="">
    </div>
    <div class="hero-grid">

        <a href="{{ route('Front.service') }}">
            <div class="hero-box">

                <div class="box-pattern-top">
                    <img src="{{ asset('frontend/images/boxtop.png') }}" alt="">
                </div>
                <div class="hero-container">
                    <div class="hero-container-text">
                        <h4>All</h4>
                        <h4>Services</h4>
                        <div class="card-line"></div>
                        <p>Experience the efficiency of our digital government solutions.</p>
                    </div>

                </div>
                <div class="box-arrow">
                    <img src="{{ asset('frontend/images/ARROW FOR CARD.png') }}" alt="">
                </div>
                <div class="hero-pattern">
                    <img src="{{ asset('frontend/images/boxbottom.png') }}" alt="">
                </div>
            </div>
        </a>
        <a href="https://cmhelpline.tripura.gov.in/" target="_blank">
            <div class="hero-box">
                <div class="box-pattern-top">
                    <img src="{{ asset('frontend/images/boxtop.png') }}" alt="">
                </div>
                <div class="box1-leaf">
                    <img src="{{ asset('frontend/images/box1.png') }}" alt="">
                </div>
                <div class="hero-container">
                    <div class="hero-container-text">
                        <h4>Elderly </h4>
                        <h4>Parents Assistance</h4>
                        <div class="card-line"></div>
                        <p>We assure unwavering support for our elderly parents, offering them easy
                            access to a range of government services.</p>
                    </div>
                </div>
                <div class="box-arrow">
                    <img src="{{ asset('frontend/images/ARROW FOR CARD.png') }}" alt="">
                </div>
                <div class="hero-pattern">
                    <img src="{{ asset('frontend/images/boxbottom.png') }}" alt="">
                </div>
            </div>
        </a>
        <a href="{{ route('home.event') }}">
            <div class="hero-box">
                <div class="box-pattern-top">
                    <img src="{{ asset('frontend/images/boxtop.png') }}" alt="">
                </div>
                <div class="hero-container">
                    <div class="hero-container-text">
                        <h4>Our</h4>
                        <h4>Events</h4>
                        <div class="card-line"></div>
                        <p>The government’s successful events are testament to our commitment towards
                            citizen engagement. </p>
                    </div>
                </div>
                <div class="box-arrow">
                    <img src="{{ asset('frontend/images/ARROW FOR CARD.png') }}" alt="">
                </div>
                <div class="hero-pattern">
                    <img src="{{ asset('frontend/images/boxbottom.png') }}" alt="">
                </div>
            </div>
        </a>

        <a href="{{ route('home.contactus') }}">
            <div class="hero-box">
                <div class="box-pattern-top">
                    <img src="{{ asset('frontend/images/boxtop.png') }}" alt="">
                </div>
                <div class="box4-leaf">
                    <img src="{{ asset('frontend/images/box4.png') }}" alt="">
                </div>
                <div class="hero-container">
                    <div class="hero-container-text">
                        <h4>Connect</h4>
                        <h4>to your CM</h4>
                        <div class="card-line"></div>
                        <p>Your Feedback/Suggestions are welcome.</p>
                    </div>
                </div>
                <div class="box-arrow">
                    <img src="{{ asset('frontend/images/ARROW FOR CARD.png') }}" alt="">
                </div>
                <div class="hero-pattern">
                    <img src="{{ asset('frontend/images/boxbottom.png') }}" alt="">
                </div>
            </div>
        </a>

    </div>
</section>


<!-- --------------------------------------------------   Hero cm sec  -------------------------------------------------------->
<section class="section" id="hero">
    <div class="container">
        <div class="hero-sec">
            <div class="hero-main">
               
                @include('frontend.cmcorner.cmcorner')


            </div>
<div class="social-sec">
                    <h4>Visit</h4>        
                    <h2>Social Media <a href="https://www.facebook.com/profile.php?id=61560669284496"
                            target="_blank">View All</a> </h2>
                    <p>Discover more about us by clicking on the “view all button “ and join our community on social media for latest updates.

                    </p>
                    
                    <div class="social-grid">
                        <div class="social-box">
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D61560669284496&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=351068301096240"
                                width="500" height="500" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>


                    </div>



                </div>
        </div>
    </div>
</section>

<!----------------------------------------------------   Gallery Section   -------------------------------------------------------->

@include('frontend.Home.homegallery')

@include('frontend.FooterSlider.footerslider')

@endsection
