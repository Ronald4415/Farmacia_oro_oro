<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    
    public function index_cate()
    {
        $Cate=Categoria::all();
        return view('/Categorias/Categoria_index',compact('Cate'));    
    }

  
    public function creaCate()
    {
        return view('Categorias/Crear_Categoria');
    }


    public function crea_Cate(Request $campos)
    {
        $Cate=new categoria();
        $Cate->Desc_categoria=$campos->DesCate;
        $Cate->save();

        return redirect()->route('Categorias_prod');
    }


    public function Edit_cate(string $id)
    {
        $Cate=categoria::find($id);
        $Cate2=categoria::find($Cate);

        return view('Categorias/Edit_Categoria', ['Cate'=>$Cate]);
    }


    public function Eliminar_Cate(Request $request)
    {
        $id=$request->dato;
        $Cate=categoria::find($id);
        $Cate->Desc_categoria=$request->DesCate;
        $Cate->save();

        return redirect()->route('Categorias_prod')->with('Categoria Modificado Correctamente....');
    }

  
    public function Eliminacion(Request $request, string $id)
    {
        $Cate=categoria::find($id);
        $Cate->delete();

        return redirect()->route('Categorias_prod')->with('Categoria Eliminado Correctamente...');
    }

}
