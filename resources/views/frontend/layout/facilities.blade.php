<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">School Facilities</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>

        <!-- Use flexbox to center items dynamically -->
        <div class="d-flex flex-wrap justify-content-center g-4">
            @foreach (\App\Models\Facility::all() as $facility)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration * 2 }}s">
                <div class="facility-item text-center">
                    <div class="facility-icon {{ $facility->color_class }} text-white d-flex align-items-center justify-content-center">
                        <img src="{{ asset('uploads/' . $facility->icon) }}" alt="{{ $facility->name }}" class="img-fluid" style="max-width: 50px;">
                    </div>
                    <div class="facility-text p-3 {{ $facility->color_class }} text-white">
                        <h3 class="mb-3">{{ $facility->name }}</h3>
                        <p class="mb-0" style="color: blue;">{{ $facility->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
