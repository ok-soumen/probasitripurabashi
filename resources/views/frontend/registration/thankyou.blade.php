@extends('frontend.index')
@section('content')

<section>
    <div class=content>
        <div class="wrapper-1">
            <div class="wrapper-2">
                <h1>Thank you !</h1>
                <p>Thank you for your submission </p>
                <p> Welcome back, Tripura missed you ! </p>
                <a href="{{ url('/') }}"><button class=" go-home">Go home</button></a>

            </div>

        </div>
    </div>
</section>
@endsection
