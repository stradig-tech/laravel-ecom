@extends('layouts.admin')

@section('title', 'Create Product - Larkon Admin')
@section('page_title', 'CREATE PRODUCT')

@section('content')
<div style="display: flex; gap: 24px; align-items: flex-start; flex-wrap: wrap;">
    <!-- Left Column: Product Preview Card -->
    <div style="width: 320px; flex-shrink: 0;">
        <div class="larkon-card" style="padding: 20px;">
            <div style="background: #eef2f6; border-radius: 12px; height: 260px; display: flex; align-items: center; justify-content: center; overflow: hidden; margin-bottom: 16px;">
                <img src="{{ asset('images/products/black_tshirt.png') }}" alt="Men Black Slim Fit T-shirt" style="max-width: 80%; max-height: 80%; object-fit: contain;">
            </div>

            <h3 style="font-size: 15px; font-weight: 700; color: #1e293b; margin-bottom: 2px;">Men Black Slim Fit T-shirt</h3>
            <div style="font-size: 12px; color: #94a3b8; margin-bottom: 12px;">(Fashion)</div>

            <div style="font-size: 13px; font-weight: 600; color: #64748b; margin-bottom: 4px;">Price :</div>
            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 16px;">
                <span style="font-size: 14px; text-decoration: line-through; color: #94a3b8;">$100</span>
                <span style="font-size: 18px; font-weight: 700; color: #1e293b;">$80</span>
                <span style="font-size: 11px; color: #94a3b8;">(30% Off)</span>
            </div>

            <div style="font-size: 13px; font-weight: 600; color: #64748b; margin-bottom: 8px;">Size :</div>
            <div class="size-chips" style="margin-bottom: 16px;">
                <span class="size-chip">S</span>
                <span class="size-chip active">M</span>
                <span class="size-chip">XL</span>
                <span class="size-chip">XXL</span>
            </div>

            <div style="font-size: 13px; font-weight: 600; color: #64748b; margin-bottom: 8px;">Colors :</div>
            <div class="color-chips" style="margin-bottom: 24px;">
                <span class="color-chip" style="background-color: #1e293b;"></span>
                <span class="color-chip" style="background-color: #f59e0b;"></span>
                <span class="color-chip" style="background-color: #f1f5f9; border: 1px solid #cbd5e1;"></span>
                <span class="color-chip" style="background-color: #ef4444;"></span>
            </div>

            <div style="display: flex; gap: 10px;">
                <button class="btn-larkon btn-light-larkon" style="flex: 1;">Create Product</button>
                <button class="btn-larkon btn-primary-larkon" style="flex: 1;">Cancel</button>
            </div>
        </div>
    </div>

    <!-- Right Column: Product Form Fields -->
    <div style="flex: 1; min-width: 500px;">
        <!-- Card 1: Add Product Photo -->
        <div class="larkon-card">
            <div class="larkon-card-header">
                <h4 class="card-title">Add Product Photo</h4>
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

        <!-- Card 2: Product Information -->
        <div class="larkon-card">
            <div class="larkon-card-header">
                <h4 class="card-title">Product Information</h4>
            </div>
            <div class="larkon-card-body">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-group">
                    <div>
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" placeholder="Items Name">
                    </div>
                    <div>
                        <label class="form-label">Product Categories</label>
                        <select class="form-select">
                            <option selected disabled>Choose a categories</option>
                            <option>Fashion</option>
                            <option>Electronics</option>
                            <option>Hand Bag</option>
                            <option>Shoes</option>
                        </select>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;" class="form-group">
                    <div>
                        <label class="form-label">Brand</label>
                        <input type="text" class="form-control" placeholder="Brand Name">
                    </div>
                    <div>
                        <label class="form-label">Weight</label>
                        <input type="text" class="form-control" placeholder="In gm & kg">
                    </div>
                    <div>
                        <label class="form-label">Gender</label>
                        <select class="form-select">
                            <option selected disabled>Select Gender</option>
                            <option>Men</option>
                            <option>Women</option>
                            <option>Unisex</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Size :</label>
                    <div class="size-chips">
                        <span class="size-chip">XS</span>
                        <span class="size-chip">S</span>
                        <span class="size-chip active">M</span>
                        <span class="size-chip">XL</span>
                        <span class="size-chip">XXL</span>
                        <span class="size-chip">3XL</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Colors :</label>
                    <div class="color-chips">
                        <span class="color-chip" style="background-color: #1e293b;"></span>
                        <span class="color-chip" style="background-color: #f59e0b;"></span>
                        <span class="color-chip" style="background-color: #cbd5e1;"></span>
                        <span class="color-chip" style="background-color: #f97316;"></span>
                        <span class="color-chip" style="background-color: #22c55e;"></span>
                        <span class="color-chip" style="background-color: #ef4444;"></span>
                        <span class="color-chip" style="background-color: #14b8a6;"></span>
                        <span class="color-chip" style="background-color: #475569;"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="3" placeholder="Short description of product..."></textarea>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;" class="form-group">
                    <div>
                        <label class="form-label">Tag Number</label>
                        <input type="text" class="form-control" placeholder="#******">
                    </div>
                    <div>
                        <label class="form-label">Stock</label>
                        <input type="text" class="form-control" placeholder="Quantity">
                    </div>
                    <div>
                        <label class="form-label">Tag</label>
                        <div style="display: flex; align-items: center; gap: 6px; padding: 4px 10px; border: 1px solid #e2e8f0; border-radius: 8px; min-height: 42px;">
                            <span style="background: #ff5e2b; color: #fff; font-size: 11px; padding: 3px 8px; border-radius: 4px; display: inline-flex; align-items: center; gap: 4px;">
                                Fashion <i class="fa-solid fa-xmark" style="cursor: pointer;"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3: Pricing Details -->
        <div class="larkon-card">
            <div class="larkon-card-header">
                <h4 class="card-title">Pricing Details</h4>
            </div>
            <div class="larkon-card-body">
                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                    <div>
                        <label class="form-label">Price</label>
                        <div style="position: relative;">
                            <span style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #64748b; font-weight: 600;">$</span>
                            <input type="text" class="form-control" style="padding-left: 32px;" placeholder="000">
                        </div>
                    </div>
                    <div>
                        <label class="form-label">Discount</label>
                        <div style="position: relative;">
                            <span style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #64748b; font-weight: 600;"><i class="fa-solid fa-percent"></i></span>
                            <input type="text" class="form-control" style="padding-left: 32px;" placeholder="000">
                        </div>
                    </div>
                    <div>
                        <label class="form-label">Tex</label>
                        <div style="position: relative;">
                            <span style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #64748b;"><i class="fa-solid fa-file-lines"></i></span>
                            <input type="text" class="form-control" style="padding-left: 32px;" placeholder="000">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
