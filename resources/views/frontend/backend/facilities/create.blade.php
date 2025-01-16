@extends('layouts.app')

@section('content_one')
<div class="container">
    <h1>Create Facility</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('facilities.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Facility Name -->
        <div class="form-group">
            <label for="name">Facility Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <!-- Upload Icon -->
        <div class="form-group">
            <label for="icon">Upload Icon</label>
            <input type="file" class="form-control-file" id="icon" name="icon" accept="image/*" required>
            <small class="form-text text-muted">Upload a facility icon (e.g., .png, .jpg).</small>
            <div id="iconPreview" class="mt-2"></div>
        </div>

        <!-- Facility Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
        </div>

        <!-- Color Class Selection -->
        <div class="form-group">
            <label for="color_class">Select Color Gradient</label>
            <select class="form-control" id="color_class" name="color_class" required>
                <option value="">-- Select Color Gradient --</option>
                <option value="bg-primary" class="bg-primary">Primary</option>
                <option value="bg-success" class="bg-success">Success</option>
                <option value="bg-warning" class="bg-warning">Warning</option>
                <option value="bg-info" class="bg-info">Info</option>
                <option value="bg-danger" class="bg-danger">Danger</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<script>
    // Preview uploaded icon
    document.getElementById('icon').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('iconPreview').innerHTML = `
                    <img src="${e.target.result}" alt="Icon Preview" style="max-width: 100px; max-height: 100px;">
                `;
            };
            reader.readAsDataURL(file);
        } else {
            document.getElementById('iconPreview').innerHTML = '';
        }
    });
</script>
@endsection
