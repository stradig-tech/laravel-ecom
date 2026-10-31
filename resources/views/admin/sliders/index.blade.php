@extends('layouts.admin')

@section('title', 'Hero Sliders Management - Larkon Admin')
@section('page_title', 'HERO SLIDERS MANAGEMENT')

@section('content')
<div style="display: flex; flex-direction: column; gap: 24px;">

    <!-- Top Action Bar & Filter Bar -->
    <div class="larkon-card" style="padding: 18px 24px; margin-bottom: 0;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <div style="display: flex; align-items: center; gap: 14px;">
                <div class="header-search-bar" style="width: 260px;">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search banner sliders...">
                </div>
                <select class="form-select" style="width: 150px; height: 38px;">
                    <option value="">All Status</option>
                    <option value="active" selected>Active Only</option>
                    <option value="draft">Draft Only</option>
                </select>
            </div>

            <a href="{{ route('admin.sliders.create') }}" class="btn-larkon btn-primary-larkon">
                <i class="fa-solid fa-cloud-arrow-up"></i> + Add New Slider Photo
            </a>
        </div>
    </div>

    <!-- Sliders List Grid -->
    <div class="grid-3-col">
        @foreach($sliders as $slider)
        <div class="larkon-card" style="margin-bottom: 0; padding: 0; overflow: hidden; position: relative; display: flex; flex-direction: column; height: 100%;">
            
            <!-- Banner Image Preview Thumbnail -->
            <div style="width: 100%; height: 160px; position: relative; overflow: hidden; background: #0f172a;">
                <img src="{{ $slider['image'] }}" alt="{{ $slider['title'] }}" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.85);">
                
                <span class="badge-larkon badge-orange" style="position: absolute; top: 14px; left: 14px; font-size: 11px;">
                    {{ $slider['tag'] }}
                </span>

                <span class="badge-larkon {{ $slider['status'] == 'Active' ? 'badge-success' : 'badge-warning' }}" style="position: absolute; top: 14px; right: 14px; font-size: 11px;">
                    <i class="fa-solid fa-circle" style="font-size: 7px; margin-right: 4px;"></i> {{ $slider['status'] }}
                </span>
            </div>

            <!-- Content Details -->
            <div style="padding: 20px; flex: 1; display: flex; flex-direction: column;">
                <div style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 4px;">Slide #{{ $slider['order'] }}</div>
                <h3 style="font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 8px; line-height: 1.3;">
                    {{ $slider['title'] }}
                </h3>
                <p style="font-size: 13px; color: #64748b; line-height: 1.5; margin-bottom: 16px; flex: 1;">
                    {{ $slider['subtitle'] }}
                </p>

                <div style="background: #f8fafc; border-radius: 8px; padding: 10px 14px; margin-bottom: 16px; border: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center; font-size: 12px;">
                    <div><i class="fa-solid fa-link" style="color: #ff5e2b; margin-right: 6px;"></i> CTA: <strong>{{ $slider['button_text'] }}</strong></div>
                    <a href="{{ $slider['button_url'] }}" target="_blank" style="color: #0284c7; font-weight: 600;">Test Link <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 10px;"></i></a>
                </div>

                <!-- Footer Performance & Actions -->
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 14px; margin-top: auto;">
                    <div style="display: flex; gap: 14px; font-size: 12px; color: #64748b;">
                        <span><i class="fa-regular fa-eye" style="color: #94a3b8;"></i> {{ $slider['views'] }} views</span>
                        <span><i class="fa-solid fa-arrow-pointer" style="color: #94a3b8;"></i> {{ $slider['clicks'] }} clicks</span>
                    </div>

                    <div style="display: flex; gap: 6px;">
                        <a href="{{ route('admin.sliders.edit', $slider['id']) }}" class="action-btn" title="Edit Slider">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <button class="action-btn btn-delete" title="Delete Slider" onclick="alert('Slider item deleted successfully')">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>

</div>
@endsection
