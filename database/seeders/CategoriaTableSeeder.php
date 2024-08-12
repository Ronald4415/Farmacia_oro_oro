<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catego=new Categoria();
        $catego->Desc_categoria='ortopedicos';
        $catego->save();

        $catego=new Categoria();
        $catego->Desc_categoria='cuidado capilar';
        $catego->save();

        $catego=new Categoria();
        $catego->Desc_categoria='bebes';
        $catego->save();

        $catego=new Categoria();
        $catego->Desc_categoria='suplementos vitaminicos';
        $catego->save();


    }
}
