@extends('frontend.index')
@section('content')

<section class="section other-page-sec">
    <div class="container">
        <div class="page-title">

            <h2>Services</h2>
            <div class="breadcrumb">
                <a href="{{ url('/') }}"><span>Home</span></a>
                <span>/</span>
                <span class="active">Services</span>
            </div>
            <!-- <p>Click to Enter the gallery</p> -->

        </div>

        <div class="my-table" id="notification">
            <table id="paginate_table">
                <tbody>
                    @foreach ($data as $item)
<tr>
    <td>

        <p>
           {{$item->name}}
        </p>
    </td>
    <td class="view-btn-td">
        <a href="{{ $item->link }}"><button>View</button></a>
    </td>
</tr>
                    @endforeach







                </tbody>
            </table>
        </div>


    </div>
</section>
@endsection
