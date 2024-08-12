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
        Schema::create('clientes_farms', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cli');
            $table->string('direc_cli');
            $table->string('numerot_cli');
            $table->string('foto_cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes_farms');
    }
};
