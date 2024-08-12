<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Productos_medic;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produ=new Productos_medic();
        $produ->nom_producto='jarave para la  tos';
        $produ->precio_prod='$25.000';
        $produ->stock_producto='10 unids';
        $produ->Categoria_prod='1';
        $produ->id_Proveedor='1';
        $produ->save();

        $produ=new Productos_medic();
        $produ->nom_producto='acetaminofen';
        $produ->precio_prod='$2.000';
        $produ->stock_producto='100 unids';
        $produ->Categoria_prod='2';
        $produ->id_Proveedor='1';
        $produ->save();

        $produ=new Productos_medic();
        $produ->nom_producto='Metoclopramida';
        $produ->precio_prod='$3.000';
        $produ->stock_producto='1.000 unids';
        $produ->Categoria_prod='3';
        $produ->id_Proveedor='1';
        $produ->save();

        $produ=new Productos_medic();
        $produ->nom_producto='Pedialyte';
        $produ->precio_prod='$10.000';
        $produ->stock_producto='55 unids';
        $produ->Categoria_prod='4';
        $produ->id_Proveedor='1';
        $produ->save();

        $produ=new Productos_medic();
        $produ->nom_producto='noxpirin';
        $produ->precio_prod='$5.000';
        $produ->stock_producto='224 unids';
        $produ->Categoria_prod='1';
        $produ->id_Proveedor='1';
        $produ->save();

    }
}