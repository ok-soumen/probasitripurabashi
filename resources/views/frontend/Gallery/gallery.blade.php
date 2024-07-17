
@extends('frontend.index')
@section('content')

<section class="section other-page-sec">
    <div class="container">
        <div class="page-title">
            <h2>{{ $thumbnail->title }}</h2>
            <div class="breadcrumb">
                <a href="{{ url('/') }}"><span>Home</span></a>
                <span>/</span><a href="{{ route('home.thumbnail') }}"><span>Gallery</span></a>
                <span>/</span>

                <span class="active">{{ $thumbnail->title }}</span>
            </div>
            <!-- <p>20 Aug 2023</p> -->
        </div>

        <div class="gallery-grid" id="gallery">
            @foreach ( $data as $item )
             <div class="gallery-item">
                <img src="{{ asset('upload/gallery/'. $item->image ) }}" alt="">
            </div>
            @endforeach


        </div>
    </div>

</section>

@endsection
