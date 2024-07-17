@extends('admin.admin_master')
@section('admin')

<div class="page-content">
 <div class="container-fluid">


    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Add Event</h4>
              <form action="{{route('add.events')}}"  method="post" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="name" id="example-text-input">
                        <span class="text-danger">
                            @error('name')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="type" id="example-text-input">
                        <span class="text-danger">
                            @error('type')
                            {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Place of  Event</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text"  name="place_of_event" id="example-text-input" >

                    </div>
                </div>

                <div class="input-group" id="datepicker2">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Event Date</label>
                    <input type="text" class="form-control" placeholder="dd-MM-yyyy"
                        data-date-format="yyyy-mm-dd" data-date-container='#datepicker2' data-provide="datepicker"
                        data-date-autoclose="true" name="date">

                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                </div><!-- input-group -->
                <div class="row mb-3 mt-4">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="description" id="example-text-input" required>

                        <span class="text-danger">
                            @error('description')
                            {{$message}}
                            @enderror
                        </span>

                    </div>
                </div>
                <div class="input-group">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Choose Image</label>
                    <input type="file" class="form-control" name="image" id="customFile" accept="image/*">
                </div>



             <input type="submit"  class="btn btn-success btn-rounded waves-effect waves-light"   name="submit" value="Add Events  ">

                </form>
                <div class="mt-4 text-danger"> Note:Click in add icon to  add event image  required* </div>

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
                                    <th>Name </th>
                                    <th>Type </th>
                                    <th>Place of Event</th>
                                     <th>Event Date </th>
                                     <th>Event thumbnail</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach($data as $item)
                                <tr>
                                    <td scope="row">{{$i++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>
                                        {{$item->place_of_event}}
                                    </td>
                                    <td>
                                        {{$item->date}}
                                    </td>
                                    <td>
                                        <img class="img-thumbnail" style="width: 150px; height:60px" src="/upload/eventthumbnail/{{$item->image}}">
                                    </td>
                                    <td>
                                        <a href="{{"/add/event-thumbnail/".$item['id']}}" class="btn btn-success sm" title="Add Gallery"> <i class=" fas fa-plus "></i></a>
                                        <a href="{{"/edit/events/".$item['id']}}" class="btn btn-info sm" title="edit Data"> <i class="fas fa-edit"></i></a>
                                        <a href="{{"/delete/events/".$item['id']}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash"></i></a>
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
