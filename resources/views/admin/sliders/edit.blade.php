@extends('layouts.admin')

@section('title', 'Edit Hero Slider - Larkon Admin')
@section('page_title', 'EDIT HERO SLIDER')

@section('content')
<div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 24px;">

    <div style="display: flex; justify-content: space-between; align-items: center;">
        <a href="{{ route('admin.sliders.index') }}" class="btn-larkon btn-secondary-larkon">
            <i class="fa-solid fa-arrow-left"></i> Back to Sliders List
        </a>
        <span class="badge-larkon badge-orange" style="font-size: 12px;">Editing Slide #{{ $slider['order'] }}</span>
    </div>

    <form action="{{ route('admin.sliders.index') }}" method="GET">
        <div class="larkon-card" style="padding: 28px;">
            <h3 style="font-size: 18px; font-weight: 700; color: #1e293b; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 12px;">
                <i class="fa-solid fa-pen-to-square" style="color: #ff5e2b; margin-right: 8px;"></i> Edit Hero Banner Photo & Info
            </h3>

            <!-- Existing Banner Photo Preview -->
            <div style="margin-bottom: 24px;">
                <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 8px; display: block;">
                    Current Hero Banner Photo
                </label>

                <div style="position: relative; border-radius: 10px; overflow: hidden; height: 180px; border: 1px solid #e2e8f0; margin-bottom: 14px; background: #0f172a;">
                    <img id="imagePreview" src="{{ $slider['image'] }}" alt="{{ $slider['title'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>

                <div class="dropzone-area" onclick="document.getElementById('slider_photo_file').click()" style="padding: 20px; text-align: center; border: 2px dashed #cbd5e1; border-radius: 12px; background: #f8fafc; cursor: pointer;">
                    <div style="font-weight: 600; font-size: 14px; color: #1e293b;"><i class="fa-solid fa-cloud-arrow-up" style="color: #ff5e2b; margin-right: 6px;"></i> Click to replace banner photo</div>
                    <input type="file" id="slider_photo_file" style="display: none;" onchange="previewSliderImage(event)">
                </div>
            </div>

            <!-- Slider Form Inputs Grid -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                
                <div style="grid-column: span 2;">
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Banner Title / Headline <span style="color: #ef4444;">*</span>
                    </label>
                    <input type="text" name="title" class="form-control" value="{{ $slider['title'] }}" required>
                </div>

                <div style="grid-column: span 2;">
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Tagline / Subtitle Description
                    </label>
                    <textarea name="subtitle" class="form-control" rows="3">{{ $slider['subtitle'] }}</textarea>
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Promo Tag Badge Text
                    </label>
                    <input type="text" name="tag" class="form-control" value="{{ $slider['tag'] }}">
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        CTA Button Label
                    </label>
                    <input type="text" name="button_text" class="form-control" value="{{ $slider['button_text'] }}">
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        CTA Target URL / Route
                    </label>
                    <input type="text" name="button_url" class="form-control" value="{{ $slider['button_url'] }}">
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Slide Display Order
                    </label>
                    <input type="number" name="order" class="form-control" value="{{ $slider['order'] }}" min="1">
                </div>

                <div>
                    <label style="font-weight: 600; font-size: 14px; color: #334155; margin-bottom: 6px; display: block;">
                        Publication Status
                    </label>
                    <select name="status" class="form-select">
                        <option value="Active" {{ $slider['status'] == 'Active' ? 'selected' : '' }}>Active (Visible on Storefront)</option>
                        <option value="Draft" {{ $slider['status'] == 'Draft' ? 'selected' : '' }}>Draft (Hidden)</option>
                    </select>
                </div>

            </div>

            <!-- Submit Action -->
            <div style="border-top: 1px solid #f1f5f9; padding-top: 20px; display: flex; justify-content: flex-end; gap: 12px;">
                <a href="{{ route('admin.sliders.index') }}" class="btn-larkon btn-secondary-larkon">Cancel</a>
                <button type="submit" class="btn-larkon btn-primary-larkon" onclick="alert('Hero Banner Slider updated successfully!')">
                    <i class="fa-solid fa-check"></i> Update Slider
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
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
