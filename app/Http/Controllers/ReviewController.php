<?php

namespace App\Http\Controllers;

use App\Item;
use App\Review;
use App\User;
use App\Choice;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function top(Item $item, Choice $choice)
    {
        return view('review/top')->with(['items' => $item->get(), 'choices' => $choice->get()]);
    }
    
    public function store(Request $request, Review $review)
    {
        $input = $request['review'];
        $input += ['user_id' => $request -> user() -> id];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
}
