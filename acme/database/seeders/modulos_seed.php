<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class modulos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             DB::table('modulos')->insert([
            'proyectos_id'=>1,
            'codigo_modulo'=>12345,
            'nombre_modulo'=>'Cinco',
            'created_at'=>date('Y-m-d h:m:s')

          ]);

             DB::table('modulos')->insert([
            'proyectos_id'=>2,
            'codigo_modulo'=>145,
            'nombre_modulo'=>'Seis',
            'created_at'=>date('Y-m-d h:m:s')

          ]);
          

    }
}
