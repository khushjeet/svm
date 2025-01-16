<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $aboutSection->title ?? '') }}">
</div>

<div class="form-group">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $aboutSection->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label>Button Text</label>
    <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $aboutSection->button_text ?? '') }}">
</div>

<div class="form-group">
    <label>Button Link</label>
    <input type="url" name="button_link" class="form-control" value="{{ old('button_link', $aboutSection->button_link ?? '') }}">
</div>

<div class="form-group">
    <label>CEO Name</label>
    <input type="text" name="ceo_name" class="form-control" value="{{ old('ceo_name', $aboutSection->ceo_name ?? '') }}">
</div>

<div class="form-group">
    <label>CEO Title</label>
    <input type="text" name="ceo_title" class="form-control" value="{{ old('ceo_title', $aboutSection->ceo_title ?? '') }}">
</div>

<div class="form-group">
    <label>CEO Image</label>
    <input type="file" name="ceo_image" class="form-control" onchange="previewImage(this, 'ceo-preview')">
    <div id="ceo-preview" class="mt-3">
        @if (!empty($aboutSection->ceo_image))
            <img src="{{ asset('uploads/' . $aboutSection->ceo_image) }}" style="width: 100px; height: 100px; object-fit: cover;" class="rounded border">
        @endif
    </div>
</div>

<div class="form-group">
    <label>Image (1 of 3)</label>
    <input type="file" name="image_1" class="form-control" accept="image/*" onchange="previewImage(this, 'image1-preview')">
    <div id="image1-preview" class="mt-3">
        @if (!empty($aboutSection->image_1))
            <img src="{{ asset('uploads/' . $aboutSection->image_1) }}" style="width: 100px; height: 100px; object-fit: cover;" class="rounded border">
        @endif
    </div>
</div>



<div class="form-group">
    <label>Image (2 of 3)</label>
    <input type="file" name="image_2" class="form-control" accept="image/*" onchange="previewImage(this, 'image2-preview')">
    <div id="image2-preview" class="mt-3">
        @if (!empty($aboutSection->image_2))
            <img src="{{ asset('uploads/' . $aboutSection->image_2) }}" style="width: 100px; height: 100px; object-fit: cover;" class="rounded border">
        @endif
    </div>
</div>




<div class="form-group">
    <label>Image (3 of 3)</label>
    <input type="file" name="image_3" class="form-control" accept="image/*" onchange="previewImage(this, 'image3-preview')">
    <div id="image3-preview" class="mt-3">
        @if (!empty($aboutSection->image_3))
            <img src="{{ asset('uploads/' . $aboutSection->image_3) }}" style="width: 100px; height: 100px; object-fit: cover;" class="rounded border">
        @endif
    </div>
</div>

<!-- JavaScript for Image Preview -->
<script>
    function previewImage(input, previewContainerId) {
        const previewContainer = document.getElementById(previewContainerId);
        previewContainer.innerHTML = ''; // Clear previous content

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100px';
                img.style.height = '100px';
                img.style.objectFit = 'cover';
                img.className = 'rounded border';
                previewContainer.appendChild(img);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
