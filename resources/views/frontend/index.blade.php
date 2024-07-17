<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Probasi Tripurabashi')</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/query.css')}}">

    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">
    <script type="text/javascript" src="{{ asset('frontend/js/countries.js') }}"></script>

    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>
     <!-- Include SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>

    <div class="search-form" action="" id="search-form">
        <form>
            <img src="{{ asset('frontend/images/search.png') }}" alt="">
            <input type="text" placeholder="Search here.......">
            <input type="submit" value="Submit" onclick="searchfunctionclose()">
            <img src="{{ asset('frontend/images/close.png') }}" alt="" onclick="searchfunctionclose()" class="close">
        </form>
    </div>
    <!--------header----->
    @include('frontend.body.header')


    <!--------------------------------------------------------   Banner sec   ---------------------------------------------------------->



    @yield('content')


    <!--------------------------------------------------   other Departments section   ---------------------------------------------->



    <!--------------------------------------------------   Subscribe section   -------------------------------------------------------->

    <section class="section">

        <div class="subscribe-sec">
            <div class="subscribe">
                <img src="images/email.png" alt="">
                <div>
                    <h6>Click Here for Registration</h6>
                    <!-- <p>Give your business an edge with our leading industry insights.</p> -->
                </div>
                <a href="{{ route('registration') }}"><button>Registration</button></a>
            </div>
        </div>

    </section>

    <!--------------------------------------------------   Footer   -------------------------------------------------------->
    @include('frontend.body.footer')

    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        {{-- gallery --  --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.5/viewer.min.js"
            integrity="sha512-i5q29evO2Z4FHGCO+d5VLrwgre/l+vaud5qsVqQbPXvHmD9obORDrPIGFpP2+ep+HY+z41kAmVFRHqQAjSROmA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.5/viewer.css"
            integrity="sha512-c7kgo7PyRiLnl7mPdTDaH0dUhJMpij4aXRMOHmXaFCu96jInpKc8sZ2U6lby3+mOpLSSlAndRtH6dIonO9qVEQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

            <script>
                    // viewer js script
                        const gallery = document.getElementById('gallery');
                        // const viewer = new Viewer(gallery);
                        const viewer = new Viewer(gallery, {
                            toolbar: {
                                zoomIn: 4,
                                zoomOut: 4,
                                prev() {
                                    viewer.prev(true);
                                },
                                play: true,
                                next() {
                                    viewer.next(true);
                                },

                                // download() {
                                //     const a = document.createElement('a');
                                //     a.href = viewer.image.src;
                                //     a.download = viewer.image.alt;
                                //     document.body.appendChild(a);
                                //     a.click();
                                //     document.body.removeChild(a);
                                // },
                            },
                        });

                </script>
                <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
                <script src="{{ asset('frontend/js/script.js') }}"></script>
                <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                </script>
</body>

</html>
