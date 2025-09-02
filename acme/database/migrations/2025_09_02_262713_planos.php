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
        schema::create('planos',function(Blueprint $table){
        $table->id();
        $table->foreignId('modulo_id')->constrained('modulos');
        $table->foreignId('proyectos_id')->constrained('proyectos');
        $table->integer('numero_hoja');
         $table->string('actualizacion_anterior');
         $table->string('planta');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExits('planos');
    }
};
