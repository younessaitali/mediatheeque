<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{

    public function user()
    {
        return $this->belongsTo('App\users');
    }

    public function product()
    {
        return $this->belongsToMany('App\products');
    }
}
