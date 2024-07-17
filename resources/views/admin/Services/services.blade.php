@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add Services section</h4>
                    <form action="{{route('Addservices')}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="link" name="link" id="example-text-input">
                            </div>
                        </div>


                        <!-- <div class="card">
                <div class="card-body">--->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="example-text-input" >
                            </div>
                        </div>
                        @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <!-- </div>
            </div>-->
                        <!-- end row -->



                        <input type="submit" class="btn btn-success btn-rounded waves-effect waves-light" name="submit"
                            value="Add Services">

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
                                        <th>Name</th>
                                        <th>Link</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach($data as $item)

                                    <tr>
                                        <td scope="row">{{$i++}}</td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td><a href="{{$item->link}}">{{$item->link}}</a></td>

                                        <td>
                                            <a href="{{" /edit/services/".$item['id']}}" class="btn btn-info sm "
                                                title="edit Data"> <i class="fas fa-edit"></i></a>
                                            <a href="{{" /delete/services/".$item['id']}}" class="btn btn-danger sm"
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
</div>
@endsection
