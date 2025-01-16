
@extends('layouts.app')

@section('content_one')
<div class="container " style="height:1200px">
    <h1 class="mb-4">About Sections</h1>
    <a href="{{ route('about_sections.create') }}" class="btn btn-primary mb-3">Add New Section</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>CEO Image</th>
                <th>Additional Images</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($aboutSections as $section)
                <tr>
                    <td>{{ $section->id }}</td>
                    <td>{{ $section->title }}</td>
                    <td>{{ Str::limit($section->description, 50) }}</td>
                    <td>
                        {{-- {{ asset(  $section->ceo_image) }} --}}
                        @if($section->ceo_image)
                            <img src="{{ asset( 'uploads/' .$section->ceo_image) }}" alt="CEO Image"
                                 style="width: 100px; height: 100px; object-fit: cover;" class="rounded">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            @if($section->image_1)
                                <img src="{{ asset('uploads/' . $section->image_1) }}" alt="Image 1"
                                     style="width: 100px; height: 100px; object-fit: cover;" class="rounded">
                            @endif
                            @if($section->image_2)
                                <img src="{{ asset('uploads/' . $section->image_2) }}" alt="Image 2"
                                     style="width: 100px; height: 100px; object-fit: cover;" class="rounded">
                            @endif
                            @if($section->image_3)
                                <img src="{{ asset('uploads/' . $section->image_3) }}" alt="Image 3"
                                     style="width: 100px; height: 100px; object-fit: cover;" class="rounded">
                            @endif
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('about_sections.edit', $section->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('about_sections.destroy', $section->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

{{-- @extends('layouts.app') --}}

{{-- @section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            @include('partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            @yield('content_one')
        </div>
    </div>
</div>
@endsection --}}
