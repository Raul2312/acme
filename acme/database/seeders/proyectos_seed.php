<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proyectos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('proyectos')->insert([
            'nombre_proyectos'=>'Edificio',
            'direccion'=>'col villahermosa 905',
            'zona_id'=>1,
            'users_id'=>1,
            'precio'=>45000,
            'datos_id'=>2,
            'created_at'=>date('Y-m-d h:m:s')

          ]);

             DB::table('proyectos')->insert([
            'nombre_proyectos'=>'Parque',
            'direccion'=>'col villahermosa 809',
            'zona_id'=>2,
            'users_id'=>2,
            'precio'=>100000,
            'datos_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')

          ]);


    }
}
