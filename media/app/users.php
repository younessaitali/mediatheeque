<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class users extends Authenticatable
{

    protected $fillable = [

        'name', 'email', 'password', 'Adresse', 'Code_postale', 'City'

    ];
}
