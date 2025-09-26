<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
          protected$table="proyectos";
    protected $fillable=[
        "nombre_proyectos",
        'direccion',
        'zona_id',
        'user_id',
        'precio',
        'datos_id',
        
    ];
}
