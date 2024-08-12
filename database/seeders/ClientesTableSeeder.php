<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clientes_farm;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clien= new Clientes_farm();
        $clien->nombre_cli='Alfredo lopez';
        $clien->direc_cli='cra 1a #54-78';
        $clien->numerot_cli='3104587879';
        $clien->foto_cliente='';
        $clien->save();

        $clien= new Clientes_farm();
        $clien->nombre_cli='Ronald ayala';
        $clien->direc_cli='calle 11 #4-27';
        $clien->numerot_cli='3106873637';
        $clien->foto_cliente='';
        $clien->save();

        $clien= new Clientes_farm();
        $clien->nombre_cli='Carolina mancera';
        $clien->direc_cli='diagonal 1 #12-212';
        $clien->numerot_cli='3115415698';
        $clien->foto_cliente='';
        $clien->save();

        $clien= new Clientes_farm();
        $clien->nombre_cli='Constantino Moreno';
        $clien->direc_cli='Carrera 147 #78-410';
        $clien->numerot_cli='3204855029';
        $clien->foto_cliente='';
        $clien->save();
    
    }
}
