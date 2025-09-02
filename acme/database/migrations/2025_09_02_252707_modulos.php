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
               schema::create('modulos',function(Blueprint $table){
        $table->id();
        $table->foreignId('proyectos_id')->constrained('proyectos');
        $table->integer('codigo_modulo');
        $table->string('nombre_modulo');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
             schema::dropIfExits('modulos');
    }
};
