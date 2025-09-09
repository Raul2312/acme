<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class planos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('planos')->insert([
            'modulo_id'=>1,
            'proyectos_id'=>2,
            'numero_hoja'=>354,
            'actualizacion_anterior'=>'actualizado',
              'planta'=>'superior',
            'created_at'=>date('Y-m-d h:m:s')

          ]);

             DB::table('planos')->insert([
            'modulo_id'=>2,
            'proyectos_id'=>1,
            'numero_hoja'=>450,
            'actualizacion_anterior'=>'antiguo',
              'planta'=>'inferior',
            'created_at'=>date('Y-m-d h:m:s')

          ]);
    }
}
