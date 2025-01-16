
@extends('layouts.app')

@section('content_one')
<div class="container">
    <h1>Manage Facilities</h1>
    <a href="{{ route('facilities.create') }}" class="btn btn-primary mb-3">Add Facility</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Icon</th>
                <th>Description</th>
                <th>Color Class</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($facilities as $facility)
            <tr>
                <td>{{ $facility->name }}</td>
                <td>
                    <img src="{{asset('uploads/'.$facility->icon) }}" width="80px" >
                    </td>
                <td>{{ $facility->description }}</td>
                <td>{{ $facility->color_class }}</td>
                <td>
                    <a href="{{ route('facilities.edit', $facility->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('facilities.destroy', $facility->id) }}" method="POST" style="display: inline-block;">
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
