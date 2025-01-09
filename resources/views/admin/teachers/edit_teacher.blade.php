@extends('layouts.app')
@section('content_one')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Add Professor</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('teacher.index/teacher') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="">Professors</a></li>
                        <li class="breadcrumb-item active">Add Professor</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card-header">
                            <h5 class="card-title">Basic Info</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('teacher.update',$teacher->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="first_name" value="{{ $teacher->first_name }}">
                                        </div>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{ $teacher->last_name }}">
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $teacher->email }}">
                                        </div>
                                    </div>
                                    <!-- Joining Date -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Joining Date</label>
                                            <input type="date" class="form-control" name="joining_date" value="{{ $teacher->joining_date }}">
                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" value="{{$teacher->password}}">
                                        </div>
                                    </div>
                                    <!-- Confirm Password -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password" value="{{$teacher->confirm_password}}">
                                        </div>
                                    </div>
                                    <!-- Mobile Number -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Mobile Number</label>
                                            <input type="text" class="form-control" name="mobile_number" value="{{$teacher->mobile_number}}">
                                        </div>
                                    </div>
                                    <!-- Gender -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Gender</label>
                                            <select class="form-control" name="gender">
                                                <option value="{{$teacher->gender}}">Select Gender</option>
                                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Designation -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Designation</label>
                                            <input type="text" class="form-control" name="designation" value="{{ $teacher->designation }}">
                                        </div>
                                    </div>
                                    <!-- Class -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Current Class {{$teacher->class}}</label>
                                            <select class="form-control" name="class" >
                                                <option value="{{$teacher->class}}">Select Class</option>
                                                <option value="PHYSICS" >PHYSICS</option>
                                                <option value="CHEMISTRY"  >CHEMISTRY</option>
                                                <option value="BIOLOGY " >BIOLOGY</option>
                                                <option value="MATHEMATICS"  >MATHEMATICS</option>
                                                <option value="COMPUTER SCIENCE"  >COMPUTER SCIENCE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Date of Birth -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" value="{{$teacher->dob }}">
                                        </div>
                                    </div>
                                    <!-- Qualification -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Qualification</label>
                                            <input type="text" class="form-control" name="qualifications" value="{{ $teacher->qualifications }}">
                                        </div>
                                    </div>
                                    <!-- Profile Image -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Profile Image</label>
                                            <input type="file" class="form-control" name="profile_image" value="$teacher->profile_image">
                                        </div>
                                    </div>
                                    <!-- Document -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Document</label>
                                            <input type="file" class="form-control" name="doc" value="{{$teacher->doc}}">
                                        </div>
                                    </div>
                                    <!-- Buttons -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                Content body end
            ***********************************-->

@endsection

