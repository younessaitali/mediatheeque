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
}
