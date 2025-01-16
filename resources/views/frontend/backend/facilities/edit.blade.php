@extends('layouts.app')

@section('content_one')
    <div class="container py-5">
        <h1>Edit Facility</h1>

        <!-- Success/Error Messages -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('facilities.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Facility Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $facility->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="icon" class="form-label">Facility Icon</label>
                <input type="file" class="form-control" id="icon" name="icon">
                @if($facility->icon)
                    <div class="mt-3">
                        <img src="{{ asset('storage/' . $facility->icon) }}" alt="Current Icon" width="100">
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $facility->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="color_class" class="form-label">Color</label>
                <select class="form-control" id="color_class" name="color_class" required>
                    <option value="bg-primary" {{ old('color_class', $facility->color_class) == 'bg-primary' ? 'selected' : '' }}>Primary</option>
                    <option value="bg-success" {{ old('color_class', $facility->color_class) == 'bg-success' ? 'selected' : '' }}>Success</option>
                    <option value="bg-warning" {{ old('color_class', $facility->color_class) == 'bg-warning' ? 'selected' : '' }}>Warning</option>
                    <option value="bg-info" {{ old('color_class', $facility->color_class) == 'bg-info' ? 'selected' : '' }}>Info</option>
                    <option value="bg-danger" {{ old('color_class', $facility->color_class) == 'bg-danger' ? 'selected' : '' }}>Danger</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Facility</button>
        </form>
    </div>
@endsection
