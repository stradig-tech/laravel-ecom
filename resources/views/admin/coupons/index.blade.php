@extends('layouts.admin')

@section('title', 'Coupons - Larkon Admin')
@section('page_title', 'COUPONS')

@section('content')
<!-- Top Section: 3 Promo Coupon Banner Cards -->
<div class="grid-3-col" style="margin-bottom: 24px;">
    <!-- Banner Card 1 -->
    <div class="coupon-promo-card peach">
        <div>
            <h4 class="promo-title">4 Coupons</h4>
            <p class="promo-subtitle">Small nice summer coupons pack</p>
            <div class="promo-price">$140.00</div>
            <div class="promo-duration">Duration : 1 Year</div>
        </div>
        <div style="margin-top: 16px; text-align: right;">
            <a href="#" class="btn-pill-orange">Buy Now</a>
        </div>
    </div>

    <!-- Banner Card 2 -->
    <div class="coupon-promo-card teal">
        <div>
            <h4 class="promo-title">8 Coupons</h4>
            <p class="promo-subtitle">Medium nice summer coupons pack</p>
            <div class="promo-price">$235.00</div>
            <div class="promo-duration">Duration : 1 Year</div>
        </div>
        <div style="margin-top: 16px; text-align: right;">
            <a href="#" class="btn-pill-teal">Buy Now</a>
        </div>
    </div>

    <!-- Banner Card 3 -->
    <div class="coupon-promo-card orange-banner">
        <div style="display: flex; gap: 14px; align-items: flex-start;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: #ff5e2b; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
            <div>
                <h4 class="promo-title" style="font-size: 16px; line-height: 1.3;">30% Special discounts for customers</h4>
                <p class="promo-subtitle" style="margin-bottom: 12px;">25 November - 2 December</p>
                <a href="#" class="btn-pill-orange">View Plan</a>
            </div>
        </div>
        <!-- Decorative SVG graphic -->
        <svg class="banner-graphic-bg" viewBox="0 0 100 100" fill="none">
            <circle cx="80" cy="80" r="60" stroke="#ff5e2b" stroke-width="4" stroke-dasharray="6 6" />
            <circle cx="80" cy="80" r="40" stroke="#ff5e2b" stroke-width="3" />
        </svg>
    </div>
</div>

<!-- Bottom Section: All Product List Table -->
<div class="larkon-card">
    <div class="larkon-card-header">
        <h5 class="card-title">All Product List</h5>
        <div>
            <select class="form-select" style="width: auto; height: 34px; padding: 4px 12px; font-size: 12.5px;">
                <option selected>This Month</option>
                <option>Last Month</option>
                <option>This Year</option>
            </select>
        </div>
    </div>
    <div class="larkon-card-body" style="padding: 0;">
        <div class="table-responsive">
            <table class="larkon-table">
                <thead>
                    <tr>
                        <th style="width: 40px; text-align: center;">
                            <input type="checkbox" style="accent-color: #ff5e2b; cursor: pointer;">
                        </th>
                        <th>Product Name & Type</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Code</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th style="text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($coupons as $coupon)
                    <tr>
                        <td style="text-align: center;">
                            <input type="checkbox" style="accent-color: #ff5e2b; cursor: pointer;">
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 14px;">
                                <div style="width: 44px; height: 44px; background: #f8fafc; border-radius: 8px; display: flex; align-items: center; justify-content: center; overflow: hidden; border: 1px solid #f1f5f9;">
                                    <img src="{{ $coupon['image'] }}" alt="{{ $coupon['name'] }}" style="max-width: 80%; max-height: 80%; object-fit: contain;">
                                </div>
                                <div>
                                    <div style="font-weight: 700; color: #1e293b; font-size: 13.5px;">{{ $coupon['name'] }}</div>
                                    <div style="font-size: 12px; color: #64748b;">{{ $coupon['category'] }}</div>
                                </div>
                            </div>
                        </td>
                        <td style="font-weight: 600; color: #475569;">{{ $coupon['price'] }}</td>
                        <td style="font-weight: 600; color: #475569;">{{ $coupon['discount'] }}</td>
                        <td>
                            <span style="font-family: monospace; font-weight: 700; color: #334155; background: #f1f5f9; padding: 4px 8px; border-radius: 4px; letter-spacing: 0.5px;">
                                {{ $coupon['code'] }}
                            </span>
                        </td>
                        <td style="color: #64748b; font-size: 13px;">{{ $coupon['start_date'] }}</td>
                        <td style="color: #64748b; font-size: 13px;">{{ $coupon['end_date'] }}</td>
                        <td>
                            @if($coupon['status'] === 'Active')
                                <span class="badge-larkon badge-success"><i class="fa-solid fa-check" style="font-size: 10px;"></i> Active</span>
                            @else
                                <span class="badge-larkon badge-danger"><i class="fa-solid fa-xmark" style="font-size: 10px;"></i> Expired</span>
                            @endif
                        </td>
                        <td style="text-align: right;">
                            <div style="display: inline-flex; gap: 6px;">
                                <button class="action-btn" title="View"><i class="fa-regular fa-eye"></i></button>
                                <button class="action-btn" title="Edit" style="background: #fff3ec; color: #ff5e2b;"><i class="fa-regular fa-pen-to-square"></i></button>
                                <button class="action-btn btn-delete" title="Delete" style="background: #fef2f2; color: #ef4444;"><i class="fa-regular fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
