<!-- resources/views/toppers/edit.blade.php -->
@extends('layouts.app')

@section('content_one')
<div class="container" style="width: 1000px; height: 1200px;" >
    <h1>Edit Topper</h1>
    <form action="{{ route('our_toppers.update', $topper->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name and Percentage</label>
            <input type="text" id="name" name="name"
            placeholder="Sanju Kumar(94%)"
            class="form-control" value="{{ $topper->name }}" required>
        </div>
        <div class="form-group">
            <label for="profession">Class Roll Number</label>
            <input type="text" id="profession" name="profession"
            placeholder="X(12654598)"
            class="form-control" value="{{ $topper->profession }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" required>{{ $topper->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control">
            <img src="{{ asset('uploads/'.$topper->image_path) }}" alt="{{ $topper->name }}" width="100" height="100">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
