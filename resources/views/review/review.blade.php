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
            <h2>＞投稿した口コミ</h2>
            <div class="item">
                <h3>商品名：{{ $review->item->name }}</h3>
            </div>
            <div class="choice">
                <h4>評価：</h4>
                <p>{{ $review->choice->choice }}</p>
            </div>
            <div class="body">
                <h4>口コミ文：</h4>
                <p>{{ $review->body }}</p>
            </div>
            
            <a href="/">戻る</a>
        </form>
    </body>
</html>

@endsection