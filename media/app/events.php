<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    public function product()
    {
        return $this->belongsTo('App\products');
    }
}
