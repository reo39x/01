@extends('layouts.app')

@section('content')

{{Auth::user()->name}}

<h1>洋服の口コミサイト</h1>
<h3>＞絞り込み条件を変えて検索する</h3>
<h3>＞検索結果</h3>
@if($research_reviews->count())
    <div class="research_reviews">
        @foreach ($research_reviews as $review)
            <div class="reserch_item">
                <h4>商品名：{{ $review->item->name }}</h4>
            </div>
            <div class="research_category">
                <h4>カテゴリー名：</h4>
                <p>{{ $review->item->category->name }}</p>
            </div>
            <div class="research_shop">
                <h4>ショップ名：</h4>
                <p>{{ $review->item->shop->name }}</p>
            </div>
            <div class="research_choice">
                <h4>評価：</h4>
                <p>{{ $review->choice->choice }}</p>
            </div>
            <div class="research_body">
                <h4>口コミ文：</h4>
                <p>{{ $review->body }}</p>
            </div>
            <div class='research_updated_at'>
                <p>最終更新日時：{{ $review->updated_at }}</p>
            </div>
        @endforeach
    </div>
@else
    <p>該当する口コミはありません。</p>
@endif

<div class='footer'>[<a href='/'>戻る</a>]</div>

@endsection