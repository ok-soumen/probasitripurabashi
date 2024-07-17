@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Query/Feedback</h4>



                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Sl no.</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>operation</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php($i=1)
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->created_at->format('d-m-y')}}</td>
                                    <td>
                                        <a href="{{"/view/feedbacks/".$item['id']}}" class="btn btn-info btn-sm"
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
