@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add CM corner </h4>
                    <form action="{{route('Add.cmcorner')}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="title" id="example-text-input">
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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Document table</h4>


                            <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>sl no.</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach($data as $item)

                                    <tr>
                                        <td scope="row">{{$i++}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            <img class="img-thumbnail" style="width: 150px; height:60px"
                                                src= "/upload/cmcorner/{{$item->image}}">
                                        </td>
                                        <td>
                                           
                                            <a href="{{" /delete/cmcorner/".$item['id']}}" class="btn btn-danger sm"
                                                title="Delete Data" id="delete"> <i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>

        </div> <!-- end col -->

</div>
</div>
@endsection
