<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Factura_farm;

class FacturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $factu=new Factura_farm();
        $factu->fecha_fac='4 de abril de 2023';
        $factu->id_cliente='1';
        $factu->descuento_ven='%12';
        $factu->monto_ven='$14.000';
        $factu->save();

        $factu=new Factura_farm();
        $factu->fecha_fac='2 de septiembre de 2022';
        $factu->id_cliente='2';
        $factu->descuento_ven='%44';
        $factu->monto_ven='$445.000';
        $factu->save();

        $factu=new Factura_farm();
        $factu->fecha_fac='31 de mayo de 2021';
        $factu->id_cliente='3';
        $factu->descuento_ven='%48';
        $factu->monto_ven='$1.000.000';
        $factu->save();

        $factu=new Factura_farm();
        $factu->fecha_fac='3 de junio de 2023';
        $factu->id_cliente='4';
        $factu->descuento_ven='%50';
        $factu->monto_ven='$500.000';
        $factu->save();


    }
}
