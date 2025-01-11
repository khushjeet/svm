@extends('layouts.app')

@section('content_one')

<div class="content-body">
    <div class="container-fluid">
s
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Classes</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('sclass.sclass_create') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Classes</a></li>
                </ol>
            </div>
        </div>

        <!-- Search and Add New -->
        <div class="row mb-3">
            <div class="col-lg-6 text-right">
                <a href="{{ route('sclass.sclass_create') }}" class="btn btn-primary">+ Add New</a>
            </div>
        </div>

        <!-- Grid Content for Classes -->
        <div class="row">
            @foreach ($classes as $sclass)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="ml-3">
                                <h5>{{ $sclass->class_name_in_words }}</h5>
                                <p class="mb-1"><strong>Class Code:</strong> {{ $sclass->class_code }}</p>
                                <p class="mb-1"><strong>Class Name:</strong> {{ $sclass->class_name_in_number }}</p>
                                <p class="mb-1"><strong>Class Fee:</strong> {{ $sclass->class_fee }}</p>
                                <p class="mb-1"><strong>Max Students Count:</strong> {{ $sclass->no_of_students }}</p>
                                <p class="mb-1"><strong>No. of Subjects:</strong> {{ $sclass->no_of_subject }}</p>
                                <p class="mb-1"><strong>Class Teacher First Name:</strong> {{ $sclass->class_teacher_first_name }}</p>
                                <p class="mb-1"><strong>Class Teacher Last Name:</strong> {{ $sclass->class_teacher_last_name }}</p>
                                <p class="mb-1"><strong>Class Teacher Mobile Number:</strong>
                                    {{ $sclass->teacher->mobile_number ?? 'Not Assigned' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{-- <a href="" class="btn btn-sm btn-info">
                            <i class="la la-eye"></i> View
                        </a> --}}
                        <a href="{{route('sclass.edit',$sclass->id)}}" class="btn btn-sm btn-primary">
                            <i class="la la-pencil"></i> Edit
                        </a>
                        <a href="javascript:;" onclick="if(confirm('Are you sure you want to delete this class?')) { $('.form-{{$sclass->id}}').submit(); }"
                           class="btn btn-sm btn-danger">
                            <i class="la la-trash-o"></i> Delete
                        </a>
                        <form class="form-{{$sclass->id}}" action="{{route('sclass.sclass_delete',$sclass->id)}}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection
