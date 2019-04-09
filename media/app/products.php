<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $casts = [
        '_tags' => 'array',
        'type' => 'array'
    ];
}
