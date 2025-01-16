@extends('layouts.app')

@section('content_one')
<div class="container" >
    <h1>Create Section</h1>
    <form action="{{ route('about_sections.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('frontend.backend.about_section.about_form')
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
