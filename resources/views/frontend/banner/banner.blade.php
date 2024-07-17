@php

$item=App\Models\Minister::OrderBy('created_at','desc')->get();
$PMItem = $item->firstWhere('status', 'PM');
$CMItem = $item->firstWhere('status', 'CM');

$banner= App\Models\Banner::all();
@endphp

<section class="banner-sec">
    <div class="banner-grid">
        <div class="banner-right">
            <div class="flower-pattern-top">
                <img src="images/RED flower Hero.png" alt="">
            </div>
            <div class="right-logo">
                <div class="emblam">
                    <img src="{{ asset('frontend/logo/emblem-dark.png') }}" alt="">
                </div>
                <div class="logo-text">
                    <p>Government of Tripura</p>
                    <h6>Your Home</h6>
                </div>
                <div class="live-icon">
                    <a href="https://bharatvc.nic.in/join/browser/7157057726" target="_blank">
                        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                            type="module"></script>

                        <dotlottie-player src="https://lottie.host/33b78b02-8cd6-4e56-badb-81729bad5292/XVJKgtasfK.json"
                            background="transparent" speed="1" style="width: 48px; height: 48px;" loop autoplay>
                        </dotlottie-player>
                    </a>
                </div>
            </div>
            <h2><span>Calling</span>
                <div class="dummy-box"></div>
            </h2>

            <div class="minister-sec">

                {{-- @foreach ( $item as $data) --}}
                @if($PMItem)
                <div class="minister">
                    <div class="minister-photo">

                        <img src="{{ asset('upload/minister/'.$PMItem->photo) }}" alt="">
                    </div>
                    <div class="minister-des">
                        <p>{{ $PMItem->designation }}</p>
                        <h6>{{ $PMItem->name}}</h6>
                    </div>
                </div>
                @else
                @endif
                {{-- @endforeach --}}

               {{-- @foreach ( $item as $data) --}}
            @if($CMItem)
                <div class="minister cm">
                    <div class="minister-photo">
                        <img src="{{ asset('upload/minister/'.$CMItem->photo) }}" alt="">
                    </div>
                    <div class="minister-des">
                        <p>{{ $CMItem->designation }}</p>
                        <h6>{{ $CMItem->name }}</h6>
                    </div>
                </div>
                @else
                @endif
                {{-- @endforeach --}}
            </div>
            <div class="flower-pattern">
                <img src="{{ asset('frontend/images/RED flower Hero.png') }}" alt="">
            </div>
@php
$register = \App\Models\Registration::count();

@endphp
            <div class="rotate-text">
                <p>More Than <span>{{ $register }}</span> Registrations Done</p>
            </div>
            <div class="bg-pattern">
                <img src="{{ asset('frontend/images/Pattern Large.png') }}" alt="">
            </div>

            <div class="mobile-slide-down">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs"
                    type="module"></script>

                <dotlottie-player src="https://lottie.host/08075ebc-3e42-49b1-a7aa-4481f1669851/WQWg0IgE6x.json"
                    background="transparent" speed="1" style="width: 36px; height: 36px;" loop autoplay>
                </dotlottie-player>
            </div>

        </div>
        <div class="banner-left">
            <div id="slider">
                <ul id="slideWrap">
                    @foreach ($banner as $item )

                    <li><img src="{{ asset('upload/banner/'.$item->photo ) }}" alt=""></li>
                    @endforeach
                </ul>
                <button id="prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button id="next">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
            <div class="slider-layer">
                <div class="slider-con">
                    <h3>"</h3>
                    <h5>Join me on Probasi, our platform for unity and progress.</h5>
                    <h6> - Prof. Dr. Manik Saha </h6>
                    <h4>"</h4>
                    <p>
                        Welcome to Probasi, your gateway to actively participate in the progress of Tripura,
                        regardless of where you currently reside. Probasi is a unique platform designed for
                        individuals living outside the state to share their valuable ideas and insights for the
                        development of Tripura. Serving as a vital bridge connecting the diaspora with the local
                        community, Probasi strives to foster collaboration and channel the collective efforts of
                        both residents and those afar towards creating a positive impact on the state's growth. Join
                        us in shaping a brighter future for Tripura through meaningful contributions and shared
                        visions.
                    </p>
                    <a href="{{ route('registration') }}"><button>Register</button></a>
                </div>
            </div>
        </div>
    </div>


    <div class="scroll-sec">
        <div class="scroll-item">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module">
            </script>

            <dotlottie-player src="https://lottie.host/edb4f303-25eb-48c7-a73e-1bda81e2f327/tgElcBo5FC.json"
                background="transparent" speed="1" style="width: 48px; height: 48px;" loop autoplay></dotlottie-player>
        </div>
    </div>

</section>
