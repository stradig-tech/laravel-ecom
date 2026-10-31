@extends('layouts.admin')

@section('title', 'Product List - Larkon Admin')
@section('page_title', 'PRODUCT LIST')

@section('content')
<div class="larkon-card">
    <div class="larkon-card-header">
        <h4 class="card-title">All Product List</h4>
        <div style="display: flex; gap: 12px; align-items: center;">
            <a href="{{ route('admin.products.create') }}" class="btn-larkon btn-primary-larkon">
                <i class="fa-solid fa-plus"></i> Add Product
            </a>
            <select class="form-select" style="width: 140px; height: 38px;">
                <option>This Month</option>
                <option>This Week</option>
                <option>This Year</option>
            </select>
        </div>
    </div>

    <div class="table-responsive">
        <table class="larkon-table">
            <thead>
                <tr>
                    <th style="width: 40px; text-align: center;">
                        <input type="checkbox" style="accent-color: #ff5e2b;">
                    </th>
                    <th>Product Name & Size</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>Rating</th>
                    <th style="text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td style="text-align: center;">
                        <input type="checkbox" style="accent-color: #ff5e2b;">
                    </td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="width: 48px; height: 48px; background: #f8fafc; border-radius: 8px; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0;">
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" style="max-width: 85%; max-height: 85%; object-fit: contain;">
                            </div>
                            <div>
                                <div style="font-weight: 700; color: #1e293b; font-size: 13.5px; margin-bottom: 2px;">{{ $product['name'] }}</div>
                                <div style="font-size: 11.5px; color: #94a3b8;">Size : {{ $product['sizes'] }}</div>
                            </div>
                        </div>
                    </td>
                    <td style="font-weight: 700; color: #1e293b;">{{ $product['price'] }}</td>
                    <td>
                        <div style="font-size: 12.5px; font-weight: 600; color: #1e293b;">{{ $product['stock'] }}</div>
                        <div style="font-size: 11.5px; color: #94a3b8;">{{ $product['sold'] }}</div>
                    </td>
                    <td><span style="font-weight: 500; color: #475569;">{{ $product['category'] }}</span></td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 4px;">
                            <span class="rating-stars" style="font-size: 12px;"><i class="fa-solid fa-star"></i></span>
                            <span style="font-weight: 700; font-size: 12.5px; color: #1e293b;">{{ $product['rating'] }}</span>
                            <span style="font-size: 11.5px; color: #94a3b8;">{{ $product['reviews'] }} Review</span>
                        </div>
                    </td>
                    <td style="text-align: right;">
                        <div style="display: inline-flex; gap: 6px;">
                            <a href="{{ route('admin.products.show', $product['id']) }}" class="action-btn" title="View">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.products.edit', $product['id']) }}" class="action-btn" title="Edit">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <button class="action-btn btn-delete" title="Delete">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination Footer -->
    <div style="padding: 20px 24px; border-top: 1px solid var(--larkon-border); display: flex; align-items: center; justify-content: flex-end; gap: 8px;">
        <button class="btn-larkon btn-light-larkon" style="padding: 6px 14px; font-size: 12px;">Previous</button>
        <button class="btn-larkon btn-primary-larkon" style="padding: 6px 14px; font-size: 12px;">1</button>
        <button class="btn-larkon btn-light-larkon" style="padding: 6px 14px; font-size: 12px;">2</button>
        <button class="btn-larkon btn-light-larkon" style="padding: 6px 14px; font-size: 12px;">3</button>
        <button class="btn-larkon btn-light-larkon" style="padding: 6px 14px; font-size: 12px;">Next</button>
    </div>
</div>
@endsection
