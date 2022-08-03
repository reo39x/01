<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'body',
        'choice_id',
        'user_id',
        'item_id'
        ];

    // Userに対するリレーション
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Itemに対するリレーション
    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    // Coordinateに対するリレーション
    public function coordinates()
    {
        return $this->hasMany('App\Coordinate');
    }
    
    // Choiceに対するリレーション
    public function choice()
    {
        return $this->belongsTo('App\Choice');
    }
}
