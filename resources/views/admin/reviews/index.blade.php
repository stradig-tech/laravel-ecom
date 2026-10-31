@extends('layouts.admin')

@section('title', 'Reviews List - Larkon Admin')
@section('page_title', 'REVIEWS LIST')

@section('content')
<div class="grid-4-col">
    @foreach($reviews as $review)
    <div class="review-card">
        <!-- Top Section: Date, Comment, Rating -->
        <div class="review-card-top">
            <div class="review-date-meta">
                Reviewed in {{ $review['country'] }} on {{ $review['date'] }}
            </div>
            <div class="review-text-content">
                "{{ $review['comment'] }}"
            </div>
            <div class="review-rating-line">
                <div class="stars">
                    @for($i = 0; $i < $review['stars']; $i++)
                        <i class="fa-solid fa-star"></i>
                    @endfor
                </div>
                <span class="review-quality-tag">{{ $review['badge'] }}</span>
            </div>
        </div>

        <!-- Bottom Section: Orange Author Card with Overlapping Avatar & Floating Teal Quote Icon -->
        <div class="review-card-bottom">
            <img src="{{ $review['avatar'] }}" alt="{{ $review['author'] }}" class="review-author-avatar">
            
            <div class="review-author-info">
                <div class="review-author-name">{{ $review['author'] }}</div>
                <div class="review-author-role">{{ $review['role'] }}</div>
            </div>

            <div class="review-quote-icon">
                <i class="fa-solid fa-quote-right"></i>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
