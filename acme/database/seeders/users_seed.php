<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('users')->insert([
            'nombre'=>'Raul',
            'apellido'=>'Madrid',
            'email'=>'raulmadridflores1202@gmail.com',
            'telefono'=>636,
            'password'=>Hash::make('123'),
            'tipo'=>'Cliente',
            'created_at'=>date('Y-m-d h:m:s')

          ]);

              DB::table('users')->insert([
            'nombre'=>'Sebastian',
            'apellido'=>'Flores',
            'email'=>'sebastianflore1s@gmail.com',
            'telefono'=>634,
            'password'=>Hash::make('123'),
            'tipo'=>'Arquitecto',
            'created_at'=>date('Y-m-d h:m:s')

          ]);
             
    }
}
