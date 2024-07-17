
@php
    $data=$data=\App\Models\Footerslider::all();
@endphp
<section class="section">

    <div class="container">


        <div class="footer-slider-sec">

            <div class="footer-slider">
                <div class="slide-container swiper">
                    <div class="slide-content-filter">
                        <div class="card-wrapper swiper-wrapper">

                            @foreach ( $data as  $item)
                            <div class="card swiper-slide">
                                <div class="card-con">
                                    <div class="foot-logo-container">
                                    <a href="{{$item->link}}" target="_blank">
                                        <img src="{{ asset('upload/footerslider/'.$item->footerslider) }}" alt="">
                                    </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                </div>
            </div>
        </div>
    </div>
</section>
