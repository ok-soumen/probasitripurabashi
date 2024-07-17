@extends('frontend.index')
@section('content')

<section class="section other-page-sec">
    <div class="container">
        <div class="page-title">

            <h2>Contact Us</h2>
            <div class="breadcrumb">
                <a href="{{ url('/') }}"><span>Home</span></a>
                <span>/</span>
                <span class="active">About Us</span>
            </div>
            <!-- <p>Click to Enter the gallery</p> -->

        </div>

        <div class="contact-grid">
            <div class="left">
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                    <script>
                        (function () {
                                var setting = { "query": "Agartala, Tripura, India", "height": 448, "satellite": false, "zoom": 12, "placeId": "ChIJpyNByQ30UzcRx8hAbDwmodA", "cid": "0xd0a1263c6c40c8c7", "coords": [23.831457, 91.2867777], "lang": "en", "queryString": "Agartala, Tripura, India", "centerCoord": [23.831457, 91.2867777], "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3", "embed_id": "1041824" };
                                var d = document;
                                var s = d.createElement('script');
                                s.src = 'https://1map.com/js/script-for-user.js?embed_id=1041824';
                                s.async = true;
                                s.onload = function (e) {
                                    window.OneMap.initMap(setting)
                                };
                                var to = d.getElementsByTagName('script')[0];
                                to.parentNode.insertBefore(s, to);
                            })();
                    </script><a href="https://1map.com/map-embed">1 Map</a>
                </div>
            </div>
            <div class="right">
                <div class="contact-details">
                    <h6>Contact Details</h6>
                    <p>Phone: <a href="#">+91 94854 65885</a></p>
                    <p>Under Secretary, Government of Tripura.</p>
                    <p>Email ID: <a href="#">probasi.tripura@gmail.com</a></p>
                </div>
                <form action="{{ route('home.Addcontactus') }}" method="post" >
                    @csrf
                    {{-- <form action="{{ route('home.addcontactus') }}" method="post" name="test-form" id="regForm"> --}}
                    <label for="name">Full name*</label>
                    <input type="text" name="name" id="name" >
                     @error('name')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="phone">Phone number*</label>
                    <input type="tel" name="phone" id="phone" required>
                    @error('phone')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <label for="query">Query/Feedback*</label>
                    <textarea name="feedback"  cols="30" rows="10" ></textarea>
                    @error('feedback')
                    <span style="color:red">{{ $message }}</span>
                    @enderror
                    <input type="submit" name="submit" value="Submit">
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
