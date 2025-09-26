<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
          protected$table="modulos";
    protected $fillable=[
        "proyectos_id",
        'codigo_modulo',
        'nombre_modulo',
      
        
    ];
}
