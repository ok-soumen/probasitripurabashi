@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add Footer slider section</h4>
                    <form action="{{route('services.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">

                        <div class="row m-3 ">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="example-text-input" value="{{ $data->name }}" </div>
                            </div>


                        <!-- end row -->
                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="link" name="link" id="example-text-input"
                                    value="{{$data->link}}">
                            </div>
                        </div>


                        <!-- <div class="card">
                <div class="card-body">--->


                        <!-- </div>
            </div>-->
                        <!-- end row -->



                        <input type="submit" class="btn btn-success btn-rounded waves-effect waves-light" name="submit" value="update Services">

                    </form>
                    <!-- end row -->
                </div>
            </div>


        </div> <!-- end col -->
    </div>
</div>
</div>
@endsection
