<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display the Hero Sliders Management List.
     */
    public function index()
    {
        $sliders = [
            [
                'id' => 1,
                'title' => 'Mega Summer Fashion Collection',
                'subtitle' => 'Upgrade your inventory with top trending apparel and luxury clothing lines.',
                'tag' => 'HOT DEALS • 50% OFF',
                'image' => asset('images/banners/banner1.png'),
                'button_text' => 'Explore Products',
                'button_url' => route('admin.products.index'),
                'order' => 1,
                'status' => 'Active',
                'views' => '12.4k',
                'clicks' => '3.8k',
            ],
            [
                'id' => 2,
                'title' => 'Smart Gadgets & Electronics Sale',
                'subtitle' => 'Discover top tech deals on wireless headphones, smartwatches, and accessories.',
                'tag' => 'TECH FEST 2026',
                'image' => asset('images/banners/banner2.png'),
                'button_text' => 'Shop Electronics',
                'button_url' => route('admin.products.grid'),
                'order' => 2,
                'status' => 'Active',
                'views' => '8.9k',
                'clicks' => '2.1k',
            ],
            [
                'id' => 3,
                'title' => '30% Instant Discount For Customers',
                'subtitle' => 'Boost customer conversions with promotional discount campaigns & coupons.',
                'tag' => 'SPECIAL PROMO BANNER',
                'image' => asset('images/banners/banner3.png'),
                'button_text' => 'Create Coupon',
                'button_url' => route('admin.coupons.add'),
                'order' => 3,
                'status' => 'Active',
                'views' => '15.2k',
                'clicks' => '5.6k',
            ],
        ];

        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Display the Upload / Create Hero Slider form.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Display the Edit Hero Slider form.
     */
    public function edit($id)
    {
        $slider = [
            'id' => $id,
            'title' => 'Mega Summer Fashion Collection',
            'subtitle' => 'Upgrade your inventory with top trending apparel and luxury clothing lines.',
            'tag' => 'HOT DEALS • 50% OFF',
            'image' => asset('images/banners/banner1.png'),
            'button_text' => 'Explore Products',
            'button_url' => route('admin.products.index'),
            'order' => 1,
            'status' => 'Active',
        ];

        return view('admin.sliders.edit', compact('slider'));
    }
}
