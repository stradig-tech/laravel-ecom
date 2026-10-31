@extends('layouts.admin')

@section('title', 'Seller Edit - Larkon Admin')
@section('page_title', 'SELLER EDIT')

@section('content')
<div class="grid-2-col">
    <!-- Left Column: Seller Preview Profile Card -->
    <div>
        <div class="seller-profile-card">
            <div class="seller-info-badge-icon" title="Seller Information">
                <i class="fa-solid fa-circle-info"></i>
            </div>

            <!-- Brand Logo Box -->
            <div class="seller-brand-logo-wrapper">
                <div class="seller-brand-logo-text">ZARA</div>
            </div>

            <!-- Brand Title & Details -->
            <div style="margin-bottom: 4px;">
                <span class="seller-brand-name">
                    {{ $seller['name'] }}
                    <span class="seller-brand-cat">({{ $seller['category'] }})</span>
                </span>
            </div>
            <a href="https://{{ $seller['website'] }}" target="_blank" class="seller-brand-url">{{ $seller['website'] }}</a>

            <!-- Rating Row -->
            <div class="seller-rating-row">
                <i class="fa-solid fa-star"></i>
                <span style="font-weight: 700; color: #1e293b;">{{ $seller['rating'] }}</span>
                <span style="color: #64748b;">{{ $seller['reviews_count'] }}</span>
            </div>

            <!-- Contact Details -->
            <ul class="seller-contact-list">
                <li class="seller-contact-item">
                    <span class="seller-contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                    <span>{{ $seller['address'] }}</span>
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
                    <span>Fashion</span>
                    <span class="trend">
                        {{ $seller['revenue_progress'] }}
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
        </div>
    </div>

    <!-- Right Column: Add Brand Logo & Seller Information -->
    <div>
        <!-- Add Brand Logo Card -->
        <div class="larkon-card">
            <div class="larkon-card-header">
                <h5 class="card-title">Add Brand Logo</h5>
            </div>
            <div class="larkon-card-body">
                <div class="larkon-dropzone">
                    <div class="dropzone-icon">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>
                    <div class="dropzone-text">
                        Drop your images here, or <span>click to browse</span>
                    </div>
                    <div class="dropzone-hint">
                        1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                    </div>
                </div>
            </div>
        </div>

        <!-- Seller Information Card -->
        <div class="larkon-card">
            <div class="larkon-card-header">
                <h5 class="card-title">Seller Information</h5>
            </div>
            <div class="larkon-card-body">
                <form action="#" method="POST">
                    @csrf
                    <!-- Row 1: Brand Title & Product Categories -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-group">
                        <div>
                            <label class="form-label">Brand Title</label>
                            <input type="text" class="form-control" value="{{ $seller['name'] }}">
                        </div>
                        <div>
                            <label class="form-label">Product Categories</label>
                            <select class="form-select">
                                <option value="Fashion" selected>Fashion</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Footwear">Footwear</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 2: Brand Link & Location -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-group" style="margin-bottom: 0;">
                        <div>
                            <label class="form-label">Brand Link</label>
                            <input type="text" class="form-control" value="{{ $seller['website'] }}">
                        </div>
                        <div>
                            <label class="form-label">Location</label>
                            <div class="input-icon-group">
                                <i class="fa-solid fa-location-dot"></i>
                                <input type="text" class="form-control" value="{{ $seller['address'] }}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
