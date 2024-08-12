<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor_medic;
use App\Models\Productos_medic;
use App\Models\Clientes_farm;
use App\Models\Factura_farm;
use App\Models\Detalle_fac;
use App\Models\Categoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ProveedoresTableSeeder::class]);
        $this->call([ProductosTableSeeder::class]);
        $this->call([ClientesTableSeeder::class]);
        $this->call([FacturaTableSeeder::class]);
        $this->call([Detalle_facTableSeeder::class]);
        $this->call([CategoriaTableSeeder::class]);
       
    }
}
