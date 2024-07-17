<footer>
    <div class="footer-flower-top-pattern">
        <img src="images/Grey flower FOOTER.png" alt="">
    </div>
    <div class="footer-layer">
        <div class="container">
            <div class="footer-main">
                <div class="left">
                    <div class="logo">
                        <div class="logo-icon">
                            <img src="{{ asset('frontend/logo/emblem-dark.png') }}" alt="">
                        </div>
                        <div class="logo-text">
                            <h2>Government of Tripura <img src="{{ asset('frontend/images/indian-flag.png') }}" alt=""></h2>
                            <h1>Probasi Tripurabashi</h1>
                        </div>
                    </div>
                    <div class="social-foot">
                        <a href="https://www.facebook.com/profile.php?id=61560669284496"
                            target="_blank"><img src="{{ asset('frontend/images/fb.png') }}" alt=""></a>
                        <a href="https://twitter.com/ProbasiTripura" target="_blank"><img src="{{ asset('frontend/images/twitter.png') }}"
                                alt=""></a>
                        <a href="https://www.instagram.com/probasi.tripurabashi/" target="_blank"><img
                                src="{{ asset('/frontend/images/insta.png') }}" alt=""></a>
                    </div>
                    <h5>Developed and Maintained By DIT, Tripura</h5>
                    <p>
                        @php
                        $visitor=\App\Models\Visitor::sum('hits');
                        @endphp
                        <span class="visitor">You are visitor no:{{$visitor}}

                        </span>

                         Best viewed in Microsoft EDGE,
                        Google Chrome and Mozilla Firefox and 1366x768 resolution
                        |<span><a href="{{ route('login') }}"  target="_blank">CMS Login</a></span>
                    </p>

                    <br>
                    <p>For any query regarding this website, please contact </p>
                    <p>Phone: <a href="tel:7678239799" target="_blank">7678239799</a></p>
                    <p>Email ID: <a href="mailto:prabashitripurabashi@gmail.com" target="_blank">prabashitripurabashi@gmail.com</a></p>
                    <!-- <h6>www.cmotripura.gov.in</h6> -->
                </div>
@php
$register = \App\Models\Registration::count();
@endphp
                <div class="center">
                    <h2>{{ $register }}</h2>
                    <h6>Registrations </h6>
                    <h6>Done</h6>
                </div>

                <div class="right">
                    <div class="foot-manu">
                        <ul>
                            <a href="{{ route('home.aboutus') }}">
                                <li>About Us</li>
                            </a>
                            <a href="{{ route('home.thumbnail') }}">
                                <li>Gallery</li>
                            </a>
                            <a href="{{ route('home.event') }}">
                                <li>Our Events</li>
                            </a>
                        </ul>
                        <ul>

                            <a href="{{ route('home.contactus') }}">
                                <li>Contact Us</li>
                            </a>

                            <a href="{{ route('Front.service') }}">
                                <li>Services</li>
                            </a>
                            <a href="https://tidc.tripura.gov.in/" target="_blank">
                                <li>Invest In Tripura</li>
                            </a>
                        </ul>
                    </div>
                    <div class="foot-search">
                        <form action="">
                            <i class="fa-solid fa-magnifying-glass manuicon text-search-icon"></i>
                            <input type="search" name="" id="">
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="footer-flower-pattern">
        <img src="{{ asset('frontend/images/Grey flower FOOTER.png') }}" alt="">
    </div>
    <div class="footer-pattern">
        <img src="{{ asset('frontend/images/Footer pattern.png') }}" alt="">
    </div>
</footer>
