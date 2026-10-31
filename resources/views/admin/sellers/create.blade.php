@extends('layouts.admin')

@section('title', 'Seller Add - Larkon Admin')
@section('page_title', 'SELLER ADD')

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
                    ZARA International
                    <span class="seller-brand-cat">(Fashion)</span>
                </span>
            </div>
            <a href="https://www.zarafashion.co" target="_blank" class="seller-brand-url">www.zarafashion.co</a>

            <!-- Rating Row -->
            <div class="seller-rating-row">
                <i class="fa-solid fa-star"></i>
                <span style="font-weight: 700; color: #1e293b;">4.5</span>
                <span style="color: #64748b;">3.5k</span>
            </div>

            <!-- Contact Details -->
            <ul class="seller-contact-list">
                <li class="seller-contact-item">
                    <span class="seller-contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                    <span>4604 , Philli Lane Kiowa IN 47404</span>
                </li>
                <li class="seller-contact-item">
                    <span class="seller-contact-icon"><i class="fa-regular fa-envelope"></i></span>
                    <span>zarafashionworld@dayrep.com</span>
                </li>
                <li class="seller-contact-item">
                    <span class="seller-contact-icon"><i class="fa-solid fa-phone"></i></span>
                    <span>+243 812-801-9335</span>
                </li>
            </ul>

            <!-- Revenue Progress Section -->
            <div class="seller-progress-section">
                <div class="seller-progress-header">
                    <span>Fashion</span>
                    <span class="trend">
                        5200k
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
                    <div class="seller-stat-num">865</div>
                    <div class="seller-stat-label">Item Stock</div>
                </div>
                <div class="seller-stat-col">
                    <div class="seller-stat-num">+4.5K</div>
                    <div class="seller-stat-label">Sells</div>
                </div>
                <div class="seller-stat-col">
                    <div class="seller-stat-num">+2k</div>
                    <div class="seller-stat-label">Happy Client</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column: Add Brand Logo, Seller Information, Product Info & Actions -->
    <div>
        <form action="#" method="POST">
            @csrf
            <!-- Card 1: Add Brand Logo -->
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

            <!-- Card 2: Seller Information -->
            <div class="larkon-card">
                <div class="larkon-card-header">
                    <h5 class="card-title">Seller Information</h5>
                </div>
                <div class="larkon-card-body">
                    <!-- Row 1: Brand Title & Product Categories -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-group">
                        <div>
                            <label class="form-label">Brand Title</label>
                            <input type="text" class="form-control" placeholder="Enter Title">
                        </div>
                        <div>
                            <label class="form-label">Product Categories</label>
                            <select class="form-select">
                                <option value="" selected disabled>Choose a categories</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Footwear">Footwear</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 2: Brand Link & Location -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-group">
                        <div>
                            <label class="form-label">Brand Link</label>
                            <input type="text" class="form-control" placeholder="www.****">
                        </div>
                        <div>
                            <label class="form-label">Location</label>
                            <div class="input-icon-group">
                                <i class="fa-solid fa-location-dot"></i>
                                <input type="text" class="form-control" placeholder="Add Address">
                            </div>
                        </div>
                    </div>

                    <!-- Row 3: Email & Phone Number -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-group">
                        <div>
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Add Email">
                        </div>
                        <div>
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone number">
                        </div>
                    </div>

                    <!-- Row 4: Yearly Revenue Slider -->
                    <div class="form-group" style="margin-bottom: 0;">
                        <label class="form-label">Yearly Revenue</label>
                        <div class="range-slider-wrapper">
                            <div class="range-slider-track-box">
                                <div class="range-slider-fill"></div>
                                <div class="range-slider-thumb" style="left: 25%;"></div>
                            </div>
                            <div class="range-slider-labels">
                                <span>50</span>
                                <span>$ 200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Seller Product Information -->
            <div class="larkon-card">
                <div class="larkon-card-header">
                    <h5 class="card-title">Seller Product Information</h5>
                </div>
                <div class="larkon-card-body">
                    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                        <div>
                            <label class="form-label">Items Stock</label>
                            <input type="text" class="form-control" placeholder="000">
                        </div>
                        <div>
                            <label class="form-label">Product Sells</label>
                            <input type="text" class="form-control" placeholder="000">
                        </div>
                        <div>
                            <label class="form-label">Happy Client</label>
                            <input type="text" class="form-control" placeholder="000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Action Buttons Bar -->
            <div class="form-actions-card">
                <button type="button" class="btn-cancel-gray">Save Change</button>
                <button type="submit" class="btn-larkon btn-primary-larkon" style="padding: 10px 24px;">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection
