@extends('layouts.app')

@section('content_one')
<div class="container" style="height: 1200px">
    <h1>Add Teacher</h1>
    <form action="{{ route('popular_teachers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>

        <div class="mb-3">
            <label for="designation" class="form-label">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter designation">
        </div>

        <div class="mb-3">
            <label for="teacher_image" class="form-label">Teacher Image</label>
            <input type="file" class="form-control" id="teacher_image" name="teacher_image">
        </div>

        <div class="mb-3">
            <label for="facebook_link" class="form-label">Facebook Link</label>
            <input type="url" class="form-control" id="facebook_link" name="facebook_link" placeholder="Enter Facebook URL">
        </div>

        <div class="mb-3">
            <label for="twitter_link" class="form-label">Twitter (X) Link</label>
            <input type="url" class="form-control" id="twitter_link" name="twitter_link" placeholder="Enter Twitter URL">
        </div>

        <div class="mb-3">
            <label for="instagram_link" class="form-label">Instagram Link</label>
            <input type="url" class="form-control" id="instagram_link" name="instagram_link" placeholder="Enter Instagram URL">
        </div>

        <button type="submit" class="btn btn-success">Add Teacher</button>
    </form>
</div>
@endsection
