<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Reviewに対するリレーション
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    // Shopに対するリレーション
    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }

    // Categoryに対するリレーション
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
