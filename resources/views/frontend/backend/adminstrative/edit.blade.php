@extends('layouts.app')

@section('content_one')
<div class="container">
    <h1>Edit Admistrative</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admistratives.update', $admistrative->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <div class="mt-2">
                <img src="{{ asset('uploads/' . $admistrative->image) }}" alt="{{ $admistrative->name }}" width="100">
            </div>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $admistrative->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="desination" class="form-label">Desination</label>
            <input type="text" class="form-control" id="desination" name="desination" value="{{ old('desination', $admistrative->desination) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admistratives.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
