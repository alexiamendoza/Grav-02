<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ley extends Controller
{
    function datosley(){
        return view('ley');
    }

    function calculaley(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
        $gravedad = $request->input('gravedad');
        $masa1 = $request->input('masa1');
        $masa2 = $request->input('masa2');
        $radio = $request->input ('radio');
        $exp = 2;

        $fuerza = floatval($gravedad) * floatval($masa1) * floatval($masa2) / pow($radio,$exp);
        //dd($request);
        return view('showley',['fuerza' => $fuerza]);
    }
}