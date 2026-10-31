@extends('layouts.admin')

@section('title', 'Product Details - Larkon Admin')
@section('page_title', 'PRODUCT DETAILS')

@section('content')
<div style="display: flex; flex-direction: column; gap: 24px;">

    <!-- Top Card: Product Main Showcase & Meta -->
    <div class="larkon-card" style="padding: 30px;">
        <div style="display: flex; gap: 40px; flex-wrap: wrap;">
            
            <!-- Left Side: Image Gallery -->
            <div style="width: 400px; flex-shrink: 0;">
                <div style="background: #f8fafc; border-radius: 16px; height: 360px; display: flex; align-items: center; justify-content: center; border: 1px solid #e2e8f0; margin-bottom: 16px; position: relative;">
                    <img src="{{ $product['main_image'] }}" id="mainProductImg" alt="{{ $product['name'] }}" style="max-width: 85%; max-height: 85%; object-fit: contain;">
                </div>

                <!-- Thumbnails Row -->
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; margin-bottom: 24px;">
                    @foreach($product['thumbnails'] as $index => $thumb)
                        <div style="height: 70px; background: #f8fafc; border-radius: 10px; border: 1px solid {{ $index === 1 ? '#ff5e2b' : '#e2e8f0' }}; display: flex; align-items: center; justify-content: center; cursor: pointer;" onclick="document.getElementById('mainProductImg').src='{{ $thumb }}'">
                            <img src="{{ $thumb }}" style="max-width: 80%; max-height: 80%; object-fit: contain;">
                        </div>
                    @endforeach
                </div>

                <!-- Action Buttons -->
                <div style="display: flex; gap: 12px; align-items: center;">
                    <button class="btn-larkon btn-primary-larkon" style="flex: 1; padding: 12px 20px; font-size: 14px;">
                        <i class="fa-solid fa-cart-shopping"></i> Add To Cart
                    </button>
                    <button class="btn-larkon btn-light-larkon" style="flex: 1; padding: 12px 20px; font-size: 14px; background: #f8fafc;">
                        <i class="fa-solid fa-bag-shopping"></i> Buy Now
                    </button>
                    <button class="action-btn" style="width: 44px; height: 44px; border-radius: 8px;">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
            </div>

            <!-- Right Side: Details & Info -->
            <div style="flex: 1; min-width: 400px;">
                <span class="badge-larkon badge-success" style="font-size: 12px; padding: 4px 12px; margin-bottom: 12px;">New Arrival</span>

                <h1 style="font-size: 22px; font-weight: 700; color: #1e293b; margin-bottom: 10px;">{{ $product['name'] }}</h1>

                <!-- Rating -->
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 18px;">
                    <div class="rating-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <span style="font-size: 13.5px; font-weight: 700; color: #1e293b;">4.5</span>
                    <span style="font-size: 13px; color: #64748b;">(55 Review)</span>
                </div>

                <!-- Price -->
                <div style="display: flex; align-items: baseline; gap: 12px; margin-bottom: 24px;">
                    <span style="font-size: 28px; font-weight: 800; color: #1e293b;">${{ number_format($product['price'], 2) }}</span>
                    <span style="font-size: 16px; text-decoration: line-through; color: #94a3b8;">${{ number_format($product['old_price'], 2) }}</span>
                    <span style="font-size: 12px; font-weight: 700; color: #ef4444; background: #fee2e2; padding: 3px 8px; border-radius: 4px;">{{ $product['discount'] }}</span>
                </div>

                <!-- Colors & Sizes -->
                <div style="display: flex; gap: 40px; margin-bottom: 24px; flex-wrap: wrap;">
                    <div>
                        <div style="font-size: 13px; font-weight: 600; color: #64748b; margin-bottom: 8px;">Colors > Dark</div>
                        <div class="color-chips">
                            <span class="color-chip active" style="background-color: #3b4252;"></span>
                            <span class="color-chip" style="background-color: #f59e0b;"></span>
                            <span class="color-chip" style="background-color: #e2e8f0;"></span>
                            <span class="color-chip" style="background-color: #10b981;"></span>
                        </div>
                    </div>

                    <div>
                        <div style="font-size: 13px; font-weight: 600; color: #64748b; margin-bottom: 8px;">Size > M</div>
                        <div class="size-chips">
                            <span class="size-chip">S</span>
                            <span class="size-chip active">M</span>
                            <span class="size-chip">XL</span>
                            <span class="size-chip">XXL</span>
                        </div>
                    </div>
                </div>

                <!-- Quantity -->
                <div style="margin-bottom: 24px;">
                    <div style="font-size: 13px; font-weight: 600; color: #64748b; margin-bottom: 8px;">Quantity :</div>
                    <div style="display: inline-flex; align-items: center; border: 1px solid #e2e8f0; border-radius: 8px; background: #f8fafc; overflow: hidden;">
                        <button style="width: 36px; height: 36px; border: none; background: transparent; cursor: pointer; font-size: 14px; color: #64748b;">-</button>
                        <input type="text" value="1" style="width: 40px; text-align: center; border: none; background: transparent; font-weight: 700; font-size: 14px;">
                        <button style="width: 36px; height: 36px; border: none; background: transparent; cursor: pointer; font-size: 14px; color: #64748b;">+</button>
                    </div>
                </div>

                <!-- Status Checkmarks -->
                <div style="display: flex; flex-direction: column; gap: 8px; font-size: 13px; color: #475569; margin-bottom: 24px;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i class="fa-solid fa-check" style="color: #10b981;"></i>
                        <span>In Stock</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i class="fa-solid fa-check" style="color: #10b981;"></i>
                        <span>Free delivery available</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i class="fa-solid fa-check" style="color: #10b981;"></i>
                        <span>Sales 10% Off Use Code: <strong style="color: #1e293b;">CODE123</strong></span>
                    </div>
                </div>

                <!-- Description -->
                <div style="margin-bottom: 24px;">
                    <div style="font-size: 14px; font-weight: 700; color: #1e293b; margin-bottom: 6px;">Description :</div>
                    <p style="font-size: 13px; color: #64748b; line-height: 1.6;">
                        Top in sweatshirt fabric made from a cotton blend with a soft brushed inside. Relaxed fit with dropped shoulders, long sleeves and ribbing around the neckline, cuffs and hem. Small metal text applique. <a href="#" style="color: #ff5e2b; font-weight: 600;">Read more</a>
                    </p>
                </div>

                <!-- Available Offers -->
                <div>
                    <div style="font-size: 14px; font-weight: 700; color: #1e293b; margin-bottom: 10px;">Available offers :</div>
                    <div style="display: flex; flex-direction: column; gap: 10px;">
                        <div style="display: flex; gap: 10px; font-size: 12.5px; color: #475569;">
                            <i class="fa-solid fa-bookmark" style="color: #10b981; font-size: 14px; margin-top: 2px;"></i>
                            <div><strong style="color: #1e293b;">Bank Offer</strong> 10% instant discount on Bank Debit Cards, up to $30 on orders of $50 and above</div>
                        </div>
                        <div style="display: flex; gap: 10px; font-size: 12.5px; color: #475569;">
                            <i class="fa-solid fa-bookmark" style="color: #10b981; font-size: 14px; margin-top: 2px;"></i>
                            <div><strong style="color: #1e293b;">Bank Offer</strong> Grab our exclusive offer now and save 20% on your next purchase! Don't miss out, shop today!</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Feature Highlights Row -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div class="larkon-card" style="padding: 20px; display: flex; align-items: center; gap: 16px; margin-bottom: 0;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: #e0f2fe; display: flex; align-items: center; justify-content: center; color: #0284c7; font-size: 20px;">
                <i class="fa-solid fa-truck-fast"></i>
            </div>
            <div>
                <h5 style="font-size: 13.5px; font-weight: 700; color: #1e293b; margin-bottom: 2px;">Free shipping for all orders over $200</h5>
                <div style="font-size: 12px; color: #64748b;">Only in this week</div>
            </div>
        </div>

        <div class="larkon-card" style="padding: 20px; display: flex; align-items: center; gap: 16px; margin-bottom: 0;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: #e0f2fe; display: flex; align-items: center; justify-content: center; color: #0284c7; font-size: 20px;">
                <i class="fa-solid fa-percent"></i>
            </div>
            <div>
                <h5 style="font-size: 13.5px; font-weight: 700; color: #1e293b; margin-bottom: 2px;">Special discounts for customers</h5>
                <div style="font-size: 12px; color: #64748b;">Coupons up to $ 100</div>
            </div>
        </div>

        <div class="larkon-card" style="padding: 20px; display: flex; align-items: center; gap: 16px; margin-bottom: 0;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: #e0f2fe; display: flex; align-items: center; justify-content: center; color: #0284c7; font-size: 20px;">
                <i class="fa-solid fa-gift"></i>
            </div>
            <div>
                <h5 style="font-size: 13.5px; font-weight: 700; color: #1e293b; margin-bottom: 2px;">Free gift wrapping</h5>
                <div style="font-size: 12px; color: #64748b;">With 100 letters custom note</div>
            </div>
        </div>

        <div class="larkon-card" style="padding: 20px; display: flex; align-items: center; gap: 16px; margin-bottom: 0;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: #e0f2fe; display: flex; align-items: center; justify-content: center; color: #0284c7; font-size: 20px;">
                <i class="fa-solid fa-headset"></i>
            </div>
            <div>
                <h5 style="font-size: 13.5px; font-weight: 700; color: #1e293b; margin-bottom: 2px;">Expert Customer Service</h5>
                <div style="font-size: 12px; color: #64748b;">8:00 - 20:00, 7 days/week</div>
            </div>
        </div>
    </div>

    <!-- Specifications & Customer Reviews Card -->
    <div class="larkon-card" style="padding: 30px;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <!-- Specs Column -->
            <div>
                <div style="display: flex; flex-direction: column; gap: 14px;">
                    @foreach($product['specs'] as $key => $val)
                        <div style="display: flex; font-size: 13px;">
                            <span style="width: 160px; color: #64748b; font-weight: 500;">{{ $key }}</span>
                            <span style="color: #64748b; margin-right: 12px;">:</span>
                            <span style="color: #1e293b; font-weight: 500;">{{ $val }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Customer Review Column -->
            <div>
                <div style="display: flex; gap: 16px; align-items: flex-start; background: #fafbfc; border-radius: 12px; padding: 20px; border: 1px solid #e2e8f0;">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="Reviewer Avatar" style="width: 48px; height: 48px; border-radius: 50%; object-fit: cover;">
                    <div style="flex: 1;">
                        <h5 style="font-size: 14px; font-weight: 700; color: #1e293b; margin-bottom: 4px;">Henny K. Mark</h5>
                        
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                            <div class="rating-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <span style="font-size: 13px; font-weight: 700; color: #1e293b;">Excellent Quality</span>
                        </div>

                        <div style="font-size: 12px; color: #94a3b8; margin-bottom: 12px;">Reviewed in Canada on 16 November 2023</div>

                        <p style="font-size: 13px; color: #475569; line-height: 1.6; margin-bottom: 14px;">
                            Medium thickness. Did not shrink after wash. Good elasticity. XL size Perfectly fit for 5.10 height and heavy body. Did not fade after wash. Only for maroon colour t-shirt colour lightly gone in first wash but not faded. I bought 5 tshirt of different colours. Highly recommended in so low price.
                        </p>

                        <div style="display: flex; gap: 16px; font-size: 12.5px; color: #64748b;">
                            <a href="#" style="color: #64748b; font-weight: 600;"><i class="fa-regular fa-thumbs-up"></i> Helpful</a>
                            <a href="#" style="color: #64748b; font-weight: 600;">Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
