<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    //
    protected $fillable = [
        'to', 
        'from', 
        'heading', 
        'body',
    ];

}
