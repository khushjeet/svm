@extends('layouts.app')

@section('content_one')

<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Professors</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('teacher.create')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Professors</a></li>
                </ol>
            </div>
        </div>


        <!-- Search and Add New -->
        <div class="row mb-3">
            <div class="col-lg-6 text-right">
                <a href="add-professor.html" class="btn btn-primary">+ Add New</a>
            </div>
        </div>

        <!-- Table Content -->
        <div class="card">
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
                        <tbody>
                            @foreach ($teachers as $teacher)
                            <tr>
                                <td>
                                    <img class="rounded-circle" width="35" src="{{ asset($teacher->profile_image) }}" alt="">
                                </td>
                                <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                                <td>{{ $teacher->class }}</td>
                                <td>{{ $teacher->gender }}</td>
                                <td>{{ $teacher->qualifications }}</td>
                                <td>{{ $teacher->mobile_number }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->joining_date }}</td>
                                <td>
                                    <!-- View Icon -->
                                    <a href="{{route('teacher.show', $teacher->id)}}" class="btn btn-sm btn-info">
                                        <i class="la la-eye"></i>
                                    </a>

                                    <!-- Edit Icon -->
                                    <a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-sm btn-primary">
                                        <i class="la la-pencil"></i>
                                    </a>

                                    <!-- Delete Icon -->
                                    <a href="javascript:;" onclick="if(confirm('Are you sure you want to delete this teacher?')) { $('.form-{{$teacher->id}}').submit(); }"
                                       class="btn btn-sm btn-danger">
                                        <i class="la la-trash-o"></i>
                                    </a>
                                    <form class="form-{{$teacher->id}}" action="{{route('teacher.delete', $teacher->id)}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
