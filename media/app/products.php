<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $casts = [
        'images' => 'array',
        'tags' => 'array'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\categorie');
    }


    public function option()
    {
        return $this->belongsTo('App\option');
    }

    protected $fillable = [

        'title', 'description', 'price', 'promo_price', 'categories_id', 'images', 'option_id', 'quantity', 'tags', 'disp', 'mult', 'stars'

    ];
}
