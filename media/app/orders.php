<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    public function payment()
    {
        return $this->belongsTo('App\payment');
    }


    public function user()
    {
        return $this->belongsTo('App\users');
    }
}
