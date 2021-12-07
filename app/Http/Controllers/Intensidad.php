<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Intensidad extends Controller
{
    function datosint(){
        return view('intensidad');
    }

    function calculaint(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
        $gravedad = $request->input('gravedad');
        $masa = $request->input('masa');
        $radio = $request->input('radio');
        $exp = 2;

        $intensidad = floatval($gravedad) * floatval($masa) / pow($radio,$exp);
        //dd($request);
        return view('showint',['intensidad' => $intensidad]);
    }
}