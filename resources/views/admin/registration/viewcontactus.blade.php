@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
        <input type="hidden" name="id" value="{{ $data->id }}">
        <p><a style="flex:right" href="{{ url()->previous() }}">Back</a></p>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Conatct us Query/Feedback</h4>


                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Artisanal kale"
                                    id="example-text-input" value="{{ $data->name }}" @readonly(true)>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Artisanal kale"
                                    id="example-text-input" value="{{ $data->phone }}" @readonly(true)>
                            </div>
                        </div>
                        <div class="row mb-3">

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Query/Feedback</label>
                                <textarea class="form-control"  name ="feedback "id="exampleFormControlTextarea1" rows="3" @readonly(true)>{{ $data->feedback }}</textarea>
                            </div>
                        </div>







                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
@endsection
