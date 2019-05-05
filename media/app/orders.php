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

    protected $fillable = [
        'user_id', 'payment_id', 'order_date', 's_date', 'shipper_id', 'payment_date', 'status', 'discount'
    ];
}
