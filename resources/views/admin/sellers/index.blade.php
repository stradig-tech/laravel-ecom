@extends('layouts.admin')

@section('title', 'Sellers List - Larkon Admin')
@section('page_title', 'SELLERS LIST')

@section('content')
<!-- Filter & Header Actions Row -->
<div class="larkon-card" style="margin-bottom: 24px; padding: 16px 20px;">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
        <div style="display: flex; align-items: center; gap: 14px;">
            <div class="header-search-bar" style="margin: 0; min-width: 260px;">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search sellers...">
            </div>
            <select class="form-select" style="width: auto; height: 38px; padding: 4px 12px; font-size: 13px;">
                <option value="" selected>All Categories</option>
                <option value="Fashion">Fashion</option>
                <option value="Electronics">Electronics</option>
                <option value="Sports">Sports</option>
            </select>
        </div>
        <div>
            <a href="{{ route('admin.sellers.create') }}" class="btn-larkon btn-primary-larkon">
                <i class="fa-solid fa-plus" style="margin-right: 6px;"></i> Add Seller
            </a>
        </div>
    </div>
</div>

<!-- Sellers Grid (3-Column Layout) -->
<div class="grid-3-col">
    @foreach($sellers as $seller)
    <div class="seller-profile-card">
        <div class="seller-info-badge-icon" title="Seller Information">
            <i class="fa-solid fa-circle-info"></i>
        </div>

        <!-- Brand Logo Box -->
        <div class="seller-brand-logo-wrapper" style="background: {{ $seller['badge_color'] ?? '#ff5e2b' }};">
            <div class="seller-brand-logo-text">{{ $seller['short_name'] ?? 'SELLER' }}</div>
        </div>

        <!-- Brand Title & Details -->
        <div style="margin-bottom: 4px;">
            <a href="{{ route('admin.sellers.show', $seller['id']) }}" class="seller-brand-name" style="text-decoration: none;">
                {{ $seller['name'] }}
                <span class="seller-brand-cat">({{ $seller['category'] }})</span>
            </a>
        </div>
        <a href="https://{{ $seller['website'] }}" target="_blank" class="seller-brand-url">{{ $seller['website'] }}</a>

        <!-- Rating Row -->
        <div class="seller-rating-row">
            <i class="fa-solid fa-star"></i>
            <span style="font-weight: 700; color: #1e293b;">{{ $seller['rating'] }}</span>
            <span style="color: #64748b;">({{ $seller['reviews_count'] }})</span>
        </div>

        <!-- Contact Details -->
        <ul class="seller-contact-list">
            <li class="seller-contact-item">
                <span class="seller-contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                <span style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $seller['address'] }}</span>
            </li>
            <li class="seller-contact-item">
                <span class="seller-contact-icon"><i class="fa-regular fa-envelope"></i></span>
                <span>{{ $seller['email'] }}</span>
            </li>
            <li class="seller-contact-item">
                <span class="seller-contact-icon"><i class="fa-solid fa-phone"></i></span>
                <span>{{ $seller['phone'] }}</span>
            </li>
        </ul>

        <!-- Revenue Progress Section -->
        <div class="seller-progress-section">
            <div class="seller-progress-header">
                <span>{{ $seller['category'] }}</span>
                <span class="trend">
                    ${{ $seller['revenue_progress'] }}
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </span>
            </div>
            <div class="seller-progress-bar-track">
                <div class="seller-progress-bar-fill" style="width: 75%;"></div>
            </div>
        </div>

        <!-- 3-Column Stats Footer -->
        <div class="seller-stats-footer">
            <div class="seller-stat-col">
                <div class="seller-stat-num">{{ $seller['item_stock'] }}</div>
                <div class="seller-stat-label">Item Stock</div>
            </div>
            <div class="seller-stat-col">
                <div class="seller-stat-num">{{ $seller['sells'] }}</div>
                <div class="seller-stat-label">Sells</div>
            </div>
            <div class="seller-stat-col">
                <div class="seller-stat-num">{{ $seller['happy_clients'] }}</div>
                <div class="seller-stat-label">Happy Client</div>
            </div>
        </div>

        <!-- Card Actions Bar -->
        <div style="display: flex; gap: 8px; margin-top: 16px; border-top: 1px solid #f1f5f9; padding-top: 14px;">
            <a href="{{ route('admin.sellers.show', $seller['id']) }}" class="btn-larkon btn-light-larkon" style="flex: 1; text-align: center; text-decoration: none; font-size: 12.5px; padding: 6px 10px;">
                <i class="fa-regular fa-eye"></i> Details
            </a>
            <a href="{{ route('admin.sellers.edit', $seller['id']) }}" class="btn-larkon" style="flex: 1; text-align: center; text-decoration: none; font-size: 12.5px; padding: 6px 10px; background: #fff3ec; color: #ff5e2b;">
                <i class="fa-regular fa-pen-to-square"></i> Edit
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection
