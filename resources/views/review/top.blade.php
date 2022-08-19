@extends('layouts.app')

@section('content')

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Review</title>
    </head>
    
    <body>
        <a href="/user">{{Auth::user()->name}}</a>
        
        <h1>洋服の口コミサイト</h1>
        <h2>トップページ</h2>
        <h3>＞投稿されている口コミを見る</h3>
        
        <form action="/reviews" method="POST">
            @csrf
            <h3>＞口コミを投稿する</h3>
            <div class="item">
                <h4>商品名：</h4>
                <select name="review[item_id]">
                    @foreach($items as $item)
                        <option value="{{ $item->id }}" {{ old('review.item_id')==$item->id ? "selected" : "" }}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="choice">
                <h4>評価：</h4>
                <select name="review[choice_id]">
                    @foreach($choices as $choice)
                        <option value="{{ $choice->id }}" {{ old('review.choice_id')==$choice->id ? "selected" : "" }}>{{ $choice->choice }}</option>
                    @endforeach
                </select>
            </div>
            <div class="body">
                <h4>口コミ文：</h4>
                <textarea name="review[body]" placeholder="口コミ内容を書いてください。">{{ old('review.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <input type="submit" value="投稿"/>
        </form>
    </body>
</html>

@endsection