<!-- resources/views/toppers/create.blade.php -->
@extends('layouts.app')

@section('content_one')
<div class="container" style="width: 1000px; height: 1200px; " >
    <h1>Add New Topper</h1>
    <form action="{{ route('our_toppers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name and Percentage</label>
            <input type="text" id="name" name="name"
            placeholder="Sanju Kumar(94%)"
            class="form-control" required>
        </div>
        <div class="form-group">
            <label for="profession">Class Roll Number</label>
            <input type="text" id="profession" name="profession"
            placeholder="X(12654598)"
            class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
