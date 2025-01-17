<div class="container-xxl py-5 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Popular Teachers</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="row justify-content-center g-4">
            @foreach (\App\Models\PopularTeacher::all() as $teacher)
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="{{ $loop->iteration * 0.2 }}s">
                    <div class="team-item position-relative text-center">
                        <img class="img-fluid rounded-circle w-75 mx-auto"
                             src="{{ asset('uploads/' . $teacher->teacher_image) }}"
                             alt="{{ $teacher->name }}">
                        <div class="team-text mt-3">
                            <h3 class="mb-1">{{ $teacher->name }}</h3>
                            <p class="mb-2">{{ $teacher->designation }}</p>
                            <div class="d-flex justify-content-center align-items-center">
                                @if ($teacher->facebook_link)
                                    <a class="btn btn-square btn-primary mx-1" href="{{ $teacher->facebook_link }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                @endif
                                @if ($teacher->twitter_link)
                                    <a class="btn btn-square btn-primary mx-1" href="{{ $teacher->twitter_link }}" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                @endif
                                @if ($teacher->instagram_link)
                                    <a class="btn btn-square btn-primary mx-1" href="{{ $teacher->instagram_link }}" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
