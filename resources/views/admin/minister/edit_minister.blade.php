@extends('admin.admin_master')
@section('admin')

<div class="page-content">
 <div class="container-fluid">


    <div class="col-12">
        <div class="card">
            <div class="card-body">

            <h4 class="card-title">Edit Prime Minister details section</h4>
              <form action="{{route('updateminister')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="status"  value="{{ $data->status }}">
                <input type="hidden" name="id"  value= "{{$data->id}}">
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="name"  value= "{{$data->name}}" id="example-text-input">
                    </div>
                </div>

                <!-- end row -->
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">designations</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="designation" value= "{{$data->designation}}"  id="example-text-input">
                    </div>
                </div>


               <!-- <div class="card">
                <div class="card-body">--->
                    <div class="row mb-3">
                    <h4 class="card-title">Choose picture</h4>
                    <div class="input-group">
                        <input type="file" class="form-control" name="photo" id="customFile">
                    </div>
                </div>
               <!-- </div>
            </div>-->
                <!-- end row -->

             <input type="submit"  class="btn btn-success btn-rounded waves-effect waves-light"   name="submit" value="Submit">
        </form>
                <!-- end row -->
            </div>
        </div>

    </div> <!-- end col -->
</div>
</div>
</div>
@endsection
