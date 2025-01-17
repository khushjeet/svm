@extends('layouts.app')
@section('content_one')
<div class="container" style="height: 1200px">
    <h1>Edit Teacher</h1>
    <form action="{{ route('popular_teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $teacher->name }}">
        </div>

        <div class="mb-3">
            <label for="designation" class="form-label">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{ $teacher->designation }}">
        </div>

        <div class="mb-3">
            <label for="teacher_image" class="form-label">Teacher Image</label>
            <input type="file" class="form-control" id="teacher_image" name="teacher_image">
            <small>Current Image:</small>
            <img src="{{ asset('uploads/' . $teacher->teacher_image) }}" alt="Current Image" width="50">
        </div>

        <div class="mb-3">
            <label for="facebook_link" class="form-label">Facebook Link</label>
            <input type="url" class="form-control" id="facebook_link" name="facebook_link" value="{{ $teacher->facebook_link }}">
        </div>

        <div class="mb-3">
            <label for="twitter_link" class="form-label">Twitter (X) Link</label>
            <input type="url" class="form-control" id="twitter_link" name="twitter_link" value="{{ $teacher->twitter_link }}">
        </div>

        <div class="mb-3">
            <label for="instagram_link" class="form-label">Instagram Link</label>
            <input type="url" class="form-control" id="instagram_link" name="instagram_link" value="{{ $teacher->instagram_link }}">
        </div>
        <button type="submit" class="btn btn-success">Update Teacher</button>
    </form>
</div>
@endsection
