<!DOCTYPE html><html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/vertical-teal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Oct 2018 14:16:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
     <title>Smart Garage | @yield('title')</title>
    <meta content="Admin Dashboard" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="{{asset('assets/images/logo.jpg')}}">
        <!-- Dropzone css -->
    <link href="https://themesbrand.com/lexa/html/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
        <!-- DataTables -->
    <link href="https://themesbrand.com/lexa/html/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://themesbrand.com/lexa/html/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="https://themesbrand.com/lexa/html/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left"><a href="{{url('admin/dashboard')}}" class="logo"><span>                
                    <img src="{{asset('assets/images/logo.jpg')}}" alt="" height="22">
                        <span style="color: white;"> Smart Garage </span>
                </a></div>
            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
  
                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img"><a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <!-- <img src="{{asset('assets/images/user-avatar.png')}}" alt="user" class="rounded-circle"> -->
                            <i class="ti-user"></i>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item--> 
                                <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a> -->
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i> Logout</a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left"><button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button></li>
                    <li class="d-none d-sm-block">
                        <div class="dropdown pt-3 d-inline-block"><a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">New Mechanician</a> <a class="dropdown-item" href="#">New Garage</a> <a class="dropdown-item" href="#">New Service</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">New speciality</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div><!-- Top Bar End -->
                <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">DashBoard</li>
                        <!-- <li><a href="{{url('admin/dashboard')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Profile</span></a></li> -->
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-settings-variant"></i><span> Mechanician <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                             
                                <li><a href="{{route('mechanicians.index')}}">All mechanicians</a></li>
                                <li><a href="{{route('mechanicians.create')}}">Add New mechanician</a></li> 
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-webhook"></i><span> Garage <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                           
                                <li><a href="{{route('garages.index')}}">All garages</a></li>
                                <li><a href="{{route('garages.create')}}">Add New garage</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gauge"></i><span> Garage Services <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                            {{-- 
                                <li><a href="{{route('courses.index')}}">All Courses</a></li>
                                <li><a href="{{route('courses.create')}}">Add new Courses</a></li>
                                <li><a href="{{route('coursecategories.index')}}">Course Categories</a></li> --}}
                                
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-dumbbell"></i><span> Mechanician Speciality <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                            {{--
                                <li><a href="{{route('books.index')}}">View All Books</a></li>
                                <li><a href="{{route('books.create')}}">Add New Book</a></li>
                                <li><a href="{{route('bookcategories.index')}}">Book Category</a></li>
                                --}}
                            </ul>
                        </li>

                         <!-- <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Trainings <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                            {{--
                                <li><a href="{{route('trainings.index')}}">View All</a></li>
                                <li><a href="{{route('trainings.create')}}">Create New</a></li>--}}
                            </ul>
                        </li> -->

                         <!-- <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span>Events <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                            {{--
                                <li><a href="{{route('events.index')}}">View All</a></li>
                                <li><a href="{{route('events.create')}}">Create New</a></li> --}}
                            </ul>
                        </li> -->
                         <!-- <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span>Research <br>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           Conferences <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                {{--
                                <li><a href="{{route('conferences.index')}}">View All</a></li>
                                <li><a href="{{route('conferences.create')}}">Create New</a></li>
                                --}}
                            </ul>
                        </li>
                        
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="fas fa-users"></i><span> Users <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                            {{--
                                <li><a href="{{route('users.index')}}">All Users</a></li>
                                <li><a href="{{route('users.create')}}">Add New User</a></li>--}}
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email-outline"></i><span> Roles <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                            {{--
                                <li><a href="{{route('roles.index')}}">View Roles</a></li>
                                <li><a href="{{route('roles.create')}}">Add new role</a></li>--}}
                            </ul>
                        </li> -->
                    </ul>
                </div><!-- Sidebar -->
                <div class="clearfix"></div>
            </div><!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @include('partials.success')
        @include('partials.error')
     @yield('content')
           <!-- End Right content here -->
        <!-- ============================================================== -->
        <footer class="footer">
        © 2019 Smart Garage - <span class="d-none d-sm-inline-block">Crafted with <i class="mdi mdi-heart text-danger"></i> by jules fabien & i3</span>.
        </footer>
    <!-- END wrapper -->
    <!-- jQuery  -->
    
    
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>   
    <script src="{{asset('assets/js/dropzone.js')}}"></script>   
        <!-- Dropzone js -->
        
    <script src="https://themesbrand.com/lexa/html/plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- Required datatable js -->
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/dataTables.bootstrap4.min.js"></script><!-- Buttons examples -->
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/jszip.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/pdfmake.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/vfs_fonts.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/buttons.html5.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/buttons.print.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/buttons.colVis.min.js"></script><!-- Responsive examples -->
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/responsive.bootstrap4.min.js"></script><!-- Datatable init js -->
    <script src="{{asset('assets/pages/datatables.init.js')}}"></script><!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>
<!-- Mirrored from themesbrand.com/lexa/html/vertical-teal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Oct 2018 14:16:46 GMT -->
</html>
