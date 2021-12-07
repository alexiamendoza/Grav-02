<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fuerza extends Controller
{
    function datosfue(){
        return view('fuerza');
    }

    function calculafue(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
        $gravedad = $request->input('gravedad');
        $masa = $request->input('masa');
        

        $fuerza = floatval($masa) * floatval($gravedad);
        //dd($request);
        return view('showfuer',['fuerza' => $fuerza]);
    }
}