<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
    <!-- Summernote -->
    <link href="{{ asset('assets/vendor/summernote/summernote.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.cs') }}s">
    <link rel="stylesheet" href="{{ asset('assets/css/style.cs') }}s">
    <link rel="stylesheet" href="{{ asset('assets/css/skin-3.css') }}">
    	<!-- Datatable -->
        <link href="{{'assets/vendor/datatables/css/jquery.dataTables.min.css'}}" rel="stylesheet">
        <link rel="stylesheet" href="{{'assets/css/style.css'}}">
        	<!-- Pick date -->
    <link rel="stylesheet" href="{{asset('assets/vendor/pickadate/themes/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/pickadate/themes/default.date.css')}}">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('frontend/img/svmlogo.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('frontend/img/svmlogo.png') }}" alt="">
                <img class="brand-title" src="{{ asset('frontend/img/svmlogo.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- navigation bar start --}}
                        @include('layouts.navigation')

                        {{-- navigation bar end --}}
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a  class="has-arrow" href="{{route('dashboard')}}" aria-expanded="false">
                            <i class="la la-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="ai-icon" href="event-management.html" aria-expanded="false">
                            <i class="la la-calendar"></i>
                            <span class="nav-text">Event Management</span>
                        </a>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-user"></i>
                            <span class="nav-text">Teachers</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('teacher.index/teacher')}}">View All Teachers</a></li>
                            <li><a href="{{route('teacher.create')}}">Add New Teacher</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-users"></i>
                            <span class="nav-text">Students</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href=""> Students List</a></li>
                            <li><a href="add-student.html">Admission Form</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-graduation-cap"></i>
                            <span class="nav-text">Manage Classes</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('sclass.sclass_index')}}">View All Class</a></li>
                            <li><a href="{{route('sclass.sclass_create')}}">Add New Class</a></li>
                            <li><a href="">Add Time Table</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-book"></i>
                            <span class="nav-text">Library</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="all-library.html">All Library</a></li>
                            <li><a href="add-library.html">Add Library</a></li>
                            <li><a href="edit-library.html">Edit Library</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-users"></i>
                            <span class="nav-text">Manage Staff</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="all-staff.html">Staffs</a></li>
                            <li><a href="add-staff.html">Add Staff</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        {{-- <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-primary">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-users"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Total Students</p>
                                        <h3 class="text-white">3280</h3>
                                        <div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 80%">
                                            </div>
                                        </div>
                                        <small>80% Increase in 20 Days</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-warning">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-user"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">New Students</p>
                                        <h3 class="text-white">245</h3>
                                        <div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 50%">
                                            </div>
                                        </div>
                                        <small>50% Increase in 25 Days</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-secondary">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-graduation-cap"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Total Course</p>
                                        <h3 class="text-white">28</h3>
                                        <div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 76%">
                                            </div>
                                        </div>
                                        <small>76% Increase in 20 Days</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="widget-stat card bg-danger">
                            <div class="card-body">
                                <div class="media">
                                    <span class="mr-3">
                                        <i class="la la-dollar"></i>
                                    </span>
                                    <div class="media-body text-white">
                                        <p class="mb-1">Fees Collection</p>
                                        <h3 class="text-white">25160$</h3>
                                        <div class="progress mb-2 bg-white">
                                            <div class="progress-bar progress-animated bg-light" style="width: 30%">
                                            </div>
                                        </div>
                                        <small>30% Increase in 30 Days</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">University Survey</h3>
                            </div>
                            <div class="card-body">
                                <div id="morris_bar_stalked" class="morris_chart_height"
                                    style="height: 300px !important;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Donught Chart</h3>
                            </div>
                            <div class="card-body">
                                <div id="morris_donught_2" class="morris_chart_height"
                                    style="height: 300px !important;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-3 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">University Survey</h3>
                            </div>
                            <div class="card-body">
                                <div id="morris_area" class="morris_chart_height" style="height: 300px !important;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <img class="img-fluid" src="images/courses/pic1.jpg" alt="">
                            <div class="card-body">
                                <h4><a href="about-courses.html">Why is Early Education Essential?</a></h4>
                                <ul class="list-group mb-3 list-group-flush">
                                    <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span
                                            class="mb-0 text-muted">April 23</span>
                                        <a href="javascript:void(0);"><i
                                                class="la la-heart-o mr-1"></i><strong>230</strong></a>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="mb-0">Duration :</span><strong>12 Months</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="mb-0">Professor :</span><strong>Jack Ronan</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span><i
                                                class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong>
                                    </li>
                                </ul>
                                <a href="about-courses.html" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <img class="img-fluid" src="images/courses/pic2.jpg" alt="">
                            <div class="card-body">
                                <h4><a href="about-courses.html">The Shocking Revelation of Education.</a></h4>
                                <ul class="list-group mb-3 list-group-flush">
                                    <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span
                                            class="mb-0 text-muted">April 23</span>
                                        <a href="javascript:void(0);"><i
                                                class="la la-heart-o mr-1"></i><strong>230</strong></a>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="mb-0">Duration :</span><strong>12 Months</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="mb-0">Professor :</span><strong>Jimmy Morris</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span><i
                                                class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong>
                                    </li>
                                </ul>
                                <a href="about-courses.html" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <img class="img-fluid" src="images/courses/pic3.jpg" alt="">
                            <div class="card-body">
                                <h4><a href="about-courses.html">Five Things Nobody Told You About</a></h4>
                                <ul class="list-group mb-3 list-group-flush">
                                    <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span
                                            class="mb-0 text-muted">April 23</span>
                                        <a href="javascript:void(0);"><i
                                                class="la la-heart-o mr-1"></i><strong>230</strong></a>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="mb-0">Duration :</span><strong>12 Months</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="mb-0">Professor :</span><strong>Konne Backfield</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span><i
                                                class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong>
                                    </li>
                                </ul>
                                <a href="about-courses.html" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <img class="img-fluid" src="images/courses/pic4.jpg" alt="">
                            <div class="card-body">
                                <h4><a href="about-courses.html">Learn Python – Interactive Python Tutorial</a></h4>
                                <ul class="list-group mb-3 list-group-flush">
                                    <li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span
                                            class="mb-0 text-muted">April 23</span>
                                        <a href="javascript:void(0);"><i
                                                class="la la-heart-o mr-1"></i><strong>230</strong></a>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="mb-0">Duration :</span><strong>12 Months</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="mb-0">Professor :</span><strong>Nashid Martines</strong>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span><i
                                                class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong>
                                    </li>
                                </ul>
                                <a href="about-courses.html" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-xxl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">To</span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Subject</span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="summernote"></div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="fallback w-100">
                                                <input type="file" class="dropify" data-default-file="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="button" class="btn btn-primary float-right">
                                                Send <i class="fa fa-paper-plane-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Exam Toppers</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">Roll No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>542</td>
                                                <td>Jack Ronan</td>
                                                <td><span id="widget_sparklinedash"><canvas></canvas></span></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>243 </td>
                                                <td>Jimmy Morris</td>
                                                <td>
                                                    <div class="ico-sparkline">
                                                        <div id="widget_spark-bar"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>452 </td>
                                                <td>Nashid Martines</td>
                                                <td>
                                                    <div class="ico-sparkline">
                                                        <div id="widget_StackedBarChart"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>124</td>
                                                <td>Roman Aurora</td>
                                                <td>
                                                    <div class="ico-sparkline">
                                                        <div id="widget_tristate"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>234</td>
                                                <td>Samantha</td>
                                                <td>
                                                    <div class="ico-sparkline">
                                                        <div id="widget_composite-bar"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">New Student List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Assigned Professor</th>
                                                <th scope="col">Date Of Admit</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Fees</th>
                                                <th scope="col">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Jack Ronan</td>
                                                <td>Airi Satou</td>
                                                <td>01 August 2020</td>
                                                <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                                                <td>Commerce</td>
                                                <td>120$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>02 </td>
                                                <td>Jimmy Morris</td>
                                                <td>Angelica Ramos</td>
                                                <td>31 July 2020</td>
                                                <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                                <td>Mechanical</td>
                                                <td>120$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>03 </td>
                                                <td>Nashid Martines</td>
                                                <td>Ashton Cox</td>
                                                <td>30 July 2020</td>
                                                <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                                                <td>Science</td>
                                                <td>520$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td>Roman Aurora</td>
                                                <td>Cara Stevens</td>
                                                <td>29 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>Arts</td>
                                                <td>220$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td>Samantha</td>
                                                <td>Bruno Nash </td>
                                                <td>28 July 2020</td>
                                                <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                                <td>Maths</td>
                                                <td>130$</td>
                                                <td>
                                                    <a href="edit-student.html" class="btn btn-sm btn-primary"><i
                                                            class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i
                                                            class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
        @yield('content_one')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    Developed by
                    <a href="https://iictonline.com/">
                    IICT </a>(khushjeet). All Right Reserved (2025)
                </div>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


    <!--**********************************
        Scripts
    ***********************************--{{ asset('assets/    ***********************************-->') }}
    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>

    <!-- Chart sparkline plugin files -->
    <script src="{{ asset('assets/vendor/jquery-sparkline/jquery.sparkline.min.j') }}s"></script>
    <script src="{{ asset('assets/js/plugins-init/sparkline-init.js') }}"></script>

    <!-- Chart Morris plugin files -->
    <script src="{{ asset('assets/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/morris/morris.min.js') }}"></script>

    <!-- Init file -->
    <script src="{{ asset('assets/js/plugins-init/widgets-script-init.js') }}"></script>

    <!-- Demo scripts -->
    <script src="{{ asset('assets/js/dashboard/dashboard.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('assets/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ asset('assets/js/plugins-init/summernote-init.js') }}"></script>
    	<!-- Datatable -->
        <script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins-init/datatables.init.js')}}"></script>

    <!-- Svganimation scripts -->
    <script src="{{ asset('assets/vendor/svganimation/vivus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/svganimation/svg.animation.j') }}s"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
    	<!-- pickdate -->
        <script src="{{asset('assets/vendor/pickadate/picker.js')}}"></script>
        <script src="{{asset('assets/vendor/pickadate/picker.time.js')}}"></script>
        <script src="{{asset('assets/vendor/pickadate/picker.date.js')}}"></script>

        <!-- Pickdate -->
        <script src="{{asset('assets/js/plugins-init/pickadate-init.js')}}"></script>



</body>

</html>
