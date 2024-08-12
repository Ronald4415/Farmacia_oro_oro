<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Productos_medic;


class ProductosController extends Controller
{

    public function index_produc()
    {
        $Productos=Productos_medic::all();
        //return $provee;
        return view('/Productos/index-productos',compact('Productos')); 
    }

    public function creaProd()
    {
        return view('Productos/crearProductos');
    }


    public function crea_Prod(Request $campos)
    {
        $Productos=new productos_medic();
        $Productos->nom_producto=$campos->nompro;
        $Productos->precio_prod=$campos->prepro;
        $Productos->stock_producto=$campos->stopro;
        $Productos->Categoria_prod=$campos->catepro;
        $Productos->id_Proveedor=$campos->provee_pro;

        $Productos->save();

        return redirect()->route('Productos_prin');
    }

    public function edit_prod(string $id)
    {
        $Productos=productos_medic::find($id);
        $Productos2=productos_medic::find($Productos);

        return view('Productos/Edit_Produc', ['Productos'=>$Productos]);
    }

  
    public function eliminar_Prod(Request $request)
    {
        $id=$request->dato;
        $Productos=productos_medic::find($id);
        $Productos->nom_producto=$request->nompro;
        $Productos->precio_prod=$request->prepro;
        $Productos->stock_producto=$request->stopro;
        $Productos->Categoria_prod=$request->catepro;
        $Productos->id_Proveedor=$request->provee_pro;
        $Productos->save();

        return redirect()->route('Productos_prin')->with('Producto Modificado Correctamente....');
    }

    public function eliminacion($id)
    {
        $Productos=productos_medic::find($id);
        $Productos->delete();

        return redirect()->route('Productos_prin')->with('Producto Eliminado Correctamente...');

    }
}
