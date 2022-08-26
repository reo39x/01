@extends('layouts.app')

@section('content')

{{Auth::user()->name}}

<h1>洋服の口コミサイト</h1>
<h3>＞口コミの編集</h3>
<form action="/reviews/{{ $review->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="item">
        <h4>商品名：</h4>
        <select name="review[item_id]">
            @foreach($items as $item)
                @if(old("review.item_id")==null)
                    @if($item->id == $review->item->id)
                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endif
                @else
                    <option value="{{ $item->id }}" {{ old('review.item_id')==$item->id ? "selected" : "" }}>{{ $item->name }}</option>
                @endif
            @endforeach
            
        </select>
    </div>
    <div class="choice">
        <h4>評価：</h4>
        <select name="review[choice_id]">
            @foreach($choices as $choice)
                @if(old("review.choice_id")==null)
                    @if($choice->id == $review->choice->id)
                        <option value="{{ $choice->id }}" selected>{{ $choice->choice }}</option>
                    @else
                        <option value="{{ $choice->id }}">{{ $choice->choice }}</option>
                    @endif
                @else
                    <option value="{{ $choice->id }}" {{ old('review.choice_id')==$choice->id ? "selected" : "" }}>{{ $choice->choice }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="body">
        <h4>口コミ文：</h4>
        <textarea name="review[body]">{{ $review->body }}</textarea>
        <p class="body__error" style="color:red">{{ $errors->first('review.body') }}</p>
    </div>
    <input type="submit" value="保存"/>
</form>

@endsection