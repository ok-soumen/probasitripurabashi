@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<div class="page-content">
<div class="container-fluid">

<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Add Manager </h4>
                                      <form action="{{route('add.manager')}}" method="Post" >
                                        @csrf 
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value=""  name="name" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="email" value=""  name="email" id="example-text-input">
                                            </div>
                                        </div>
                        
                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value=""  name="username" id="example-text-input">
                                            </div>
                                        </div>
                                            <!-- end row -->
                                    
    
                                             <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">New password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" value=""  name="password" id="newpassword">
                                                </div>
                                            </div>
                                         
                                            <!-- end row -->
                                         
                                         <!-- end row -->
                                         <input type="submit"  class="btn btn-success btn-rounded waves-effect waves-light"   name="submit" value="Add Profile">

                                        </form>
                                        <div class="card mt-4">
                                            <div class="card-body">
                                                
                                                <div class="table-responsive ">
                                                    <table class="table mb-0">
                
                                                        <thead>
                                                           
                                                            
                                                            <tr>
                                                                <th>Sl no.</th>
                                                                <th>Username</th>
                                                                <th>Role</th>
                                                                <th>Operation</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @php($i=1)
                                                            @foreach($user as $item)
                                                            
                                                           
                                                            <tr>
                                                                <th scope="row">{{$i++}}</th>
                                                                <td>{{$item->username}}</td>
                                                                <td>@if($item->utype == "USR")
                                                                Manager
                                                                @endif</td>
                                                                <td>
                                                                    <a href="{{"/edit/manager/".$item['id']}}" class="btn btn-info sm" title="edit Data"> <i class="fas fa-edit"></i></a>
                                                                    <a href="{{"/delete/manager/".$item['id']}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            
                                                            @endforeach
                                                            
                                                           
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
</div>
</div>

<script type="text/javascript">

  $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
  });

</script>
@endsection