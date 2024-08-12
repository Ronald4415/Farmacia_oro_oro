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
        Schema::create('detalle_facs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_factura');
            $table->foreign('id_factura')->references('id')->on('factura_farms');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('productos_medics');
            $table->string('descu_pro');
            $table->string('cantidad_pro');
            $table->string('monto_vent');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_facs');
    }
};
