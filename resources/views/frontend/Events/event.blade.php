@extends('frontend.index')
@section('Title','Events')
@section('content')

<section class="section other-page-sec">
    <div class="container">
        <div class="page-title">
            <h2>Our Events</h2>
            <div class="breadcrumb">
                <a href="index.html"><span>Home</span></a>
                <span>/</span>
                <span class="active">Our Events</span>
            </div>
            <!-- <p>Click to Visit our events</p> -->
        </div>



        <div class="gallery-grid">

            @foreach ( $data as $item)
            <a href="{{ "/view-event/". $item->id}}">
                <div class="gallery-item">
                         <img src="{{ asset('upload/eventthumbnail/'. $item ->image ) }}" alt="">

                    <h4>{{ $item->name }}</h4>
                    <p>{{ $item->date }}</p>
                 <p>{{$item->description}}</p> 
                </div>
            </a>
            @endforeach
            



        </div>
    </div>
</section>
@endsection
