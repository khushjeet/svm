@extends('layouts.app')
@section('content_one')
<div class="container">
    <h1>Edit Section</h1>
    <form action="{{ route('about_sections.update', $aboutSection->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('frontend.backend.about_section.about_form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>
@endsection
