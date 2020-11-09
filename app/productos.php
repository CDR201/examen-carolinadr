<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'nombre',
        'precio',
        'stock',
    ];
}
