@extends('layouts.app')

@section('content_one')

    <!--**********************************
                Content body start
            ***********************************-->
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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card-header">
                            <h5 class="card-title">Slider Info</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('sliderbar.sliderbar_store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Image Header -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Image Header One</label>
                                            <input type="text" class="form-control" name="image_header_1" value="{{ old('slider_image_header') }}">
                                        </div>
                                    </div>

                                    <!-- Image Title -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Image Title One</label>
                                            <input type="text" class="form-control" name="image_title_1" value="{{ old('slider_image_title') }}">
                                        </div>
                                    </div>

                                     <!-- Image Header -->
                                     <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Image Header Two</label>
                                            <input type="text" class="form-control" name="image_header_2" value="{{ old('slider_image_header') }}">
                                        </div>
                                    </div>

                                    <!-- Image Title -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Image Title Two</label>
                                            <input type="text" class="form-control" name="image_title_2" value="{{ old('slider_image_title') }}">
                                        </div>
                                    </div>

                                     <!-- Image Header -->
                                     <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Image Header Three</label>
                                            <input type="text" class="form-control" name="image_header_3" value="{{ old('slider_image_header') }}">
                                        </div>
                                    </div>

                                    <!-- Image Title -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Image Title Three</label>
                                            <input type="text" class="form-control" name="image_title_3" value="{{ old('slider_image_title') }}">
                                        </div>
                                    </div>

                                     <!-- Image Header -->
                                     <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Image Header Four</label>
                                            <input type="text" class="form-control" name="image_header_4" value="{{ old('slider_image_header') }}">
                                        </div>
                                    </div>

                                    <!-- Image Title -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Image Title Four</label>
                                            <input type="text" class="form-control" name="image_title_4" value="{{ old('slider_image_title') }}">
                                        </div>
                                    </div>

                                    <!-- Slider Image 1 -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Slider Image One</label>
                                            <input type="file" class="form-control" name="image_1" id="sliderImageOne" onchange="previewImage(event, 'previewOne')">
                                            <img id="previewOne" src="#" alt="Slider Image One" style="display: none; max-height: 200px; margin-top: 10px;">
                                        </div>
                                    </div>

                                    <!-- Slider Image 2 -->
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Slider Image Two</label>
                                            <input type="file" class="form-control" name="image_2" id="sliderImageTwo" onchange="previewImage(event, 'previewTwo')">
                                            <img id="previewTwo" src="#" alt="Slider Image Two" style="display: none; max-height: 200px; margin-top: 10px;">
                                        </div>
                                    </div>
                                     <!-- Slider Image 3 -->
                                     <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Slider Image Three</label>
                                            <input type="file" class="form-control" name="image_3" id="sliderImageTwo" onchange="previewImage(event, 'previewTwo')">
                                            <img id="previewTwo" src="#" alt="Slider Image Two" style="display: none; max-height: 200px; margin-top: 10px;">
                                        </div>
                                    </div>
                                     <!-- Slider Image 4 -->
                                     <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Slider Image Four</label>
                                            <input type="file" class="form-control" name="image_4" id="sliderImageTwo" onchange="previewImage(event, 'previewTwo')">
                                            <img id="previewTwo" src="#" alt="Slider Image Two" style="display: none; max-height: 200px; margin-top: 10px;">
                                        </div>
                                    </div>

                                    <!-- Buttons -->
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
    <!--**********************************
                Content body end
            ***********************************-->

    <script>
        // Preview Image Function
        function previewImage(event, previewId) {
            const input = event.target;
            const file = input.files[0];
            const preview = document.getElementById(previewId);

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
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
