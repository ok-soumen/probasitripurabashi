@extends('admin.admin_master')
@section('admin')

<div class="page-content">
 <div class="container-fluid">


    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="d-flex justify-content-end ">Back</a>

                <h4 class="card-title">Add Gallery  Image</h4>


              <form action="{{route('add.gallery')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="thumbnail_id" value="{{ $image-> id}}">
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="title" id="example-text-input">
                    </div>
                </div>


                <!-- end row -->

               <!-- <div class="card">
                <div class="card-body">--->
                    <div class="row mb-3">

                    <div class="input-group">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Choose Image</label>
                        <input type="file" class="form-control" name="image" id="customFile">
                    </div>
                    @error('thumbnail_image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
               <!-- </div>
            </div>-->
                <!-- end row -->

             <input type="submit"  class="btn btn-success btn-rounded waves-effect waves-light"   name="submit" value="Add Gallery ">

                </form>
                <!-- end row -->
            </div>
        </div>


    </div> <!-- end col -->
</div>
</div>
</div>
@endsection
