<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Clientes_farm;

class ClientesController extends Controller
{
    public function index_cli()
    {
        $Cliente=Clientes_farm::all();
        return view('/Clientes/Clientes_index',compact('Cliente'));    
    }

    public function creaClien()
    {
        return view('Clientes/Crear_Clien');
    }

    public function crea_Clien(Request $campos)
    {
        
        $Cliente=new clientes_farm();
        $Cliente->nombre_cli=$campos->nomcli;
        $Cliente->direc_cli=$campos->dircli;
        $Cliente->numerot_cli=$campos->numcli;
        $Cliente->foto_cliente=$campos->nomb_archi;

        if($campos->hasfile('nomb_archi'))
        {
            $nomb_archi=$campos->file('nomb_archi');
            $nombre_img=Str::slug($campos->nomb_archi).".".$nomb_archi->guessExtension();
            
            $ruta=public_path('img/');
            $nomb_archi->move($ruta,$nombre_img);
            
            $Cliente->foto_cliente=$ruta.$nombre_img;
            
            
        }
        $Cliente->save();

        return redirect()->route('Clientes_farma');
    }
    //-----

    public function edit_clien(string $id)
    {
        $clien=clientes_farm::find($id);
        $prove=clientes_farm::find($clien);

        return view('Clientes/Edit_clien', ['clien'=>$clien]);
    }

  
    public function eliminar_cli(Request $request)
    {
        $id=$request->dato;
        //return $request;
        $Cliente=clientes_farm::find($id);
        $Cliente->nombre_cli=$request->nomcli;
        $Cliente->direc_cli=$request->dircli;
        $Cliente->numerot_cli=$request->numcli;
        $Cliente->foto_cliente=$request->nomb_archi;

         if($request->hasfile('nomb_archi'))
        {
            $nomb_archi=$request->file('nomb_archi');
            $nombre_img=Str::slug($request->nomb_archi).".".$nomb_archi->guessExtension();
            //return $nombre_img;
            $ruta=public_path('img/');
            $nomb_archi->move($ruta,$nombre_img);
            //return $nombre_img;
            $Cliente->foto_cliente=$ruta.$nombre_img;
            //return $campos->nomb_archi;
            
        }

        $Cliente->save();

        return redirect()->route('Clientes_farma')->with('Cliente Modificado Correctamente....');
    }

    public function eliminacion($id)
    {
        $Cliente=clientes_farm::find($id);
        $Cliente->delete();

        return redirect()->route('Clientes_farma')->with('Cliente Eliminado Correctamente...');

    }


}
