<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    $this->call(users_seed::class);
   $this->call(zonas_seed::class);
   $this->call(datos_seed::class);
    $this->call(proyectos_seed::class);
   $this->call(modulos_seed::class);
   $this->call(planos_seed::class);
    }
}
