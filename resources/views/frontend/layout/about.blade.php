@php
    $aboutSection = \App\Models\AboutSection::orderBy('id', 'desc')->first();
    $images = $aboutSection ? json_decode($aboutSection->images, true) : [];
@endphp

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                @if($aboutSection)
                    <h1 class="mb-4">{{ $aboutSection->title }}</h1>
                    <p class="mb-4">{{ $aboutSection->description }}</p>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ $aboutSection->button_link }}">{{ $aboutSection->button_text }}</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="{{ asset('uploads/'.$aboutSection->ceo_image) }}" alt="CEO Image" style="width: 45px; height: 45px;">
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">{{ $aboutSection->ceo_name }}</h6>
                                    <small>{{ $aboutSection->ceo_title }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <h1 class="mb-4">No Content Available</h1>
                @endif
            </div>

            <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                <div class="row">
                    @if(!empty($aboutSection->image_1))
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{ asset('uploads/' . $aboutSection->image_1) }}" alt="Image 1">
                        </div>
                        @if(isset($aboutSection->image_2))
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('uploads/' . $aboutSection->image_2) }}" alt="Image 2">
                            </div>
                        @endif
                        @if(isset($aboutSection->image_3))
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('uploads/' . $aboutSection->image_3) }}" alt="Image 3">
                            </div>
                        @endif
                    @else
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{ asset('frontend/img/placeholder.jpg') }}" alt="Placeholder">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
