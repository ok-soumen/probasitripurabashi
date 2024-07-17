@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add Chief Minister details section</h4>
                    <form action="{{route('addCMminister')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="Status" Value="CM">
                                <input class="form-control" type="text" name="name" id="example-text-input">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- end row -->
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">designations</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="designation" id="example-text-input">
                                @error('designation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <!-- <div class="card">
                <div class="card-body">--->
                        <div class="row mb-3">
                            <h4 class="card-title">Choose picture</h4>
                            <div class="input-group">
                                <input type="file" class="form-control" name="photo" id="customFile" accept="image/*">

                            </div>
                            @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- </div>
            </div>-->
                        <!-- end row -->

                        <input type="submit" class="btn btn-success btn-rounded waves-effect waves-light" name="submit"
                            value="Submit">
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
                                        <th>Sl no.</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>photo</th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @php($i=1)
                                    @foreach($minister as $item)
                                    <tr>
                                        <td scope="row">{{$i++}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->designation}}</td>
                                        <td><img class="img-thumbnail" style="width: 100px; height:100px"
                                                src="/upload/minister/cm/{{$item->photo}}"></td>
                                        <td>
                                            <a href="{{" /edit/cm-details/".$item['id']}}" class="btn btn-info sm"
                                                title="edit Data"> <i class="fas fa-edit"></i></a>
                                            <a href="{{" /delete/cmminister-details/".$item['id']}}"
                                                class="btn btn-danger sm" title="Delete Data" id="delete"> <i
                                                    class="fas fa-trash"></i></a>
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
