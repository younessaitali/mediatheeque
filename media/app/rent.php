<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rent extends Model
{

    public function user()
    {
        return $this->belongsTo('App\users');
    }

    public function order_detail()
    {
        return $this->belongsTo('App\order_details');
    }
}
