<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('proyectos',function(Blueprint $table){
        $table->id();
        $table->string('nombre_proyectos');
        $table->string('direccion');
        $table->foreignId('zona_id')->constrained('zonas');
        $table->foreignId('users_id')->constrained('users');
        $table->decimal('precio');
        $table->foreignId('datos_id')->constrained('datos');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
             schema::dropIfExits('proyectos');
    }
};
