<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detalle_fac;

class Detalle_facTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $deta=new Detalle_fac();
        $deta->descu_pro='%4';
        $deta->cantidad_pro='45 unids';
        $deta->monto_vent='$1.000.000';
        $deta->id_producto='1';
        $deta->id_factura='1';
        $deta->save();

        $deta=new Detalle_fac();
        $deta->descu_pro='%0';
        $deta->cantidad_pro='2 unids';
        $deta->monto_vent='$1.000';
        $deta->id_producto='2';
        $deta->id_factura='2';
        $deta->save();

        $deta=new Detalle_fac();
        $deta->descu_pro='%7';
        $deta->cantidad_pro='12 unids';
        $deta->monto_vent='$40.000';
        $deta->id_producto='2';
        $deta->id_factura='3';
        $deta->save();

        $deta=new Detalle_fac();
        $deta->descu_pro='%10';
        $deta->cantidad_pro='70 unids';
        $deta->monto_vent='$203.000';
        $deta->id_producto='3';
        $deta->id_factura='4';
        $deta->save();
    }
}
