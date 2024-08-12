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
        Schema::create('productos_medics', function (Blueprint $table) {
            $table->id();
            $table->string('nom_producto');
            $table->string('precio_prod');
            $table->string('stock_producto');
            $table->unsignedBigInteger('Categoria_prod');
            //$table->foreign('Categoria_prod')->references('id')->on('categorias');
            $table->unsignedBigInteger('id_Proveedor');
            $table->foreign('id_Proveedor')->references('id')->on('proveedor_medics');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('productos_medics');
    }
};
