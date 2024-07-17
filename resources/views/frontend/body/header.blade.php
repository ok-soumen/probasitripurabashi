<div id="mySidepanel" class="sidepanel">
    <div class="close-sec" onclick="closeNav()"></div>
    <div class="side-menu">
        <div class="side-menu-con">
            <div class="side-menu-flex">
                <div class="logo">
                    <div class="logo-icon">
                        <img src="{{ asset('frontend/logo/emblem-dark.png') }}" alt="">
                    </div>
                    <div class="logo-text">
                        <h2>Government of Tripura <img src="{{ asset('frontend/images/indian-flag.png') }}" alt=""></h2>
                        <h1>Probasi Tripurabashi</h1>
                    </div>
                </div>
                <div class="close-btn-box" onclick="closeNav()">
                    <img src="{{ asset('frontend/images/close.png') }}" alt="">
                </div>
            </div>
            <div class="side-menu-home">
                <a href="index.html">
                    <img src="{{ asset('frontend/images/home.png') }}" alt="">
                </a>
                <a href="index.html">
                    HOME
                </a>
            </div>
            <ul>
                <a href="{{ route('home.aboutus') }}">
                    <li class="first-child">
                        <p>About Us</p>
                        <img src="{{ asset('frontend/images/less-then.png') }}" alt="">
                    </li>
                </a>
                <a href="{{ route('home.thumbnail') }}">
                    <li>
                        <p>Gallery</p>
                        <img src="{{ asset('frontend/images/less-then.png') }}" alt="">
                    </li>
                </a>
                <a href="{{ route('home.event') }}">
                    <li>
                        <p>Our Events</p>
                        <img src="{{ asset('frontend/images/less-then.png') }}" alt="">
                    </li>
                </a>
                <a href="{{ route('home.contactus') }}">
                    <li>
                        <p>Contact Us</p>
                        <img src="{{ asset('frontend/images/less-then.png') }}" alt="">
                    </li>
                </a>
                <a href="https://tidc.tripura.gov.in/" target="_blank">
                    <li>
                        <p>Invest In Tripura</p>
                        <img src="{{ asset('frontend/images/less-then.png')}}" alt="">
                    </li>
                </a>

            </ul>
            <div class="sidepanel-foot">
                <a href="{{ route('registration') }}"><button>Registration</button></a>
                <div class="social-links">
                    <a href="https://www.facebook.com/profile.php?id=61560669284496"
                        target="_blank"><img src="{{ asset('frontend/images/fb.png')}}" alt=""></a>
                    <a href="https://twitter.com/ProbasiTripura" target="_blank"><img src="{{ asset('frontend/images/twitter.png')}}"
                            alt=""></a>
                    <a href="https://www.instagram.com/probasi.tripurabashi/" target="_blank"><img
                            src="{{ asset('frontend/images/insta.png')}}" alt=""></a>
                </div>
            </div>


        </div>
        <div class="side-pettarn">
            <img src="{{ asset('frontend/images/boxbottom.png')}}" alt="">
        </div>
    </div>
</div>
<header id="header">
    <div class="header">
        <div class="head-left">
            <button onclick="openNav()"><img src="{{ asset('frontend/images/menu.png') }}" alt=""></button>
            <button onclick="searchfunction()" class="search"><img src="{{ asset('frontend/images/search.png') }}"
                    alt=""></button>
        </div>
        <div class="head-center">
            <a href="{{ url('/') }}">
                <h1>Probasi Tripurabashi</h1>
            </a>
            <div class="short-line"></div>
        </div>
        <div class="head-right">
            <div class="language-trn">
                <div id="google_translate_element"></div>
            </div>
        </div>
    </div>
</header>
