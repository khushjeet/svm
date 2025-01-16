@extends('layouts.app')
@section('content_one')
<div class="container">
    <h1>School Classes</h1>
    <a href="{{ route('school_classes.create') }}" class="btn btn-primary mb-3">Add New Class</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Teacher Name</th>
                <th>Time</th>
                <th>Capacity</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach(\App\Models\SchoolClass::all() as $class)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $class->title }}</td>
                <td>{{ $class->teacher_name }}</td>
                <td>{{ $class->time }}</td>
                |<th><img src="{{asset('uploads/'.$class->class_image)}} " width="100px" height="60px"></th>
                <td>{{ $class->capacity }}</td>
                <td>
                    <a href="{{ route('school_classes.edit', $class->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('school_classes.destroy', $class->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
