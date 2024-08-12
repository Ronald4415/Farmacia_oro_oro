<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProveedorController;
use Illuminate\Http\Request;
use App\Models\Proveedor_medic;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_pro()
    {
        $prove=Proveedor_medic::all();
        //return $provee;
        return view('/Proveedor/Proveedor_index',compact('prove'));    
    }

    public function creaProve()
    {
        return view('Proveedor/CrearProve');
    }

    public function crea_Prove(Request $campos)
    {
        
        $prove=new proveedor_medic();
        $prove->nom_proveedor=$campos->nomprove;
        $prove->direc_proveedor=$campos->dirprove;
        $prove->num_proveedor=$campos->numprove;
        $prove->pag_web=$campos->webprove;
        $prove->save();

        return redirect()->route('Proveedores_medic');
    }
    public function edit_prove(string $id)
    {
        $provee=proveedor_medic::find($id);
        $Prove2=proveedor_medic::find($provee);

        return view('Proveedor/EditProvee', ['provee'=>$provee]);
    }
    public function eliminar_prove(Request $request)
    {
        $id=$request->dato;
        //return $request;
        $prove=proveedor_medic::find($id);
        $prove->nom_proveedor=$request->nomprove;
        $prove->direc_proveedor=$request->dirprove;
        $prove->num_proveedor=$request->numprove;
        $prove->pag_web=$request->webprove;
        $prove->save();

        return redirect()->route('Proveedores_medic')->with('Proveedor Modificado Correctamente....');
    }

    public function eliminacion($id)
    {
        $prove=proveedor_medic::find($id);
        $prove->delete();

        return redirect()->route('Proveedores_medic')->with('Proveedor Eliminado Correctamente...');

    }


}
