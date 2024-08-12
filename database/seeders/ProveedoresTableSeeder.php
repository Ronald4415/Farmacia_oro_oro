<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor_medic;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provee=new proveedor_medic();
        $provee->nom_proveedor="Genfar";
        $provee->direc_proveedor="calle 45 #12-45";
        $provee->num_proveedor="(601) 45548";
        $provee->pag_web="";
        $provee->save();

        $provee=new proveedor_medic();
        $provee->nom_proveedor="Tecnoquimicas";
        $provee->direc_proveedor="cra 4 #45a-78";
        $provee->num_proveedor="(601) 74851556";
        $provee->pag_web="";
        $provee->save();

        $provee=new proveedor_medic();
        $provee->nom_proveedor="Bayer";
        $provee->direc_proveedor="diagonal 23 #89a-12";
        $provee->num_proveedor="(601) 4415785";
        $provee->pag_web="";
        $provee->save();

        $provee=new proveedor_medic();
        $provee->nom_proveedor="Abbott";
        $provee->direc_proveedor="calle 1a #12c-78";
        $provee->num_proveedor="(601) 4518254";
        $provee->pag_web="";
        $provee->save();

    }
}
