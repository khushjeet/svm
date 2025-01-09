@extends('layouts.app')

@section('content_one')

<!-- Content body start -->
<div class="content-body">
    <div class="container-fluid">

        <!-- Breadcrumb navigation -->
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Professors</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <!-- Navigation links for breadcrumb -->
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Professors</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">All Professors</a></li>
                </ol>
            </div>
        </div>

        <!-- Tab navigation for List View and Grid View -->
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3">
                    <li class="nav-item">
                        <a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a>
                    </li>
                    <li class="nav-item">
                        <a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid View</a>
                    </li>
                </ul>
            </div>

            <!-- Tab content -->
            <div class="col-lg-12">
                <div class="row tab-content">

                    <!-- List View -->
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Professors</h4>
                                <a href="add-professor.html" class="btn btn-primary">+ Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Img</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Gender</th>
                                                <th>Education</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Joining Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <!-- Loop through teachers for list view -->
                                        @foreach ($teachers as $teacher)
                                        <tbody>
                                            <tr>
                                                <!-- Display teacher's details -->
                                                <td><img class="rounded-circle" width="35" src="{{ asset($teacher->profile_image) }}" alt=""></td>
                                                <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                                                <td>{{ $teacher->class }}</td>
                                                <td>{{ $teacher->gender }}</td>
                                                <td>{{ $teacher->qualifications }}</td>
                                                <td><a href="javascript:void(0);"><strong>{{ $teacher->mobile_number }}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{ $teacher->email }}</strong></a></td>
                                                <td>{{ $teacher->joining_date }}</td>
                                                <td>
                                                    <!-- Action buttons -->
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Grid View -->
                    <div id="grid-view" class="tab-pane fade col-lg-12">
                        @foreach ($teachers as $teacher)
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="card card-profile">
                                    <div class="card-header justify-content-end pb-0">
                                        <div class="dropdown">
                                            <!-- Dropdown menu -->
                                            <button class="btn btn-link" type="button" data-toggle="dropdown">
                                                <span class="dropdown-dots fs--1"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right border py-0">
                                                <div class="py-2">
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="text-center">
                                            <div class="profile-photo">
                                                <!-- Profile photo -->
                                                <img src="{{ asset($teacher->profile_image) }}" width="100" class="img-fluid rounded-circle" alt="">
                                            </div>
                                            <h3 class="mt-4 mb-1">{{ $teacher->first_name }} {{ $teacher->last_name }}</h3>
                                            <p class="text-muted">{{ $teacher->qualifications }}</p>
                                            <ul class="list-group mb-3 list-group-flush">
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Gender :</span><strong>{{ $teacher->gender }}</strong>
                                                </li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Phone No. :</span><strong>{{ $teacher->mobile_number }}</strong>
                                                </li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Email:</span><strong>{{ $teacher->email }}</strong>
                                                </li>
                                                <li class="list-group-item px-0 d-flex justify-content-between">
                                                    <span class="mb-0">Designation</span><strong>{{ $teacher->designation }}</strong>
                                                </li>
                                            </ul>
                                            <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="professor-profile.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content body end -->
@endsection

