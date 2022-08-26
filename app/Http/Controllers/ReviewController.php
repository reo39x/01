<?php

namespace App\Http\Controllers;

use App\Item;
use App\Review;
use App\User;
use App\Choice;
use App\Category;
use App\Shop;

use App\Http\Requests\ReviewRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function top(Shop $shop, Category $category, Item $item, Choice $choice)
    {
        return view('review/top')->with(['shops' => $shop->get(), 'categories' => $category->get(), 'items' => $item->get(), 'choices' => $choice->get()]);
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
    
    public function research(Request $request, Item $item, Review $review)
    {
        $research_shop = Shop::find($request->input('shop_id'));
        $research_category = $request->input('category_id');
        
        $items = $research_shop->items;
        $reviews = collect([]);
        foreach($items as $item) {
            if ($item->category_id == $research_category) {
                $reviews = $reviews->merge(Review::where('item_id', $item->id)->get());
            }
        }
        
        return view('review/research')->with(['research_reviews' => $reviews]);
    }
}
