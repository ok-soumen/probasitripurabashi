<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{url('/dashboard')}}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-file-word-2-line  "></i>
                                    <span>Image Section</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li ><a href="{{ route('banner') }}">Banner</a></li>
                                    <li><a href="{{ route('footer.slider') }}">Footer Slider</a></li>

                                </ul>

                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-file-word-2-line  "></i>
                                    <span>Minister Section</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">

                                    <li><a href="{{ route('minister') }}">Minister Banner  Image</a></li>
                                    {{-- <li><a href="{{ route('CMminister') }}">Cm Image</a></li> --}}
                                </ul>

                            </li>
                            <li>
                                <a href="{{ route('Cmcorner') }}" class="">
                                    <i class="ri-file-word-2-line  "></i>
                                    <span>Cm corner</span>
                                </a>


                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-file-word-2-line  "></i>
                                    <span>Gallery Section</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('event') }}">Event</a></li>
                                    <li><a href="{{ route('image.thumbnail') }}">Gallery</a></li>

                                </ul>

                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-file-word-2-line  "></i>
                                    <span>Services Section</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('services') }}">Services</a></li>

                                </ul>

                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-file-word-2-line  "></i>
                                    <span>View Registration</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('view.registration') }}">Registration Data</a></li>

                                </ul>

                            </li>
                            <li>
                                <a href="{{ route('view.Feedbacks') }}" class="">
                                    <i class="ri-file-word-2-line  "></i>
                                    <span>Query/Feedback</span>
                                </a>


                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
