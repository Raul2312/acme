<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             DB::table('datos')->insert([
            'users_id'=>1,
            'rfc'=>'2323232323',
            'facturas'=>'si',
            'forma_pago'=>'transferencia',
            'created_at'=>date('Y-m-d h:m:s')

          ]);

            DB::table('datos')->insert([
            'users_id'=>2,
            'rfc'=>'2323223233',
            'facturas'=>'no',
            'forma_pago'=>'Efectivo',
            'created_at'=>date('Y-m-d h:m:s')

          ]);
    }
}
