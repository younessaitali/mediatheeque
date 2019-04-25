<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    public function admin()
    {
        return $this->belongsTo('Bitfumes\Multiauth\Model\Admin');
    }


    public function media()
    {
        return $this->belongsTo('App\mediatheque');
    }


    public function order()
    {
        return $this->belongsTo('App\orders');
    }
}
