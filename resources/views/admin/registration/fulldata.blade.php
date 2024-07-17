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

                            <h4 class="card-title">Form View</h4>


                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input" value="{{ $data->name }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->phone }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->email }}" @readonly(true)>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->gender }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Current Address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->address }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->country }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->state }}" @readonly(true)>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">District</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->district }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->city }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Pin<Pin>
                                <Zip></Zip></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->pin }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Tripura Address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->current_address }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">District</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->current_district }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->current_city }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Pin</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->current_pin }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Roots present in Tripura</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->roots }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Current occupation Status</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->occupation }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nature of Occupation </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->nature_occupation }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Industry Of Occupation</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->industry_occupation }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Your last visit to the State</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->last_visited }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Reason For Moving out of State</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->reason_moving }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Best  time of the year ,you wih to visit Tripura </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->time_visit }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Which Areas goverment Should work on</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->govt_should }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Any Suggestion to solve an exisiting problem of tripura</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->solve_existing }}" @readonly(true)>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">What are the things oif Tripura Which you Can refer to friends outside of the state</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input"
                                        value="{{ $data->things_refer_outside }}" @readonly(true)>
                                </div>
                            </div>




                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
    </div>
</div>
@endsection
