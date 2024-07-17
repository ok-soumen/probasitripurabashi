@extends('frontend.index')
@section('Title','Event')
@section('content')

<section class="section other-page-sec">
    <div class="container">
        <div class="page-title">
            <h2>{{ $main->name }}</h2>
            <div class="breadcrumb">
                <a href="../index.html"><span>Home</span></a>
                <span>/</span><a href="{{url('/event')}}"><span>Our Events</span></a>
                <span>/</span>
                <span class="active">{{ $main->name }}</span>
            </div>
            <br>
            <p>
                {{ $main->description }}
            </p>
        </div>
       

        <div class="event-sec">
            <div class="event-slider">

                <div id="slider">
                    <ul id="slideWrap">
                    @foreach ( $data as $item )
                          <li> <img src="{{ asset('upload/eventgallery/'. $item ->image ) }}" alt=""></li>
                     @endforeach

                    </ul>

                    <button id="prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button id="next"><i class="fa-solid fa-chevron-right"></i></button>
                </div>


            </div>
        </div>
    </div>
</section>

@endsection
