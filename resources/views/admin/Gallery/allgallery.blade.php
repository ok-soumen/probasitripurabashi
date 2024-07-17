@extends('admin.admin_master')
@section('admin')


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
                                    src="{{asset('upload/gallery/'.$item->image)}}">
                            </td>
                            <td>


                                <a href="{{" /delete/gallery/".$item['id']}}" class="btn btn-danger sm"
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
    </div></div>
@endsection
