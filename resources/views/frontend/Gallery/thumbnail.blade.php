
@extends('frontend.index')
@section('title','Gallery')
@section('content')



    <section class="section other-page-sec">
        <div class="container">
            <div class="page-title">

                <h2>Gallery</h2>
                <div class="breadcrumb">
                    <a href="{{ url('/') }}"><span>Home</span></a>
                    <span>/</span>
                    <span class="active">Gallery</span>
                </div>
                <!-- <p>Click to Enter the gallery</p> -->

            </div>
            <div class="gallery-grid">
                @foreach ( $data as $item )
                   <a href="{{ " /gallery/".Crypt::encrypt($item['id']) }}">
                    <div class="gallery-item">
                        <img src="{{ asset('upload/thumbnail/'.$item->thumbnail_image) }}" alt="">
                        <h4>{{ $item->title }}</h4>
                        <!-- <p>16th year of Durga Puja Celebrations at Bengaluru Tripura Mondoli.</p> -->
                    </div>
                </a>
                @endforeach

                {{-- <a href="Gallery/changes-in-tripura.html">
                    <div class="gallery-item">
                        <img src="Gallery/gallery-img/Changes In Tripura/1.jpg" alt="">
                        <h4>Changes In Tripura</h4>
                        <!-- <p>16th year of Durga Puja Celebrations at Bengaluru Tripura Mondoli.</p> -->
                    </div>
                </a>
                <a href="Gallery/agomoni23-tripura-mondoli-bengaluru.html">
                    <div class="gallery-item">
                        <img src="Gallery/gallery-img/Agomoni23/agomoni (2).jpg" alt="">
                        <h4>Agomoni ‘ 23 Tripura Mondoli Bengaluru</h4>
                        <!-- <p>16th year of Durga Puja Celebrations at Bengaluru Tripura Mondoli.</p> -->
                    </div>
                </a>
                <a href="Gallery/Independence2023.html">
                    <div class="gallery-item">
                        <img src="Gallery/gallery-img/Independence Day 2023/1.jpg" alt="">
                        <h4>Independence Day 2023</h4>
                        <!-- <p>06 March 2023</p> -->
                    </div>
                </a>
                <a href="Gallery/VijayDiwas-celebration.html">
                    <div class="gallery-item">
                        <img src="Gallery/gallery-img/VijayDiwas Celebration/1.jpg" alt="">
                        <h4>VijayDiwas Celebration</h4>
                        <!-- <p>29 Jan 2023</p> -->
                    </div>
                </a>
                <a href="Gallery/stakeholder-consultation.html">
                    <div class="gallery-item">
                        <img src="Gallery/gallery-img/Stakeholder Consultation/1.jpg" alt="">
                        <h4>Stakeholder Consultation</h4>
                        <!-- <p>12 MaDec 2022</p> -->
                    </div>
                </a> --}}



            </div>
        </div>
    </section>
    @endsection
