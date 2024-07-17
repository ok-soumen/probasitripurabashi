@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Registraions</h4>
                {{-- <p class="card-title-desc">The Buttons extension for DataTables
                    provides a common set of options, API methods and styling to display
                    buttons on a page that will interact with a DataTable. The core library
                    provides the based framework upon which plug-ins can built.
                </p> --}}


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Sl no.</th>
                            <th>Probasi Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Date</th>
                            <th>operation</th>
                        </tr>
                    </thead>

                    <tbody>
                          @php($i=1)
                          @foreach($data as $item)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$item->randomid}}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->country }}</td>
                            <td>{{ $item->created_at->format('d-m-y')}}</td>
                            <td>
                               <a href="{{" /get/registration/data/".$item['id']}}" class="btn btn-info btn-sm"
                            title="View Full Data"> <i class="mdi mdi-eye "></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>
</div>
</div><!-- end row -->





@endsection
