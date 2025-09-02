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
          schema::create('datos',function(Blueprint $table){
        $table->id();
        $table->foreignId('users_id')->constrained('users');
        $table->string('rfc');
         $table->string('facturas');
         $table->string('forma_pago');
        $table->timestamps();
    }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
           schema::dropIfExits('datos');
    }
};
