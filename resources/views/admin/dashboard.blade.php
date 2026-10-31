@extends('layouts.admin')

@section('title', 'Dashboard Overview - Larkon Admin')
@section('page_title', 'WELCOME!')

@push('styles')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush

@section('content')
<div style="display: flex; flex-direction: column; gap: 24px;">

    <!-- Top Server Notice Banner -->
    <div>
        <div class="notice-pill-banner">
            <i class="fa-solid fa-circle-exclamation" style="margin-right: 6px;"></i> We regret to inform you that our server is currently experiencing minor traffic spikes. All systems operating normally.
        </div>
    </div>

    <!-- Hero Advertisement Slider Banner -->
   
    <!-- Metrics & Performance Chart Row -->
    <div style="display: grid; grid-template-columns: 360px 1fr; gap: 24px;">
        <!-- Left: 4 Metric Cards Grid -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <!-- Card 1: Total Orders -->
            <div class="larkon-card" style="padding: 16px; margin-bottom: 0;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                    <div>
                        <div style="font-size: 11.5px; font-weight: 600; color: #64748b;">Total Orders</div>
                        <div style="font-size: 20px; font-weight: 800; color: #1e293b; margin-top: 2px;">13,647</div>
                    </div>
                    <div style="width: 36px; height: 36px; border-radius: 8px; background: #fde8e8; color: #ef4444; display: flex; align-items: center; justify-content: center; font-size: 16px;">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px;">
                    <span style="color: #10b981; font-weight: 700;"><i class="fa-solid fa-caret-up"></i> 2.3% <span style="color: #94a3b8; font-weight: 400;">Last Week</span></span>
                    <a href="#" style="color: #64748b; font-weight: 500;">View More</a>
                </div>
            </div>

            <!-- Card 2: New Leads -->
            <div class="larkon-card" style="padding: 16px; margin-bottom: 0;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                    <div>
                        <div style="font-size: 11.5px; font-weight: 600; color: #64748b;">New Leads</div>
                        <div style="font-size: 20px; font-weight: 800; color: #1e293b; margin-top: 2px;">9,526</div>
                    </div>
                    <div style="width: 36px; height: 36px; border-radius: 8px; background: #fff2ed; color: #ff5e2b; display: flex; align-items: center; justify-content: center; font-size: 16px;">
                        <i class="fa-solid fa-award"></i>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px;">
                    <span style="color: #10b981; font-weight: 700;"><i class="fa-solid fa-caret-up"></i> 8.1% <span style="color: #94a3b8; font-weight: 400;">Last Month</span></span>
                    <a href="#" style="color: #64748b; font-weight: 500;">View More</a>
                </div>
            </div>

            <!-- Card 3: Deals -->
            <div class="larkon-card" style="padding: 16px; margin-bottom: 0;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                    <div>
                        <div style="font-size: 11.5px; font-weight: 600; color: #64748b;">Deals</div>
                        <div style="font-size: 20px; font-weight: 800; color: #1e293b; margin-top: 2px;">976</div>
                    </div>
                    <div style="width: 36px; height: 36px; border-radius: 8px; background: #fde8e8; color: #ef4444; display: flex; align-items: center; justify-content: center; font-size: 16px;">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px;">
                    <span style="color: #ef4444; font-weight: 700;"><i class="fa-solid fa-caret-down"></i> 0.3% <span style="color: #94a3b8; font-weight: 400;">Last Month</span></span>
                    <a href="#" style="color: #64748b; font-weight: 500;">View More</a>
                </div>
            </div>

            <!-- Card 4: Booked Revenue -->
            <div class="larkon-card" style="padding: 16px; margin-bottom: 0;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                    <div>
                        <div style="font-size: 11.5px; font-weight: 600; color: #64748b;">Booked Revenue</div>
                        <div style="font-size: 20px; font-weight: 800; color: #1e293b; margin-top: 2px;">$123.6 k</div>
                    </div>
                    <div style="width: 36px; height: 36px; border-radius: 8px; background: #fff2ed; color: #ff5e2b; display: flex; align-items: center; justify-content: center; font-size: 16px;">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px;">
                    <span style="color: #ef4444; font-weight: 700;"><i class="fa-solid fa-caret-down"></i> 10.6% <span style="color: #94a3b8; font-weight: 400;">Last Month</span></span>
                    <a href="#" style="color: #64748b; font-weight: 500;">View More</a>
                </div>
            </div>
        </div>

        <!-- Right: Performance Chart -->
        <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                <h4 style="font-size: 15px; font-weight: 700; color: #1e293b; margin: 0;">Performance Overview</h4>
                <div style="display: flex; gap: 4px;">
                    <button class="btn-larkon btn-light-larkon" style="padding: 3px 10px; font-size: 11px;">ALL</button>
                    <button class="btn-larkon btn-light-larkon" style="padding: 3px 10px; font-size: 11px;">1M</button>
                    <button class="btn-larkon btn-light-larkon" style="padding: 3px 10px; font-size: 11px;">6M</button>
                    <button class="btn-larkon btn-light-larkon" style="padding: 3px 10px; font-size: 11px;">1Y</button>
                </div>
            </div>
            <div id="performanceChart" style="min-height: 220px;"></div>
        </div>
    </div>

    <!-- Customer Reviews & Ratings Section -->
    <div style="display: grid; grid-template-columns: 320px 1fr; gap: 24px;">
        <!-- Left: Overall Rating Breakdown Card -->
        <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
            <h4 style="font-size: 15px; font-weight: 700; color: #1e293b; margin-bottom: 16px;">Customer Satisfaction</h4>
            
            <div style="text-align: center; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px;">
                <div style="font-size: 42px; font-weight: 800; color: #1e293b; line-height: 1;">4.8</div>
                <div class="rating-stars" style="font-size: 18px; margin: 6px 0;">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <div style="font-size: 12.5px; color: #64748b;">Based on 3,542 verified reviews</div>
            </div>

            <!-- Star Breakdown Bars -->
            <div style="display: flex; flex-direction: column; gap: 10px;">
                <div style="display: flex; align-items: center; gap: 10px; font-size: 12px;">
                    <span style="width: 40px; color: #475569; font-weight: 600;">5 Star</span>
                    <div style="flex: 1; height: 8px; background: #f1f5f9; border-radius: 4px; overflow: hidden;">
                        <div style="width: 78%; height: 100%; background: #10b981; border-radius: 4px;"></div>
                    </div>
                    <span style="width: 35px; color: #64748b; text-align: right;">78%</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px; font-size: 12px;">
                    <span style="width: 40px; color: #475569; font-weight: 600;">4 Star</span>
                    <div style="flex: 1; height: 8px; background: #f1f5f9; border-radius: 4px; overflow: hidden;">
                        <div style="width: 14%; height: 100%; background: #3b82f6; border-radius: 4px;"></div>
                    </div>
                    <span style="width: 35px; color: #64748b; text-align: right;">14%</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px; font-size: 12px;">
                    <span style="width: 40px; color: #475569; font-weight: 600;">3 Star</span>
                    <div style="flex: 1; height: 8px; background: #f1f5f9; border-radius: 4px; overflow: hidden;">
                        <div style="width: 5%; height: 100%; background: #f59e0b; border-radius: 4px;"></div>
                    </div>
                    <span style="width: 35px; color: #64748b; text-align: right;">5%</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px; font-size: 12px;">
                    <span style="width: 40px; color: #475569; font-weight: 600;">2 Star</span>
                    <div style="flex: 1; height: 8px; background: #f1f5f9; border-radius: 4px; overflow: hidden;">
                        <div style="width: 2%; height: 100%; background: #ef4444; border-radius: 4px;"></div>
                    </div>
                    <span style="width: 35px; color: #64748b; text-align: right;">2%</span>
                </div>
                <div style="display: flex; align-items: center; gap: 10px; font-size: 12px;">
                    <span style="width: 40px; color: #475569; font-weight: 600;">1 Star</span>
                    <div style="flex: 1; height: 8px; background: #f1f5f9; border-radius: 4px; overflow: hidden;">
                        <div style="width: 1%; height: 100%; background: #94a3b8; border-radius: 4px;"></div>
                    </div>
                    <span style="width: 35px; color: #64748b; text-align: right;">1%</span>
                </div>
            </div>
        </div>

        <!-- Right: Recent Customer Reviews Feed -->
        <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                <h4 style="font-size: 15px; font-weight: 700; color: #1e293b; margin: 0;">Recent Customer Reviews</h4>
                <a href="{{ route('admin.reviews.index') }}" class="btn-larkon btn-light-larkon" style="font-size: 11.5px; padding: 4px 10px;">View All Reviews</a>
            </div>

            <div style="display: flex; flex-direction: column; gap: 16px;">
                <!-- Review Item 1 -->
                <div style="background: #f8fafc; border-radius: 10px; padding: 14px; border: 1px solid #f1f5f9;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Michael B. Coch" style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <div style="font-weight: 700; color: #1e293b; font-size: 13.5px;">Michael B. Coch <span class="badge-larkon badge-success" style="font-size: 10px; padding: 2px 6px;">Verified Buyer</span></div>
                                <div style="font-size: 11.5px; color: #64748b;">Reviewed "Black T-Shirt Oversized" • 2 hrs ago</div>
                            </div>
                        </div>
                        <div class="rating-stars" style="font-size: 12px;">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p style="font-size: 12.5px; color: #475569; margin: 0 0 10px 0;">"The quality of the fabric is exceptional! Fast delivery and fits perfectly."</p>
                    <div style="display: flex; gap: 8px; justify-content: flex-end;">
                        <button class="btn-larkon btn-light-larkon" style="font-size: 11px; padding: 3px 8px; color: #10b981;"><i class="fa-solid fa-check"></i> Approve</button>
                        <button class="btn-larkon btn-light-larkon" style="font-size: 11px; padding: 3px 8px; color: #ff5e2b;"><i class="fa-solid fa-reply"></i> Reply</button>
                    </div>
                </div>

                <!-- Review Item 2 -->
                <div style="background: #f8fafc; border-radius: 10px; padding: 14px; border: 1px solid #f1f5f9;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=120&q=80" alt="Theresa T. Brose" style="width: 36px; height: 36px; border-radius: 50%; object-fit: cover;">
                            <div>
                                <div style="font-weight: 700; color: #1e293b; font-size: 13.5px;">Theresa T. Brose <span class="badge-larkon badge-success" style="font-size: 10px; padding: 2px 6px;">Verified Buyer</span></div>
                                <div style="font-size: 11.5px; color: #64748b;">Reviewed "Olive Green Leather Bag" • 5 hrs ago</div>
                            </div>
                        </div>
                        <div class="rating-stars" style="font-size: 12px;">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <p style="font-size: 12.5px; color: #475569; margin: 0 0 10px 0;">"Super stylish leather finish and very spacious interior compartment. Highly recommended!"</p>
                    <div style="display: flex; gap: 8px; justify-content: flex-end;">
                        <button class="btn-larkon btn-light-larkon" style="font-size: 11px; padding: 3px 8px; color: #10b981;"><i class="fa-solid fa-check"></i> Approve</button>
                        <button class="btn-larkon btn-light-larkon" style="font-size: 11px; padding: 3px 8px; color: #ff5e2b;"><i class="fa-solid fa-reply"></i> Reply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Middle 3-Column Grid (Conversions, Sessions by Country, Top Pages) -->
    <div style="display: grid; grid-template-columns: 1fr 1fr 1.3fr; gap: 24px;">

        <!-- Card 1: Conversions -->
        <div class="larkon-card" style="padding: 20px; margin-bottom: 0; text-align: center;">
            <h4 style="font-size: 14.5px; font-weight: 700; color: #1e293b; text-align: left; margin-bottom: 16px;">Conversions</h4>
            
            <div id="conversionsChart" style="min-height: 160px; margin-bottom: 10px;"></div>
            <div style="font-size: 12px; color: #94a3b8; margin-bottom: 16px;">Returning Customer</div>

            <div style="display: flex; justify-content: space-around; text-align: center; margin-bottom: 16px; border-top: 1px dashed #e2e8f0; padding-top: 12px;">
                <div>
                    <div style="font-size: 11px; color: #94a3b8;">This Week</div>
                    <div style="font-size: 16px; font-weight: 700; color: #1e293b;">23.5k</div>
                </div>
                <div>
                    <div style="font-size: 11px; color: #94a3b8;">Last Week</div>
                    <div style="font-size: 16px; font-weight: 700; color: #1e293b;">41.05k</div>
                </div>
            </div>

            <button class="btn-larkon btn-light-larkon" style="width: 100%; font-size: 12px; background: #e0f2fe; color: #0284c7; border: none;">View Details</button>
        </div>

        <!-- Card 2: Sessions by Country -->
        <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
            <h4 style="font-size: 14.5px; font-weight: 700; color: #1e293b; margin-bottom: 16px;">Sessions by Country</h4>
            
            <!-- Minimal World Map Illustration -->
            <div style="height: 150px; background: #f8fafc; border-radius: 12px; display: flex; align-items: center; justify-content: center; position: relative; margin-bottom: 16px; border: 1px solid #eef2f5;">
                <svg width="220" height="120" viewBox="0 0 400 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M150,40 Q160,20 180,30 T200,60 T160,80 Z" fill="#cbd5e1"/>
                    <path d="M70,50 Q110,40 120,80 T80,120 T50,80 Z" fill="#cbd5e1"/>
                    <path d="M250,50 Q300,30 350,60 T320,110 T260,90 Z" fill="#cbd5e1"/>
                    <path d="M120,130 Q140,110 150,150 T110,180 Z" fill="#cbd5e1"/>
                    <!-- Pin Dots -->
                    <circle cx="100" cy="70" r="5" fill="#3b82f6"/>
                    <text x="110" y="74" fill="#475569" font-size="10" font-weight="bold">Canada</text>
                    <circle cx="90" cy="90" r="5" fill="#3b82f6"/>
                    <text x="100" y="94" fill="#475569" font-size="10" font-weight="bold">United States</text>
                    <circle cx="135" cy="140" r="5" fill="#3b82f6"/>
                    <text x="145" y="144" fill="#475569" font-size="10" font-weight="bold">Brazil</text>
                    <circle cx="300" cy="65" r="5" fill="#3b82f6"/>
                    <text x="310" y="69" fill="#475569" font-size="10" font-weight="bold">Russia</text>
                    <circle cx="310" cy="90" r="5" fill="#3b82f6"/>
                    <text x="320" y="94" fill="#475569" font-size="10" font-weight="bold">China</text>
                </svg>
            </div>

            <div style="display: flex; justify-content: space-around; text-align: center; border-top: 1px dashed #e2e8f0; padding-top: 12px;">
                <div>
                    <div style="font-size: 11px; color: #94a3b8;">This Week</div>
                    <div style="font-size: 16px; font-weight: 700; color: #1e293b;">23.5k</div>
                </div>
                <div>
                    <div style="font-size: 11px; color: #94a3b8;">Last Week</div>
                    <div style="font-size: 16px; font-weight: 700; color: #1e293b;">41.05k</div>
                </div>
            </div>
        </div>

        <!-- Card 3: Top Pages -->
        <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                <h4 style="font-size: 14.5px; font-weight: 700; color: #1e293b; margin: 0;">Top Pages</h4>
                <button class="btn-larkon btn-light-larkon" style="padding: 4px 10px; font-size: 11px; background: #fff2ed; color: #ff5e2b; border: none;">View All</button>
            </div>

            <table class="larkon-table" style="font-size: 12.5px;">
                <thead>
                    <tr>
                        <th style="padding: 8px 10px;">Page Path</th>
                        <th style="padding: 8px 10px;">Page Views</th>
                        <th style="padding: 8px 10px; text-align: right;">Exit Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 8px 10px;">larkon/ecommerce.html</td>
                        <td style="padding: 8px 10px;">465</td>
                        <td style="padding: 8px 10px; text-align: right;"><span class="badge-larkon badge-success" style="font-size: 10.5px;">4.4%</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 10px;">larkon/dashboard.html</td>
                        <td style="padding: 8px 10px;">426</td>
                        <td style="padding: 8px 10px; text-align: right;"><span class="badge-larkon badge-danger" style="font-size: 10.5px;">20.4%</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 10px;">larkon/chat.html</td>
                        <td style="padding: 8px 10px;">254</td>
                        <td style="padding: 8px 10px; text-align: right;"><span class="badge-larkon badge-warning" style="font-size: 10.5px;">12.25%</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 10px;">larkon/auth-login.html</td>
                        <td style="padding: 8px 10px;">3369</td>
                        <td style="padding: 8px 10px; text-align: right;"><span class="badge-larkon badge-success" style="font-size: 10.5px;">5.2%</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 10px;">larkon/email.html</td>
                        <td style="padding: 8px 10px;">985</td>
                        <td style="padding: 8px 10px; text-align: right;"><span class="badge-larkon badge-danger" style="font-size: 10.5px;">64.2%</span></td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 10px;">larkon/social.html</td>
                        <td style="padding: 8px 10px;">653</td>
                        <td style="padding: 8px 10px; text-align: right;"><span class="badge-larkon badge-success" style="font-size: 10.5px;">2.4%</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Bottom Section: Recent Orders Table -->
    <div class="larkon-card" style="padding: 20px; margin-bottom: 0;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
            <h4 style="font-size: 15px; font-weight: 700; color: #1e293b; margin: 0;">Recent Orders</h4>
            <button class="btn-larkon btn-light-larkon" style="font-size: 12px; background: #fff2ed; color: #ff5e2b; border: none;">+ Create Order</button>
        </div>

        <div class="table-responsive">
            <table class="larkon-table">
                <thead>
                    <tr>
                        <th>Order ID.</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th>Customer Name</th>
                        <th>Email ID</th>
                        <th>Phone No.</th>
                        <th>Address</th>
                        <th>Payment Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: 700; color: #64748b;">#RB5625</td>
                        <td>29 April 2024</td>
                        <td><i class="fa-solid fa-laptop" style="color: #64748b; font-size: 16px;"></i></td>
                        <td style="font-weight: 600; color: #1e293b;">Anna M. Hines</td>
                        <td style="color: #64748b;">anna.hines@mail.com</td>
                        <td style="color: #64748b;">(+1)-555-1564-261</td>
                        <td style="color: #64748b;">Burr Ridge/Illinois</td>
                        <td style="color: #64748b;">Credit Card</td>
                        <td><span class="badge-larkon badge-success"><i class="fa-solid fa-circle" style="font-size: 7px; color: #10b981;"></i> Completed</span></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700; color: #64748b;">#RB9652</td>
                        <td>25 April 2024</td>
                        <td><i class="fa-solid fa-camera" style="color: #64748b; font-size: 16px;"></i></td>
                        <td style="font-weight: 600; color: #1e293b;">Judith H. Fritsche</td>
                        <td style="color: #64748b;">judith.fritsche.com</td>
                        <td style="color: #64748b;">(+57)-305-5579-759</td>
                        <td style="color: #64748b;">SULLIVAN/Kentucky</td>
                        <td style="color: #64748b;">Credit Card</td>
                        <td><span class="badge-larkon badge-success"><i class="fa-solid fa-circle" style="font-size: 7px; color: #10b981;"></i> Completed</span></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 700; color: #64748b;">#RB5984</td>
                        <td>25 April 2024</td>
                        <td><i class="fa-solid fa-stopwatch" style="color: #64748b; font-size: 16px;"></i></td>
                        <td style="font-weight: 600; color: #1e293b;">Peter T. Smith</td>
                        <td style="color: #64748b;">peter.smith@mail.com</td>
                        <td style="color: #64748b;">(+33)-655-5187-93</td>
                        <td style="color: #64748b;">Yreka/California</td>
                        <td style="color: #64748b;">Pay Pal</td>
                        <td><span class="badge-larkon badge-success"><i class="fa-solid fa-circle" style="font-size: 7px; color: #10b981;"></i> Completed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    let currentHeroSlide = 0;
    let heroSlideTimer;

    function showHeroSlide(index) {
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.hero-slider-dots .dot');
        if (!slides.length) return;

        if (index >= slides.length) currentHeroSlide = 0;
        else if (index < 0) currentHeroSlide = slides.length - 1;
        else currentHeroSlide = index;

        slides.forEach((slide, idx) => {
            slide.classList.toggle('active', idx === currentHeroSlide);
        });

        dots.forEach((dot, idx) => {
            dot.classList.toggle('active', idx === currentHeroSlide);
        });
    }

    function moveHeroSlide(direction) {
        clearInterval(heroSlideTimer);
        showHeroSlide(currentHeroSlide + direction);
        startHeroSlideTimer();
    }

    function setHeroSlide(index) {
        clearInterval(heroSlideTimer);
        showHeroSlide(index);
        startHeroSlideTimer();
    }

    function startHeroSlideTimer() {
        heroSlideTimer = setInterval(() => {
            showHeroSlide(currentHeroSlide + 1);
        }, 5000);
    }

    document.addEventListener("DOMContentLoaded", function() {
        startHeroSlideTimer();

        // Performance Bar + Line Chart
        var perfOptions = {
            series: [{
                name: 'Page Views',
                type: 'column',
                data: [34, 46, 62, 47, 65, 67, 42, 44, 76, 52, 60, 62]
            }, {
                name: 'Clicks',
                type: 'line',
                data: [10, 12, 16, 20, 18, 22, 12, 16, 28, 14, 30, 12]
            }],
            chart: {
                height: 220,
                type: 'line',
                toolbar: { show: false }
            },
            stroke: {
                width: [0, 2],
                curve: 'smooth'
            },
            colors: ['#ff5e2b', '#10b981'],
            plotOptions: {
                bar: { columnWidth: '35%', borderRadius: 4 }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yaxis: { max: 80 },
            legend: { position: 'bottom' }
        };
        var perfChart = new ApexCharts(document.querySelector("#performanceChart"), perfOptions);
        perfChart.render();

        // Conversions Donut Chart
        var convOptions = {
            series: [65.2],
            chart: {
                height: 170,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: { size: '65%' },
                    dataLabels: {
                        name: { show: false },
                        value: {
                            offsetY: 8,
                            color: '#1e293b',
                            fontSize: '20px',
                            fontWeight: '700',
                            formatter: function (val) { return val + "%"; }
                        }
                    }
                }
            },
            colors: ['#ff5e2b'],
            labels: ['Returning']
        };
        var convChart = new ApexCharts(document.querySelector("#conversionsChart"), convOptions);
        convChart.render();
    });
</script>
@endpush
