<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Itemに対するリレーション
    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
