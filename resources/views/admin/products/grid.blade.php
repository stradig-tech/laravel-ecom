@extends('layouts.admin')

@section('title', 'Product Grid - Larkon Admin')
@section('page_title', 'PRODUCT GRID')

@section('content')
<div style="display: flex; flex-direction: column; gap: 20px;">

    <!-- Top Filter Header Toolbar -->
    <div class="larkon-card" style="padding: 16px 24px; margin-bottom: 0;">
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
            <div>
                <div style="font-size: 13px; color: #64748b; display: flex; align-items: center; gap: 6px;">
                    <span>Categories</span> <i class="fa-solid fa-chevron-right" style="font-size: 10px;"></i> <strong style="color: #1e293b;">All Product</strong>
                </div>
                <div style="font-size: 12px; color: #94a3b8; margin-top: 2px;">
                    Showing all <strong style="color: #1e293b;">5,786</strong> items results
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 12px;">
                <button class="btn-larkon btn-light-larkon" style="font-size: 13px;">
                    <i class="fa-solid fa-sliders"></i> More Setting
                </button>
                <button class="btn-larkon btn-light-larkon" style="font-size: 13px;">
                    <i class="fa-solid fa-filter"></i> Filters
                </button>
                <a href="{{ route('admin.products.create') }}" class="btn-larkon btn-success-larkon" style="font-size: 13px;">
                    <i class="fa-solid fa-plus"></i> New Product
                </a>
            </div>
        </div>
    </div>

    <!-- Layout: Left Sidebar Filters + Right Products Grid -->
    <div style="display: flex; gap: 24px; align-items: flex-start;">

        <!-- Left Sidebar Filters -->
        <div style="width: 260px; flex-shrink: 0;">
            <div class="larkon-card" style="padding: 20px;">
                <!-- Categories Section -->
                <div style="margin-bottom: 20px;">
                    <div style="font-size: 13.5px; font-weight: 700; color: #1e293b; display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span>Categories</span>
                        <i class="fa-solid fa-chevron-up" style="font-size: 12px; color: #94a3b8;"></i>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label class="custom-checkbox">
                            <input type="checkbox" checked> <span style="font-weight: 600; color: #ff5e2b;">All Categories</span>
                        </label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Fashion Men, Women & Kid's</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Eye Ware & Sunglasses</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Watches</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Electronics Items</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Furniture</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Headphones</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Beauty & Health</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Foot Ware</span></label>
                    </div>
                </div>

                <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 16px 0;">

                <!-- Product Price Section -->
                <div style="margin-bottom: 20px;">
                    <div style="font-size: 13.5px; font-weight: 700; color: #1e293b; display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span>Product Price</span>
                        <i class="fa-solid fa-chevron-up" style="font-size: 12px; color: #94a3b8;"></i>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label class="custom-checkbox"><input type="checkbox" checked> <span>All Price</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Below $200 (145)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>$200 - $500 (1,885)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>$500 - $800 (2,276)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>$800 - $1000 (12,676)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>$1000 - $1100 (13,123)</span></label>
                    </div>

                    <div style="margin-top: 14px;">
                        <div style="font-size: 12px; font-weight: 600; color: #64748b; margin-bottom: 6px;">Custom Price Range :</div>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <input type="text" class="form-control" style="height: 32px; font-size: 12px; padding: 4px 8px;" value="$ 0">
                            <span style="font-size: 12px; color: #94a3b8;">to</span>
                            <input type="text" class="form-control" style="height: 32px; font-size: 12px; padding: 4px 8px;" value="$ 200">
                        </div>
                    </div>
                </div>

                <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 16px 0;">

                <!-- Gender Section -->
                <div style="margin-bottom: 20px;">
                    <div style="font-size: 13.5px; font-weight: 700; color: #1e293b; display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span>Gender</span>
                        <i class="fa-solid fa-chevron-up" style="font-size: 12px; color: #94a3b8;"></i>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label class="custom-checkbox"><input type="checkbox"> <span>Men (1,834)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Women (2,890)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>Kid's (1,231)</span></label>
                    </div>
                </div>

                <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 16px 0;">

                <!-- Size Section -->
                <div>
                    <div style="font-size: 13.5px; font-weight: 700; color: #1e293b; display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span>Size</span>
                        <i class="fa-solid fa-chevron-up" style="font-size: 12px; color: #94a3b8;"></i>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <label class="custom-checkbox"><input type="checkbox"> <span>S (1,437)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>M (2,675)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>L (4,870)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>XL (7,543)</span></label>
                        <label class="custom-checkbox"><input type="checkbox"> <span>XXL (1,099)</span></label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right 4-Column Grid -->
        <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
            @foreach($products as $product)
            <div class="product-grid-card">
                <!-- Image Wrapper -->
                <div class="product-img-wrapper">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                    <button style="position: absolute; top: 10px; right: 10px; width: 28px; height: 28px; border-radius: 50%; background: #ffffff; border: none; box-shadow: 0 2px 6px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; color: #cbd5e1; cursor: pointer;">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>

                <!-- Product Info -->
                <h4 class="product-title">{{ $product['name'] }}</h4>

                <div style="display: flex; align-items: center; gap: 4px; margin-bottom: 8px;">
                    <div class="rating-stars" style="font-size: 11px;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <span style="font-size: 11.5px; font-weight: 700; color: #1e293b;">{{ $product['rating'] }}</span>
                    <span style="font-size: 11px; color: #94a3b8;">({{ $product['reviews'] }} Review)</span>
                </div>

                <div class="product-price-box">
                    <span class="price-current">${{ number_format($product['price'], 0) }}</span>
                    <span class="price-old">${{ number_format($product['old_price'], 0) }}</span>
                    <span class="discount-tag">({{ $product['discount'] }})</span>
                </div>

                <div style="display: flex; gap: 8px; margin-top: 16px;">
                    <button class="btn-larkon btn-light-larkon" style="padding: 6px; font-size: 12px; width: 36px;">
                        <i class="fa-solid fa-ellipsis"></i>
                    </button>
                    <button class="btn-larkon btn-light-larkon" style="flex: 1; padding: 6px 10px; font-size: 12px; font-weight: 600;">
                        <i class="fa-solid fa-cart-shopping"></i> Add To Cart
                    </button>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</div>
@endsection
