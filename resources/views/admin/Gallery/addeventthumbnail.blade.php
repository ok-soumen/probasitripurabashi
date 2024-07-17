@extends('admin.admin_master')
@section('admin')

<div class="page-content">
 <div class="container-fluid">


    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="d-flex justify-content-end ">Back</a>
                <h4 class="card-title">Add Thumbnail  Image</h4>
              <form action="{{route('store.thumbnail')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="event_id" value="{{$data->id}}">
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="title" id="example-text-input" >
                    </div>
                </div>

                <!-- end row -->

               <!-- <div class="card">
                <div class="card-body">--->
                    <div class="row mb-3">

                    <div class="input-group">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Choose Image</label>
                        <input type="file" class="form-control" name="image" id="customFile" accept="image/*">
                    </div>
                    @error('thumbnail_image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
               <!-- </div>
            </div>-->
                <!-- end row -->

             <input type="submit"  class="btn btn-success btn-rounded waves-effect waves-light"   name="submit" value="Add Thumbnail">

                </form>
                <!-- end row -->
            </div>
        </div>



    </div> <!-- end col -->
    <div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url()->previous() }}" class="d-flex justify-content-end ">Back</a>
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <h4 class="card-title">Galley Image</h4>


                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>sl no.</th>
                                    <th>Title </th>
                                    <th>Image</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>


                                @php($i=1)

                                @foreach($main as $item)

                                <tr>
                                    <td scope="row">{{$i++}}</td>
                                    <td>{{$item ->title}}</td>
                                    <td>
                                        <img class="img-thumbnail" style="width: 150px; height:150px"
                                            src="{{asset('upload/eventgallery/'.$item->image)}}">
                                    </td>
                                    <td>


                                        <a href="{{" /delete/eventgallery/".$item['id']}}" class="btn btn-danger sm"
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
    </div>
    </div>
</div>
</div>
</div>

@endsection
