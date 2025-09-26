<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
            protected$table="planos";
    protected $fillable=[
        "modulo_id",
        'proyectos_id',
        'numero_hoja',
        'actualizacion_anterior',
        'planta',
        
    ];
}
