<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class PlanoController extends Controller
{
   public function getPlanos(){
        /**Select * from users */
        $data = Plano::all();
        //dd($data);
        return view("admin.planos")
        ->with('planos',$data);
    }

    public function createPlanos(Request $request){
       // dd($request->email);
        $request->validate([
        "modulo_id" => "required|integer|exists:modulos,id",
    "proyectos_id" => "required|integer|exists:proyectos,id", //
    "numero_hoja" => "required|string|max:50|unique:planos,numero_hoja",
    "actualizacion_anterior" => "required|string|min:4|max:255", // 
    "planta" => "required|string|min:3|max:100" //e
        ]);

        //Guardar Registro

        $Plano = new Plano();
        $Plano->modulo_id=$request->modulo_id;
        $Plano->proyectos_id=$request->proyectos_id;
        $Plano->numero_hoja=($request->numero_hoja);
        $Plano->actualizacion_anterior=$request->actualizacion_anterior;
        $Plano->planta=$request->planta;
        $Plano->save();
        return redirect()
            ->back()
            ->with('success',"Plano Insertado correctamente");
        
    }
}
