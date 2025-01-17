<!-- resources/views/toppers/index.blade.php -->
@extends('layouts.app')

@section('content_one')

<div class="container" style="width: 1000px; height: 1200px;">
    <h1>Our Toppers</h1>
    <a href="{{ route('our_toppers.create') }}" class="btn btn-primary">Add New Topper</a>

    @foreach($toppers as $topper)
        <div>
            <h3>{{ $topper->name }}</h3>
            <p>{{ $topper->profession }}</p>
            <img src="{{ asset('uploads/'.$topper->image_path) }}" alt="{{ $topper->name }}" width="100" height="100">
            <p>{{ $topper->description }}</p>
            <a href="{{ route('our_toppers.edit', $topper->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('our_toppers.destroy', $topper->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endforeach
</div>
@endsection

