@extends('admin.admin_master')
@section('admin')

<div class="page-content">
 <div class="container-fluid">


    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Add Gallery  Image</h4>
              <form action="{{ route('update.event') }}"  method="post" enctype="multipart/form-data">
                @csrf
              <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="name" id="example-text-input" value="{{$data->name}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="type" id="example-text-input" Value="{{$data->type}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Place of  Event</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="place_of_event" id="example-text-input" value="{{$data->place_of_event}}">
                    </div>
                </div>

                <div class="input-group" id="datepicker2">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Event Date</label>
                    <input type="text" class="form-control" placeholder="dd M, yyyy"
                        data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                        data-date-autoclose="true" name="date"  value="{{$data->date}}">

                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                </div><!-- input-group -->
                <div class="row mb-3 mt-4">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="description" id="example-text-input" value="{{ $data->description}}" required>

                    </div>
                </div>

                {{-- <div class="form-check m-4" >
                    <label class="form-check-label" for="flexRadioDefault1">
                       To Be Featured
                    </label>
                    <input class="form-check-input" type="radio"  id="flexRadioDefault1"  value="1"  {{ $data->featured == '1' ? 'checked' : '' }}  name="featured" >
                  </div> --}}


                  <div class="input-group">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Choose Image</label>
                    <input type="file" class="form-control" name="image" id="customFile" accept="image/*">
                </div>

                <!-- end row -->

               <!-- <div class="card">
                <div class="card-body">--->

               <!-- </div>
            </div>-->
                <!-- end row -->

             <input type="submit"  class="btn btn-success btn-rounded waves-effect waves-light"   name="submit" value="Add Events  ">

                </form>
                <!-- end row -->
            </div>
        </div>



    </div> <!-- end col -->
</div>
</div>
</div>
@endsection
