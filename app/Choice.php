<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    // Reviewに対するリレーション
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
