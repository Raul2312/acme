<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class zonas_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('zonas')->insert([
            'direccion'=>'colonia villahermosa ',
            'created_at'=>date('Y-m-d h:m:s')
          ]);

         DB::table('zonas')->insert([
            'direccion'=>'colonia nuevo laredo ',
            'created_at'=>date('Y-m-d h:m:s')
          ]);
    }
}
