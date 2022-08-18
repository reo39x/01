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
        <h2>マイページ</h2>
        <h3>＞過去に投稿した口コミ</h3>
        <div class="own_reviews">
            @foreach ($own_reviews as $review)
                <div class="own_item">
                    <h4>商品名：{{ $review->item->name }}</h4>
                </div>
                <div class="own_category">
                    <h4>カテゴリー名：</h4>
                    <p>{{ $review->item->category->name }}</p>
                </div>
                <div class="own_choice">
                    <h4>評価：</h4>
                    <p>{{ $review->choice->choice }}</p>
                </div>
                <div class="own_body">
                    <h4>口コミ文：</h4>
                    <p>{{ $review->body }}</p>
                </div>
                <div class='own_updated_at'>
                    <p>最終更新日時：{{ $review->updated_at }}</p>
                </div>
                <p class="edit">[<a href="/reviews/{{ $review->id }}/edit">編集</a>]</p>
                <form action="/reviews/{{ $review->id }}" id="form_delete_{{ $review->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type='button' onclick="return deleteReview(this, {{ $review->id }});">削除</button>
                </form>
            @endforeach
        </div>

        <div class='footer'>[<a href='/'>戻る</a>]</div>
        <div class='paginate'>
            {{ $own_reviews -> links() }}
        </div>
        
        <script>
            function deleteReview(e, id)
            {
                'use strict';
                if (confirm('削除すると復元できません。\n本当に削除しますか？'))
                {
                    document.getElementById('form_delete_' + id).submit();
                }
            }
        </script>
    </body>
</html>

@endsection