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
        <h2>投稿確認ページ</h2>
        <h3>＞投稿した口コミ</h3>
        <div class="item">
            <h4>商品名：{{ $review->item->name }}</h4>
        </div>
        <div class="choice">
            <h4>評価：</h4>
            <p>{{ $review->choice->choice }}</p>
        </div>
        <div class="body">
            <h4>口コミ文：</h4>
            <p>{{ $review->body }}</p>
        </div>
        
        <p class="edit">[<a href="/reviews/{{ $review->id }}/edit">編集</a>]</p>
        
        <form action="/reviews/{{ $review->id }}" id="form_delete" method="POST">
            @csrf
            @method('DELETE')
            <button type='button' onclick="return deleteReview(this);">削除</button>
        </form> 
        
        <a href="/">戻る</a>
        
        <script>
            function deleteReview(e)
            {
                'use strict';
                if (confirm('削除すると復元できません。\n本当に削除しますか？'))
                {
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>

@endsection