@extends('layouts.app')

@section('content_one')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Professor Details</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('teacher.index/teacher') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Professor Details</a></li>
                </ol>
            </div>
        </div>

        <!-- Card with Professor Details -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Profile Image -->
                    <div class="col-md-4 text-center">
                        <img class="rounded-circle" src="{{asset($teacher->profile_image)}}" alt="Profile Image" style="width: 200px; height: 200px; object-fit: cover;">
                        <h3 class="mt-3" > </h3>
                    </div>
                    

                    <!-- Details Section -->
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>First Name</th>
                                    <td>{{ $teacher->first_name }}</td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td>{{ $teacher->last_name }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $teacher->email }}</td>
                                </tr>
                                <tr>
                                    <th>Mobile Number</th>
                                    <td>{{ $teacher->mobile_number }}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{ $teacher->gender }}</td>
                                </tr>
                                <tr>
                                    <th>Designation</th>
                                    <td>{{ $teacher->designation }}</td>
                                </tr>
                                <tr>
                                    <th>Class</th>
                                    <td>{{ $teacher->class }}</td>
                                </tr>
                                <tr>
                                    <th>Date of Birth</th>
                                    <td>{{ $teacher->dob }}</td>
                                </tr>
                                <tr>
                                    <th>Qualifications</th>
                                    <td>{{ $teacher->qualifications }}</td>
                                </tr>
                                <tr>
                                    <th>Joining Date</th>
                                    <td>{{ $teacher->joining_date }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $teacher->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{ $teacher->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-right mt-3">
                            <a href="{{ route('teacher.index/teacher') }}" class="btn btn-secondary">Back</a>
                            <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
                            <a href="javascript:void(0);" onclick="if(confirm('Are you sure you want to delete this record?')) document.getElementById('delete-teacher-{{ $teacher->id }}').submit();" class="btn btn-danger">Delete</a>
                            <form id="delete-teacher-{{ $teacher->id }}" action="{{ route('teacher.delete', $teacher->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

