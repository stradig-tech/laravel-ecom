<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display the Sellers List page.
     */
    public function index()
    {
        $sellers = $this->getAllSellers();
        return view('admin.sellers.index', compact('sellers'));
    }

    /**
     * Display the Seller Create / Add page.
     */
    public function create()
    {
        $sellerPreview = $this->getSellerData(1);
        return view('admin.sellers.create', compact('sellerPreview'));
    }

    /**
     * Display the Seller Edit page.
     */
    public function edit($id)
    {
        $seller = $this->getSellerData($id);
        return view('admin.sellers.edit', compact('seller'));
    }

    /**
     * Display the Seller Show / Details page.
     */
    public function show($id)
    {
        $seller = $this->getSellerData($id);
        $sellerProducts = $this->getSellerProducts($id);
        return view('admin.sellers.show', compact('seller', 'sellerProducts'));
    }

    private function getSellerData($id)
    {
        $all = $this->getAllSellers();
        foreach ($all as $s) {
            if ($s['id'] == $id) {
                return $s;
            }
        }
        return $all[0];
    }

    private function getAllSellers()
    {
        return [
            [
                'id' => 1,
                'name' => 'ZARA International',
                'short_name' => 'ZARA',
                'category' => 'Fashion',
                'website' => 'www.zarafashion.co',
                'rating' => 4.5,
                'reviews_count' => '3.5k',
                'address' => '4604, Philli Lane Kiowa IN 47404',
                'email' => 'zarafashionworld@dayrep.com',
                'phone' => '+243 812-801-9335',
                'revenue_progress' => '5200k',
                'item_stock' => '865',
                'sells' => '+4.5K',
                'happy_clients' => '+2k',
                'badge_color' => '#ff5e2b',
                'joined_date' => '12 Jan 2023',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'name' => 'H&M Apparel',
                'short_name' => 'H&M',
                'category' => 'Fashion & Retail',
                'website' => 'www.hmbrand.com',
                'rating' => 4.8,
                'reviews_count' => '5.2k',
                'address' => '1290 Broadway St, New York NY 10001',
                'email' => 'contact@hmbrand.com',
                'phone' => '+1 212-555-0198',
                'revenue_progress' => '8140k',
                'item_stock' => '1,420',
                'sells' => '+9.2K',
                'happy_clients' => '+6k',
                'badge_color' => '#ef4444',
                'joined_date' => '05 Mar 2022',
                'status' => 'Active',
            ],
            [
                'id' => 3,
                'name' => 'Nike Official',
                'short_name' => 'NIKE',
                'category' => 'Sports & Footwear',
                'website' => 'www.nike.com',
                'rating' => 4.9,
                'reviews_count' => '12.8k',
                'address' => '1 Bowerman Dr, Beaverton OR 97005',
                'email' => 'support@nike.com',
                'phone' => '+1 503-671-6453',
                'revenue_progress' => '14500k',
                'item_stock' => '2,890',
                'sells' => '+18.4K',
                'happy_clients' => '+15k',
                'badge_color' => '#0f172a',
                'joined_date' => '18 Nov 2021',
                'status' => 'Active',
            ],
            [
                'id' => 4,
                'name' => 'Adidas Global',
                'short_name' => 'ADIDAS',
                'category' => 'Sportswear',
                'website' => 'www.adidas.com',
                'rating' => 4.7,
                'reviews_count' => '8.9k',
                'address' => 'Adi-Dassler-Strasse 1, Herzogenaurach',
                'email' => 'seller@adidas.com',
                'phone' => '+49 9132 840',
                'revenue_progress' => '11200k',
                'item_stock' => '1,950',
                'sells' => '+14.1K',
                'happy_clients' => '+11k',
                'badge_color' => '#2563eb',
                'joined_date' => '24 Aug 2022',
                'status' => 'Active',
            ],
            [
                'id' => 5,
                'name' => 'Apple Store Outlet',
                'short_name' => 'APPLE',
                'category' => 'Electronics',
                'website' => 'www.apple.com',
                'rating' => 4.9,
                'reviews_count' => '24.1k',
                'address' => '1 Apple Park Way, Cupertino CA 95014',
                'email' => 'business@apple.com',
                'phone' => '+1 408-996-1010',
                'revenue_progress' => '35800k',
                'item_stock' => '4,100',
                'sells' => '+32.0K',
                'happy_clients' => '+28k',
                'badge_color' => '#64748b',
                'joined_date' => '10 Jan 2021',
                'status' => 'Active',
            ],
            [
                'id' => 6,
                'name' => 'Samsung Tech Hub',
                'short_name' => 'SAMSUNG',
                'category' => 'Gadgets & Home',
                'website' => 'www.samsung.com',
                'rating' => 4.6,
                'reviews_count' => '11.4k',
                'address' => '129 Samsung-ro, Yeongtong-gu, Suwon',
                'email' => 'sales@samsung.com',
                'phone' => '+82 2-2255-0114',
                'revenue_progress' => '22400k',
                'item_stock' => '3,200',
                'sells' => '+21.5K',
                'happy_clients' => '+19k',
                'badge_color' => '#1d4ed8',
                'joined_date' => '15 Jun 2022',
                'status' => 'Active',
            ]
        ];
    }

    private function getSellerProducts($sellerId)
    {
        return [
            [
                'id' => 1,
                'name' => 'Black T-Shirt Oversized',
                'category' => 'Fashion',
                'price' => '$80.00',
                'stock' => 486,
                'revenue' => '$38,880',
                'image' => asset('images/products/black_tshirt.png'),
                'rating' => 4.5,
            ],
            [
                'id' => 3,
                'name' => 'Golden Women Dress',
                'category' => 'Fashion',
                'price' => '$140.00',
                'stock' => 210,
                'revenue' => '$29,400',
                'image' => asset('images/products/golden_dress.png'),
                'rating' => 4.7,
            ],
            [
                'id' => 7,
                'name' => 'Striped Casual T-Shirt',
                'category' => 'Fashion',
                'price' => '$65.00',
                'stock' => 320,
                'revenue' => '$20,800',
                'image' => asset('images/products/striped_tshirt.png'),
                'rating' => 4.4,
            ],
        ];
    }
}

