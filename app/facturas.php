<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facturas extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'fecha',
        'clientes_id',
    	
    ];
}
