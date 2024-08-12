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
        Schema::create('proveedor_medics', function (Blueprint $table) {
            $table->id();
            $table->string('nom_proveedor',70);
            $table->string('direc_proveedor',70);
            $table->string('num_proveedor',70);
            $table->string('pag_web',70);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor_medics');
    }
};
