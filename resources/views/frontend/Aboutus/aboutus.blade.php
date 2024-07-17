@extends('frontend.index')
@section('title','About Us ')
@section('content')


<section class="section other-page-sec">
    <div class="container">
        <div class="page-title">

            <h2>About Us</h2>
            <div class="breadcrumb">
                <a href="{{ url('/') }}"><span>Home</span></a>
                <span>/</span>
                <span class="active">About Us</span>
            </div>
            <!-- <p>Click to Enter the gallery</p> -->

        </div>

        <div class="about-body">
            <p>
                <b>"Probasi Tripurabashi"</b> is an initiative by the Government of Tripura, that serves as a dedicated
                platform connecting the diaspora with their roots. Designed to facilitate the active participation
                of Tripura residents living outside the state, Probasi invites valuable ideas for the State's
                development. Beyond fostering a dynamic exchange of ideas, it also functions as an informative hub,
                keeping participants abreast of the latest happenings within the state.
            </p>
            <br>
            <p>

                Additionally, Probashi
                offers a gateway for accessing various services and initiatives implemented by the Government of
                Tripura, ensuring a seamless connection between the State and its global community.
            </p>
            <br><br><br><br>
            <h6>Contact Details</h6>
            <p>Phone: <a href="tel:7678239799" target="_blank">+91 7678239799</a> 


            <p>Under Secretary, Government of Tripura.</p>
            <p>Email ID: <a href="mailto:prabashitripurabashi@gmail.com" target="_blank"> prabashitripurabashi@gmail.com</a></p>
        </div>

    </div>
</section>
@endsection
