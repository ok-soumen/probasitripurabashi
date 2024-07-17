@extends('admin.admin_master')
@section('admin')


<div class="page-content">
<div class="container-fluid">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Edit CM corner </h4>
            <form action="{{route('update.cmcorner')}}" method="post" enctype="multipart/form-data">
                @csrf


                <!-- end row -->
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="title" id="example-text-input" value="{{ $data->title }}">
                    </div>
                </div>


                <!-- <div class="card">
                <div class="card-body">--->
                <div class="row mb-3">
                    <h4 class="card-title">Choose Image</h4>
                    <div class="input-group">
                        <input type="file" class="form-control" name="image" id="customFile">
                    </div>
                </div>
                @error('file')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <!-- </div>
            </div>-->
                <!-- end row -->



                <input type="submit" class="btn btn-success btn-rounded waves-effect waves-light" name="submit"
                    value="Add Cmcorner">

            </form>
            <!-- end row -->
        </div>
    </div>



</div>
</div>
</div>
@endsection
