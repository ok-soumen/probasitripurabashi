@extends('admin.admin_master')
@section('admin')

<div class="page-content">
 <div class="container-fluid">


 <div class="row">
                      <div class="col-lg-6">
                       <div class="card"><br><br> 


                                    <div class="card-body">
                                        <h4 class="card-title">Name : {{$adminData-> name}}</h4>
                                        <hr>

                                        <h4 class="card-title">Username : {{$adminData-> username}}</h4>
                                        <hr>
                                        <h4 class="card-title mt-2">Password : </h4>
                                        <a href="{{route('edit.profile')}}" class="btn btn-info btn-rounded waves-effect waves-light">Edit profile and Password</a>
                                       
                                    </div>
                                </div>
                            </div>
        
                        </div>
</div>
@endsection/