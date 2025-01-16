@extends('layouts.app')

@section('content_one')
<div class="container">
    <h1>Admistrative List</h1>
    <a href="{{ route('admistratives.create') }}" class="btn btn-primary mb-3">Add Admistrative</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>

                <th>Image</th>
                <th>Name</th>
                <th>Desination</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admistratives as $admistrative)
                <tr>
                    <td>{{ $admistrative->id }}</td>

                    <td>
                        <img src="{{ asset('uploads/' . $admistrative->image) }}" alt="{{ $admistrative->name }}" width="50">
                    </td>
                    <td>{{ $admistrative->name }}</td>
                    <td>{{ $admistrative->desination }}</td>
                    <td>
                        <a href="{{ route('admistratives.edit', $admistrative->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admistratives.destroy', $admistrative->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
