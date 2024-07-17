@extends('admin.admin_master')
@section('admin')

<div class="page-content">
 <div class="container-fluid">


    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Add Thumbnail  Image</h4>
              <form action="{{route('image.addthumbnail')}}"  method="post" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="title" id="example-text-input"  required>
                    </div>
                </div>

                <!-- end row -->

               <!-- <div class="card">
                <div class="card-body">--->
                    <div class="row mb-3">

                    <div class="input-group">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Choose Image</label>
                        <input type="file" class="form-control" name="thumbnail_image" id="customFile" accept="image/*">
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Document table</h4>


                        <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>sl no.</th>
                                   <th>Event Name</th>
                                    <th>Title </th>
                                    <th>Image</th>

                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach($data as $item)
                                <tr>
                                    <td scope="row">{{$i++}}</td>

                                      @if(isset($item->events['name']))
                                      <td>{{ $item->events['name'] }}</td>
                                      @else
                                     <td></td>
                                     @endif
                                    <td>{{$item->title}}</td>
                                    <td>
                                        <img  class="img-thumbnail" style="width: 150px; height:60px" src="upload/thumbnail/{{$item->thumbnail_image}}">

                                    </td>
                                    <td>
                                        <a href="{{"/all/gallery/".$item['id']}}" class="btn btn-success sm" title="Add Gallery"> <i
                                                class=" ri-eye-fill "></i></a>
                                        <a href="{{"/main/gallery/".$item['id']}}" class="btn btn-success sm" title="Add Gallery"> <i class=" fas fa-plus "></i></a>
                                        <a href="{{"/edit/thumbnail/".$item['id']}}" class="btn btn-info sm" title="edit Data"> <i class="fas fa-edit"></i></a>
                                        <a href="{{"/delete/thumbnail/".$item['id']}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash"></i></a>
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
