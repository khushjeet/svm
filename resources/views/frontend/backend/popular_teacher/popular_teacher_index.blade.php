@extends('layouts.app')
@section('content_one')
<div class="container" style="height: 1200px">
    <h1>Popular Teachers</h1>
    <a href="{{ route('popular_teachers.create') }}" class="btn btn-primary mb-3">Add Teacher</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Image</th>
                <th>Facebook</th>
                <th>Twitter (X)</th>
                <th>Instagram</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->designation }}</td>
                <td>
                    <img src="{{ asset('uploads/' . $teacher->teacher_image) }}" alt="Teacher Image" width="50">
                </td>
                <td><a href="{{ $teacher->facebook_link }}" target="_blank" class="btn btn-sm btn-primary">Facebook</a></td>
                <td><a href="{{ $teacher->twitter_link }}" target="_blank" class="btn btn-sm btn-primary">X</a></td>
                <td><a href="{{ $teacher->instagram_link }}" target="_blank" class="btn btn-sm btn-primary">Instagram</a></td>
                <td>
                    <a href="{{ route('popular_teachers.edit', $teacher->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('popular_teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
