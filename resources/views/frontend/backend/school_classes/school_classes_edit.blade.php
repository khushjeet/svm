@extends('layouts.app')

@section('content_one')
<div class="container">
    <h1>Edit Class</h1>
    <form action="{{ route('school_classes.update', $schoolClass->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $schoolClass->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="teacher_name" class="form-label">Teacher Name</label>
            <input type="text" name="teacher_name" id="teacher_name" class="form-control" value="{{ old('teacher_name', $schoolClass->teacher_name) }}" required>
        </div>
        <div class="mb-3">
            <label for="teacher_image" class="form-label">Teacher Image</label>
            <input type="file" name="teacher_image" id="teacher_image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="class_image" class="form-label">Class Image</label>
            <input type="file" name="class_image" id="class_image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="text" name="time" id="time" class="form-control" value="{{ old('time', $schoolClass->time) }}">
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" name="capacity" id="capacity" class="form-control" value="{{ old('capacity', $schoolClass->capacity) }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
