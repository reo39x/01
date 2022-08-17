@extends('layouts.app')

@section('content')

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Review</title>
    </head>
    
    <body>
        {{Auth::user()->name}}
        
        <h1>洋服の口コミサイト</h1>
        <h2>＞過去に投稿した口コミ</h2>
        <div class="own_reviews">
            @foreach ($own_reviews as $review)
                <div class="own_review">
                    <h3 class="own_item">商品名：{{ $review->item->name }}</h3>
                </div>
                <div class="own_choice">
                    <h4>評価：</h4>
                    <p>{{ $review->choice->choice }}</p>
                </div>
                <div class="own_body">
                    <h4>口コミ文：</h4>
                    <p>{{ $review->body }}</p>
                </div>
            @endforeach
        </div>

        <div class='footer'>[<a href='/'>戻る</a>]</div>
        <div class='paginate'>
            {{ $own_reviews -> links() }}
        </div>
        
    </body>
</html>

@endsection