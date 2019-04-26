<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    public function product()
    {
        return $this->belongsToMany('App\products');
    }

    public function orderr()
    {
        return $this->belongsTo('App\orders');
    }

    public function shipper()
    {
        return $this->belongsTo('App\shipper');
    }
}
