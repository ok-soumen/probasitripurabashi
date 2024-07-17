@extends('admin.admin_master')
@section('admin')


<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">home</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                        $data=\App\Models\Event::count();
                        @endphp
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Events Created</p>
                                                <h4 class="mb-2">{{ $data }}</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"></span></p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <a href="{{ route('event') }}"><i class="ri-eye-fill"></i></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                @php
                                                $visitor=\App\Models\Visitor::sum('hits');
                                                @endphp
                                                <p class="text-truncate font-size-14 mb-2">Visitor</p>
                                                <h4 class="mb-2">{{$visitor}}</h4>
                                                <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"></span></p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="ri-eye-fill"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            @php
                            $data=\App\Models\Contactus::count();
                            @endphp
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Total Query/Feedback submitted</p>
                                                <h4 class="mb-2">{{ $data }}</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"></span></p>
                                            </div>
                                            <div class="avatar-sm">
                                                <a href="{{ route('view.Feedbacks') }}"><span class="avatar-title bg-light text-primary rounded-3">
                                                   <i class="ri-eye-fill"></i>
                                                </span></a>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            @php
                            $data=\App\Models\Registration::count();
                            @endphp
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Total Registration Forms</p>
                                                <h4 class="mb-2">{{ $data }}</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"></span></p>
                                            </div>
                                            <div class="avatar-sm">
                                               <a href="{{ route('view.registration') }}"> <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="ri-eye-fill"></i>
                                                </span></a>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!-- end page title -->

       {{-- dashboard view links                 <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                              <h4 class="text-truncate font-size-14 mb-2 text-center"><a href="">Events</a></h4>
                                            </div>

                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h4 class="text-truncate font-size-14 mb-2 text-center"><a href="">Notification</a></h4>
                                            </div>

                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h4 class="text-truncate font-size-14 mb-2 text-center"><a href="">Tender</a>
                                                </h4>
                                                <p class=" text-muted mb-0"></p>
                                            </div>

                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            @php
                            $data=\App\Models\Registration::count();
                            @endphp



                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">

                                                <h4 class="text-truncate font-size-14 mb-2 text-center">Registration:{{ $data }}</h4>
                                                <p class="text-muted mb-0"></p>
                                            </div>

                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->
dashboard view links --}}

                        <!-- end row -->


                        <!-- end row -->
                    </div>

                </div>
                @endsection
