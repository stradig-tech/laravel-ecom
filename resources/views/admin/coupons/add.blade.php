@extends('layouts.admin')

@section('title', 'Coupons Add - Larkon Admin')
@section('page_title', 'COUPONS ADD')

@section('content')
<div class="grid-2-col">
    <!-- Left Column: Status & Date Schedule -->
    <div>
        <!-- Coupon Status Card -->
        <div class="larkon-card">
            <div class="larkon-card-header">
                <h5 class="card-title">Coupon Status</h5>
            </div>
            <div class="larkon-card-body">
                <div class="larkon-radio-group">
                    <label class="larkon-radio-option">
                        <input type="radio" name="coupon_status" value="active" checked> Active
                    </label>
                    <label class="larkon-radio-option">
                        <input type="radio" name="coupon_status" value="inactive"> In Active
                    </label>
                    <label class="larkon-radio-option">
                        <input type="radio" name="coupon_status" value="future"> Future Plan
                    </label>
                </div>
            </div>
        </div>

        <!-- Date Schedule Card -->
        <div class="larkon-card">
            <div class="larkon-card-header">
                <h5 class="card-title">Date Schedule</h5>
            </div>
            <div class="larkon-card-body">
                <div class="form-group">
                    <label class="form-label">Start Date</label>
                    <input type="text" class="form-control" placeholder="dd-mm-yyyy" onfocus="(this.type='date')" onblur="(this.type='text')">
                </div>
                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">End Date</label>
                    <input type="text" class="form-control" placeholder="dd-mm-yyyy" onfocus="(this.type='date')" onblur="(this.type='text')">
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column: Coupon Information -->
    <div>
        <div class="larkon-card">
            <div class="larkon-card-header">
                <h5 class="card-title">Coupon Information</h5>
            </div>
            <div class="larkon-card-body">
                <form action="#" method="POST">
                    @csrf
                    <!-- Row 1: Code & Categories -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-group">
                        <div>
                            <label class="form-label">Coupons Code</label>
                            <input type="text" class="form-control" placeholder="Code enter">
                        </div>
                        <div>
                            <label class="form-label">Discount Products</label>
                            <select class="form-select">
                                <option value="" selected disabled>Choose a categories</option>
                                <option value="fashion">Fashion</option>
                                <option value="handbag">Hand Bag</option>
                                <option value="shoes">Shoes</option>
                                <option value="electronics">Electronics</option>
                            </select>
                        </div>
                    </div>

                    <!-- Row 2: Country & Limits -->
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-group">
                        <div>
                            <label class="form-label">Discount Country</label>
                            <select class="form-select">
                                <option value="" selected disabled>Choose a country</option>
                                <option value="usa">United States</option>
                                <option value="canada">Canada</option>
                                <option value="germany">Germany</option>
                                <option value="uk">United Kingdom</option>
                            </select>
                        </div>
                        <div>
                            <label class="form-label">Coupons Limits</label>
                            <input type="text" class="form-control" placeholder="limits nu">
                        </div>
                    </div>

                    <!-- Row 3: Coupons Types -->
                    <div class="form-group">
                        <label class="form-label">Coupons Types</label>
                        <div class="larkon-radio-group">
                            <label class="larkon-radio-option">
                                <input type="radio" name="coupon_type" value="free_shipping" checked> Free Shipping
                            </label>
                            <label class="larkon-radio-option">
                                <input type="radio" name="coupon_type" value="percentage"> Percentage
                            </label>
                            <label class="larkon-radio-option">
                                <input type="radio" name="coupon_type" value="fixed_amount"> Fixed Amount
                            </label>
                        </div>
                    </div>

                    <!-- Row 4: Discount Value -->
                    <div class="form-group" style="margin-bottom: 24px;">
                        <label class="form-label">Discount Value</label>
                        <input type="text" class="form-control" placeholder="value enter">
                    </div>

                    <!-- Create Coupon Button -->
                    <div>
                        <button type="submit" class="btn-larkon btn-primary-larkon" style="padding: 10px 24px;">
                            Create Coupon
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
