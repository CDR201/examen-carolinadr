<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalles extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = [
    	'facturas_id ',
        'productos_id',
        'cantidad',
    ];}
