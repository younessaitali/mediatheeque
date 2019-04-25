<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub extends Model
{

    public function sub_type()
    {
        return $this->belongsTo('App\sub_type');
    }


    public function payment()
    {
        return $this->belongsTo('App\payment');
    }
}
