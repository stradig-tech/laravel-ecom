@extends('layouts.admin')

@section('title', 'Seller Details - Larkon Admin')
@section('page_title', 'SELLER DETAILS')

@push('styles')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush

@section('content')
<div style="display: flex; flex-direction: column; gap: 24px;">

    <!-- Top Seller Profile Banner Card -->
    <div class="larkon-card" style="padding: 24px; margin-bottom: 0;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 20px;">
            <div style="display: flex; gap: 20px; align-items: center;">
                <div class="seller-brand-logo-wrapper" style="width: 80px; height: 80px; font-size: 20px; background: {{ $seller['badge_color'] ?? '#ff5e2b' }}; border-radius: 16px;">
                    <div class="seller-brand-logo-text">{{ $seller['short_name'] ?? 'SELLER' }}</div>
                </div>
                <div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 6px;">
                        <h3 style="font-size: 22px; font-weight: 800; color: #1e293b; margin: 0;">{{ $seller['name'] }}</h3>
                        <span class="badge-larkon badge-success"><i class="fa-solid fa-check" style="font-size: 10px;"></i> Verified Seller</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 16px; font-size: 13.5px; color: #64748b; flex-wrap: wrap;">
                        <span><i class="fa-solid fa-layer-group" style="color: #ff5e2b; margin-right: 6px;"></i> {{ $seller['category'] }}</span>
                        <span><i class="fa-solid fa-globe" style="color: #3b82f6; margin-right: 6px;"></i> <a href="https://{{ $seller['website'] }}" target="_blank" style="color: #3b82f6; text-decoration: none;">{{ $seller['website'] }}</a></span>
                        <span><i class="fa-solid fa-calendar-day" style="color: #10b981; margin-right: 6px;"></i> Member since {{ $seller['joined_date'] ?? '2022' }}</span>
                    </div>
                </div>
            </div>

            <div style="display: flex; gap: 10px; align-items: center;">
                <a href="{{ route('admin.sellers.edit', $seller['id']) }}" class="btn-larkon" style="background: #fff3ec; color: #ff5e2b; text-decoration: none; padding: 10px 18px; font-size: 13px;">
                    <i class="fa-regular fa-pen-to-square"></i> Edit Profile
                </a>
                <a href="{{ route('admin.sellers.index') }}" class="btn-larkon btn-light-larkon" style="text-decoration: none; padding: 10px 18px; font-size: 13px;">
                    <i class="fa-solid fa-arrow-left"></i> Back to Sellers
                </a>
            </div>
        </div>
    </div>

    <!-- 4 Stats Metric Cards -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
            <div style="font-size: 12.5px; font-weight: 600; color: #64748b;">Total Revenue</div>
            <div style="font-size: 24px; font-weight: 800; color: #1e293b; margin: 6px 0;">${{ $seller['revenue_progress'] }}</div>
            <div style="font-size: 12px; color: #10b981; font-weight: 600;"><i class="fa-solid fa-arrow-trend-up"></i> +14.2% this month</div>
        </div>

        <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
            <div style="font-size: 12.5px; font-weight: 600; color: #64748b;">Item Stock</div>
            <div style="font-size: 24px; font-weight: 800; color: #1e293b; margin: 6px 0;">{{ $seller['item_stock'] }}</div>
            <div style="font-size: 12px; color: #64748b;">Across 42 active SKUs</div>
        </div>

        <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
            <div style="font-size: 12.5px; font-weight: 600; color: #64748b;">Total Sells</div>
            <div style="font-size: 24px; font-weight: 800; color: #1e293b; margin: 6px 0;">{{ $seller['sells'] }}</div>
            <div style="font-size: 12px; color: #10b981; font-weight: 600;"><i class="fa-solid fa-caret-up"></i> +8.5% new orders</div>
        </div>

        <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
            <div style="font-size: 12.5px; font-weight: 600; color: #64748b;">Store Rating</div>
            <div style="font-size: 24px; font-weight: 800; color: #1e293b; margin: 6px 0; display: flex; align-items: center; gap: 8px;">
                {{ $seller['rating'] }} <i class="fa-solid fa-star" style="color: #f59e0b; font-size: 18px;"></i>
            </div>
            <div style="font-size: 12px; color: #64748b;">Based on {{ $seller['reviews_count'] }} reviews</div>
        </div>
    </div>

    <!-- Main Content Grid (Left Contact & Info / Right Products & Chart) -->
    <div style="display: grid; grid-template-columns: 320px 1fr; gap: 24px;">

        <!-- Left: Seller Contact & Store Specs -->
        <div style="display: flex; flex-direction: column; gap: 24px;">
            <div class="larkon-card" style="margin-bottom: 0;">
                <div class="larkon-card-header">
                    <h5 class="card-title">Contact & Location</h5>
                </div>
                <div class="larkon-card-body">
                    <ul class="seller-contact-list" style="margin: 0;">
                        <li class="seller-contact-item" style="margin-bottom: 14px;">
                            <span class="seller-contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                            <div>
                                <div style="font-size: 11px; color: #94a3b8; font-weight: 600;">ADDRESS</div>
                                <div style="font-size: 13px; color: #334155; font-weight: 500;">{{ $seller['address'] }}</div>
                            </div>
                        </li>
                        <li class="seller-contact-item" style="margin-bottom: 14px;">
                            <span class="seller-contact-icon"><i class="fa-regular fa-envelope"></i></span>
                            <div>
                                <div style="font-size: 11px; color: #94a3b8; font-weight: 600;">EMAIL ADDRESS</div>
                                <div style="font-size: 13px; color: #334155; font-weight: 500;">{{ $seller['email'] }}</div>
                            </div>
                        </li>
                        <li class="seller-contact-item">
                            <span class="seller-contact-icon"><i class="fa-solid fa-phone"></i></span>
                            <div>
                                <div style="font-size: 11px; color: #94a3b8; font-weight: 600;">PHONE NUMBER</div>
                                <div style="font-size: 13px; color: #334155; font-weight: 500;">{{ $seller['phone'] }}</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Performance Chart Card -->
            <div class="larkon-card" style="margin-bottom: 0;">
                <div class="larkon-card-header">
                    <h5 class="card-title">Monthly Revenue</h5>
                </div>
                <div class="larkon-card-body">
                    <div id="sellerRevenueChart" style="min-height: 200px;"></div>
                </div>
            </div>
        </div>

        <!-- Right: Seller Top Products Table -->
        <div class="larkon-card" style="margin-bottom: 0;">
            <div class="larkon-card-header">
                <h5 class="card-title">Seller's Top Selling Products</h5>
                <a href="{{ route('admin.products.index') }}" class="btn-larkon btn-light-larkon" style="font-size: 11.5px; padding: 4px 10px;">View All Products</a>
            </div>
            <div class="larkon-card-body" style="padding: 0;">
                <div class="table-responsive">
                    <table class="larkon-table">
                        <thead>
                            <tr>
                                <th>Product Info</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Total Revenue</th>
                                <th>Rating</th>
                                <th style="text-align: right;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sellerProducts as $prod)
                            <tr>
                                <td>
                                    <div style="display: flex; align-items: center; gap: 12px;">
                                        <div style="width: 42px; height: 42px; background: #f8fafc; border-radius: 8px; display: flex; align-items: center; justify-content: center; overflow: hidden; border: 1px solid #f1f5f9;">
                                            <img src="{{ $prod['image'] }}" alt="{{ $prod['name'] }}" style="max-width: 85%; max-height: 85%; object-fit: contain;">
                                        </div>
                                        <div style="font-weight: 700; color: #1e293b; font-size: 13.5px;">{{ $prod['name'] }}</div>
                                    </div>
                                </td>
                                <td><span class="badge-larkon" style="background: #f1f5f9; color: #475569;">{{ $prod['category'] }}</span></td>
                                <td style="font-weight: 700; color: #1e293b;">{{ $prod['price'] }}</td>
                                <td style="color: #64748b;">{{ $prod['stock'] }} units</td>
                                <td style="font-weight: 700; color: #10b981;">{{ $prod['revenue'] }}</td>
                                <td>
                                    <span style="font-weight: 700; color: #f59e0b;"><i class="fa-solid fa-star"></i> {{ $prod['rating'] }}</span>
                                </td>
                                <td style="text-align: right;">
                                    <a href="{{ route('admin.products.show', $prod['id']) }}" class="action-btn" title="View Product"><i class="fa-regular fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            series: [{
                name: 'Sales ($)',
                data: [440, 550, 570, 560, 610, 580, 630, 600, 660, 720, 810, 950]
            }],
            chart: {
                type: 'bar',
                height: 200,
                toolbar: { show: false }
            },
            plotOptions: {
                bar: { borderRadius: 4, columnWidth: '40%' }
            },
            colors: ['#ff5e2b'],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }
        };
        var chart = new ApexCharts(document.querySelector("#sellerRevenueChart"), options);
        chart.render();
    });
</script>
@endpush
