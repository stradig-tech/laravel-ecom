<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display the Coupons List page.
     */
    public function index()
    {
        $coupons = [
            [
                'id' => 1,
                'name' => 'Black T-shirt',
                'category' => 'Fashion',
                'image' => asset('images/products/black_tshirt.png'),
                'price' => '$80.00',
                'discount' => '$20.00',
                'code' => 'FASHION123',
                'start_date' => '12 May 2023',
                'end_date' => '12 Jun 2023',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'name' => 'Olive Green Leather Bag',
                'category' => 'Hand Bag',
                'image' => asset('images/products/green_bag.png'),
                'price' => '$136.00',
                'discount' => '$37.00',
                'code' => 'SUMMER24',
                'start_date' => '19 July 2023',
                'end_date' => '23 Aug 2023',
                'status' => 'Expired',
            ],
            [
                'id' => 3,
                'name' => 'Women Golden Dress',
                'category' => 'Fashion',
                'image' => asset('images/products/golden_dress.png'),
                'price' => '$219.00',
                'discount' => '$20.00',
                'code' => 'FASHION123',
                'start_date' => '24 Aug 2023',
                'end_date' => '20 Sep 2023',
                'status' => 'Active',
            ],
        ];

        return view('admin.coupons.index', compact('coupons'));
    }

    /**
     * Display the Coupon Add page.
     */
    public function add()
    {
        return view('admin.coupons.add');
    }
}
