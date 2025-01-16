@extends('layouts.app')

@section('content_one')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Update Slider</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('sliderbar.update', \App\Models\Slider::orderBy('id', 'desc')->first()->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('put')

                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Header One</label>
                                        <input type="text" placeholder="Image Header One" class="form-control" name="image_header_1" value="{{ old('image_header_1', $slider->image_header_1) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title One</label>
                                        <input type="text" placeholder="Image Title One" class="form-control" name="image_title_1" value="{{ old('image_title_1', $slider->image_title_1) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Header Two</label>
                                        <input type="text" placeholder="Image Header Two" class="form-control" name="image_header_2" value="{{ old('image_header_2', $slider->image_header_2) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title Two</label>
                                        <input type="text" placeholder="Image Title Two" class="form-control" name="image_title_2" value="{{ old('image_title_2', $slider->image_title_2) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Header Three</label>
                                        <input type="text" placeholder="Image Header Three" class="form-control" name="image_header_3" value="{{ old('image_header_3', $slider->image_header_3) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title Three</label>
                                        <input type="text" placeholder="Image Title Three" class="form-control" name="image_title_3" value="{{ old('image_title_3', $slider->image_title_3) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Header Four</label>
                                        <input type="text" placeholder="Image Header Four" class="form-control" name="image_header_4" value="{{ old('image_header_4', $slider->image_header_4) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title Four</label>
                                        <input type="text" placeholder="Image Title Four" class="form-control" name="image_title_4" value="{{ old('image_title_4', $slider->image_title_4) }}">
                                    </div>
                                </div>

                                @for ($i = 1; $i <= 4; $i++)
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Slider Image {{ $i }}</label>
                                            <input type="file" class="form-control" name="image_{{ $i }}" onchange="previewImage(event, 'previewImage{{ $i }}')">
                                            <img id="previewImage{{ $i }}"
                                                 src="{{ $slider->{'image_' . $i} ? asset($slider->{'image_' . $i}) : '#' }}"
                                                 alt="Slider Image {{ $i }}"
                                                 style="display: {{ $slider->{'image_' . $i} ? 'block' : 'none' }}; max-height: 200px; margin-top: 10px;">
                                        </div>
                                    </div>
                                @endfor

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Preview Image Function
    function previewImage(event, previewId) {
        const input = event.target;
        const file = input.files[0];
        const preview = document.getElementById(previewId);

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
</script>

@endsection
