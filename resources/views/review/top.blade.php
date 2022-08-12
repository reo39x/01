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
        <h2>＞投稿されている口コミを見る</h2>
        
        <form action="/reviews" method="POST">
            @csrf
            <h2>＞口コミを投稿する</h2>
            <div class="item">
                <h3>商品名：</h3>
                <select name="review[item_id]">
                    @foreach($items as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="choice">
                <h3>評価：</h3>
                <select name="review[choice_id]">
                    @foreach($choices as $choice)
                        <option value="{{ $choice->id }}">{{ $choice->choice }}</option>
                    @endforeach
                </select>
            </div>
            <div class="body">
                <h3>口コミ文：</h3>
                <textarea name="review[body]" placeholder="口コミ内容を書いてください。">{{ old('review.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
            </div>
            <input type="submit" value="投稿"/>
        </form>
    </body>
</html>

@endsection