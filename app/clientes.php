<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'nombre',

    ];
}
