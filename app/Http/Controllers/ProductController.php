<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the Admin Dashboard Overview.
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Display the Product List page.
     */
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Black T-shirt',
                'sizes' => 'S, M, L, XL',
                'image' => asset('images/products/black_tshirt.png'),
                'price' => '$80.00',
                'stock' => '486 Item Left',
                'sold' => '155 Sold',
                'category' => 'Fashion',
                'rating' => 4.5,
                'reviews' => 55,
            ],
            [
                'id' => 2,
                'name' => 'Olive Green Leather Bag',
                'sizes' => 'S, M',
                'image' => asset('images/products/green_bag.png'),
                'price' => '$136.00',
                'stock' => '784 Item Left',
                'sold' => '674 Sold',
                'category' => 'Hand Bag',
                'rating' => 4.1,
                'reviews' => 143,
            ],
            [
                'id' => 3,
                'name' => 'Women Golden Dress',
                'sizes' => 'S, M',
                'image' => asset('images/products/golden_dress.png'),
                'price' => '$219.00',
                'stock' => '769 Item Left',
                'sold' => '180 Sold',
                'category' => 'Fashion',
                'rating' => 4.4,
                'reviews' => 174,
            ],
            [
                'id' => 4,
                'name' => 'Gray Cap For Men',
                'sizes' => 'S, M, L',
                'image' => asset('images/products/gray_cap.png'),
                'price' => '$76.00',
                'stock' => '571 Item Left',
                'sold' => '87 Sold',
                'category' => 'Cap',
                'rating' => 4.2,
                'reviews' => 23,
            ],
            [
                'id' => 5,
                'name' => 'Dark Green Cargo Pants',
                'sizes' => 'S, M, L, XL',
                'image' => asset('images/products/black_tshirt.png'), // fallback
                'price' => '$110.00',
                'stock' => '241 Item Left',
                'sold' => '342 Sold',
                'category' => 'Fashion',
                'rating' => 4.4,
                'reviews' => 109,
            ],
            [
                'id' => 6,
                'name' => "Kid's Yellow Shoes",
                'sizes' => '18, 19, 20, 21',
                'image' => asset('images/products/yellow_shoes.png'),
                'price' => '$89.00',
                'stock' => '521 Item Left',
                'sold' => '681 Sold',
                'category' => 'Shoes',
                'rating' => 4.5,
                'reviews' => 321,
            ],
            [
                'id' => 7,
                'name' => 'Men Dark Brown Wallet',
                'sizes' => 'S, M',
                'image' => asset('images/products/brown_wallet.png'),
                'price' => '$132.00',
                'stock' => '190 Item Left',
                'sold' => '212 Sold',
                'category' => 'Wallet',
                'rating' => 4.1,
                'reviews' => 190,
            ],
            [
                'id' => 8,
                'name' => 'Orange Headphone',
                'sizes' => 'One Size',
                'image' => asset('images/products/orange_headphones.png'),
                'price' => '$231.00',
                'stock' => '98 Item Left',
                'sold' => '200 Sold',
                'category' => 'Electronics',
                'rating' => 4.2,
                'reviews' => 200,
            ],
        ];

        return view('admin.products.index', compact('products'));
    }

    /**
     * Display the Product Grid page.
     */
    public function grid()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Men Black Slim Fit T-shirt',
                'image' => asset('images/products/black_tshirt.png'),
                'price' => 80.00,
                'old_price' => 100.00,
                'discount' => '30% Off',
                'rating' => 4.5,
                'reviews' => 55,
            ],
            [
                'id' => 2,
                'name' => 'Olive Green Leather Bag',
                'image' => asset('images/products/green_bag.png'),
                'price' => 136.00,
                'old_price' => 150.00,
                'discount' => '30% Off',
                'rating' => 4.1,
                'reviews' => 143,
            ],
            [
                'id' => 3,
                'name' => 'Women Golden Dress',
                'image' => asset('images/products/golden_dress.png'),
                'price' => 219.00,
                'old_price' => 250.00,
                'discount' => '30% Off',
                'rating' => 4.4,
                'reviews' => 174,
            ],
            [
                'id' => 4,
                'name' => 'Gray Cap For Men',
                'image' => asset('images/products/gray_cap.png'),
                'price' => 76.00,
                'old_price' => 100.00,
                'discount' => '30% Off',
                'rating' => 4.2,
                'reviews' => 23,
            ],
            [
                'id' => 5,
                'name' => 'Dark Green Cargo Pants',
                'image' => asset('images/products/black_tshirt.png'),
                'price' => 110.00,
                'old_price' => 130.00,
                'discount' => '30% Off',
                'rating' => 4.4,
                'reviews' => 109,
            ],
            [
                'id' => 6,
                'name' => 'Orange Headphone',
                'image' => asset('images/products/orange_headphones.png'),
                'price' => 231.00,
                'old_price' => 250.00,
                'discount' => '30% Off',
                'rating' => 4.2,
                'reviews' => 200,
            ],
            [
                'id' => 7,
                'name' => "Kid's Yellow Shoes",
                'image' => asset('images/products/yellow_shoes.png'),
                'price' => 89.00,
                'old_price' => 100.00,
                'discount' => '30% Off',
                'rating' => 4.5,
                'reviews' => 321,
            ],
            [
                'id' => 8,
                'name' => 'Men Dark Brown Wallet',
                'image' => asset('images/products/brown_wallet.png'),
                'price' => 132.00,
                'old_price' => 150.00,
                'discount' => '30% Off',
                'rating' => 4.1,
                'reviews' => 190,
            ],
        ];

        return view('admin.products.grid', compact('products'));
    }

    /**
     * Display the Product Create page.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Display the Product Edit page.
     */
    public function edit($id)
    {
        $product = [
            'id' => $id,
            'name' => 'Men Black Slim Fit T-shirt',
            'category' => 'Fashion',
            'brand' => 'Larkon Fashion',
            'weight' => '300gm',
            'gender' => 'Men',
            'price' => 80.00,
            'discount' => 30,
            'tax' => 3,
            'tag_number' => '36294007',
            'stock' => 465,
            'sizes' => ['XS', 'S', 'M', 'XL', 'XXL', '3XL'],
            'colors' => ['#1e293b', '#eab308', '#cbd5e1', '#ef4444', '#10b981', '#ef4444', '#06b6d4', '#475569'],
            'image' => asset('images/products/black_tshirt.png'),
        ];

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Display the Product Details page.
     */
    public function show($id)
    {
        $product = [
            'id' => $id,
            'name' => 'Men Black Slim Fit T-shirt',
            'rating' => 4.5,
            'reviews_count' => 55,
            'price' => 80.00,
            'old_price' => 100.00,
            'discount' => '30% Off',
            'colors' => ['Dark'],
            'sizes' => ['S', 'M', 'XL', 'XXL'],
            'in_stock' => true,
            'main_image' => asset('images/products/striped_tshirt.png'),
            'thumbnails' => [
                asset('images/products/black_tshirt.png'),
                asset('images/products/striped_tshirt.png'),
                asset('images/products/black_tshirt.png'),
                asset('images/products/striped_tshirt.png'),
            ],
            'specs' => [
                'Date First Available' => '22 September 2023',
                'Department' => 'Men',
                'Manufacturer' => 'Greensboro, NC 27401 Prospa-Pal',
                'ASIN' => 'B0CJMML118',
                'Item model number' => '1137AZ',
                'Country of Origin' => 'U.S.A',
                'Manufacturer Address' => 'Suite 941 89157 Baumbach Views, Gilbertmouth, TX 31542-2135',
                'Parker' => 'Apt. 726 80915 Hung Stream, Rowetown, WV 44364',
            ]
        ];

        return view('admin.products.show', compact('product'));
    }
}
