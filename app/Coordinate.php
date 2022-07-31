<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordinate extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'image_url',
        'reactions_count',
        'review_id'
        ];

    // Reviewに対するリレーション
    public function review()
    {
        return $this->belongsTo('App\Review');
    }
}
