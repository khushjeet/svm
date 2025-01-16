<div class="administrative-container">
    <div class="administrative-heading text-center">
        <h1>Administrative</h1>
        <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
    </div>
    <div class="administrative-row d-flex justify-content-center flex-wrap">
        @foreach (\App\Models\Admistrative::all() as $admistrative)
        <div class="administrative-card text-center m-3" style="max-width: 300px; max-height: 550px;">
            <img src="{{ asset('uploads/' . $admistrative->image) }}" alt="{{ $admistrative->name }}"
                class="img-fluid"
                style="border-radius: 8px; height: 380px; object-fit: cover;">
            <h3 class="mt-3">{{ $admistrative->desination }}</h3>
            <h4>{{ $admistrative->name }}</h4>
        </div>
        @endforeach
    </div>
</div>
