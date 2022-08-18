<?php

namespace App\Http\Controllers;

use App\Item;
use App\Review;
use App\User;
use App\Choice;
use App\Category;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function top(Item $item, Choice $choice)
    {
        return view('review/top')->with(['items' => $item->get(), 'choices' => $choice->get()]);
    }
    
    public function store(ReviewRequest $request, Review $review)
    {
        $input = $request['review'];
        $input += ['user_id' => $request->user()->id];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id);
    }
    
    public function show(Review $review)
    {
        return view('review/review')->with(['review' => $review]);
    }
    
    public function edit(Review $review, Item $item, Choice $choice)
    {
        return view('review/edit')->with(['review' => $review, 'items' => $item->get(), 'choices' => $choice->get()]);
    }
    
    public function update(ReviewRequest $request, Review $review)
    {
        $input_review = $request['review'];
        $input_review += ['user_id' => $request->user()->id];
        $review->fill($input_review)->save();
        return redirect('/reviews/' . $review->id);
    }
    
    public function delete(Review $review)
    {
        $review->delete();
        return redirect('/');
    }
}
