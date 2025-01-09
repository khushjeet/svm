@extends('layouts.app')

@section('content_one')

<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Classes</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('sclass.sclass_create')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Classes</a></li>
                </ol>
            </div>
        </div>

        <!-- Search and Add New -->
        <div class="row mb-3">
            <div class="col-lg-6 text-right">
                <a href="{{route('sclass.sclass_create')}}" class="btn btn-primary">+ Add New</a>
            </div>
        </div>

        <!-- Grid Content for Classes -->
        <div class="row">
            @foreach ($sclasses as $sclass)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <!-- You can add an image here if needed -->
                            <div class="ml-3">
                                <h5>{{ $sclass->class_name }}</h5>
                                <p class="mb-1"><strong>Class Code:</strong> {{ $sclass->class_code }}</p>
                                <p class="mb-1"><strong>Class Name:</strong> {{ $sclass->class_name}}</p>
                                <p class="mb-1"><strong>Class Teacher:</strong>{{$sclass->class_teacher_name}} </p>
                                <p class="mb-1"><strong>Students Count:</strong> {{$sclass->max_no_students}}</p>
                                <p class="mb-1"><strong>Class Schedule:</strong></p>
                                <p class="mb-1"><strong>Class Teacher Mobile Number:</strong> {{$sclass->class_teacher_mobile_number}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('sclass.sclass_show', $sclass->id) }}" class="btn btn-sm btn-info">
                            <i class="la la-eye"></i> View
                        </a>
                        <a href="" class="btn btn-sm btn-primary">
                            <i class="la la-pencil"></i> Edit
                        </a>
                        <a href="javascript:;" onclick="if(confirm('Are you sure you want to delete this class?')) { $('.form-{{$sclass->id}}').submit(); }"
                           class="btn btn-sm btn-danger">
                            <i class="la la-trash-o"></i> Delete
                        </a>
                        <form class="form-{{$sclass->id}}" action="" method="POST" style="display: none;">
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
