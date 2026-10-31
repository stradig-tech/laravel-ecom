@extends('layouts.admin')

@section('title', 'Add New Hero Slider Photo - Larkon Admin')
@section('page_title', 'ADD NEW HERO SLIDER PHOTO')

@section('content')
<div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 24px;">

    <div style="display: flex; justify-content: space-between; align-items: center;">
        <a href="{{ route('admin.sliders.index') }}" class="btn-larkon btn-secondary-larkon">
            <i class="fa-solid fa-arrow-left"></i> Back to Sliders List
        </a>
        <span class="badge-larkon badge-orange" style="font-size: 12px;">Storefront Banner Upload</span>
    </div>

    <form action="{{ route('admin.sliders.index') }}" method="GET">
        <div class="larkon-card" style="padding: 28px;">
            <h3 style="font-size: 18px; font-weight: 700; color: #1e293b; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                <i class="fa-solid fa-cloud-arrow-up" style="color: #ff5e2b; margin-right: 8px;"></i> Upload Slider Photo & Info
            </h3>

            <!-- Image Dropzone Area -->
            <div style="margin-bottom: 24px;">
                <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 8px; display: block;">
                    Hero Banner Photo (Recommended: 1200 x 480 px, PNG/JPG)
                </label>

                <div class="dropzone-area" onclick="document.getElementById('slider_photo_file').click()" style="padding: 36px; text-align: center; border: 2px dashed #cbd5e1; border-radius: 12px; background: #f8fafc; cursor: pointer; transition: all 0.2s;">
                    <div style="width: 54px; height: 54px; border-radius: 50%; background: #ffebd9; color: #ff5e2b; display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-size: 22px;">
                        <i class="fa-solid fa-image"></i>
                    </div>
                    <div style="font-weight: 700; font-size: 15px; color: #1e293b; margin-bottom: 4px;">Drop your high-resolution banner photo here, or browse</div>
                    <div style="font-size: 13px; color: #64748b;">Supports PNG, JPG, WEBP files up to 10MB</div>
                    <input type="file" id="slider_photo_file" style="display: none;" onchange="previewSliderImage(event)">
                </div>

                <div id="imagePreviewContainer" style="display: none; margin-top: 14px; position: relative; border-radius: 10px; overflow: hidden; height: 180px; border: 1px solid #e2e8f0;">
                    <img id="imagePreview" src="#" alt="Banner Preview" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>

            <!-- Slider Form Inputs Grid -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                
                <div style="grid-column: span 2;">
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Banner Title / Headline <span style="color: #ef4444;">*</span>
                    </label>
                    <input type="text" name="title" class="form-control" placeholder="e.g. Mega Summer Fashion Collection 2026" required>
                </div>

                <div style="grid-column: span 2;">
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Tagline / Subtitle Description
                    </label>
                    <textarea name="subtitle" class="form-control" rows="3" placeholder="e.g. Upgrade your inventory with top trending apparel and luxury clothing lines."></textarea>
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Promo Tag Badge Text
                    </label>
                    <input type="text" name="tag" class="form-control" placeholder="e.g. HOT DEALS • 50% OFF">
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        CTA Button Label
                    </label>
                    <input type="text" name="button_text" class="form-control" placeholder="e.g. Explore Products">
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        CTA Target URL / Route
                    </label>
                    <input type="text" name="button_url" class="form-control" placeholder="e.g. /admin/products">
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Slide Display Order
                    </label>
                    <input type="number" name="order" class="form-control" value="1" min="1">
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Publication Status
                    </label>
                    <select name="status" class="form-select">
                        <option value="Active" selected>Active (Visible on Storefront)</option>
                        <option value="Draft">Draft (Hidden)</option>
                    </select>
                </div>

            </div>

            <!-- Submit Action -->
            <div style="border-top: 1px solid #f1f5f9; padding-top: 20px; display: flex; justify-content: flex-end; gap: 12px;">
                <a href="{{ route('admin.sliders.index') }}" class="btn-larkon btn-secondary-larkon">Cancel</a>
                <button type="submit" class="btn-larkon btn-primary-larkon" onclick="alert('Hero Banner Slider created & published successfully!')">
                    <i class="fa-solid fa-check"></i> Save & Publish Slider
                </button>
            </div>
        </div>
    </form>

</div>

<script>
    function previewSliderImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').src = e.target.result;
                document.getElementById('imagePreviewContainer').style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
