<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Velo extends Controller
{
    function datosv(){
        return view('velo');
    }

    function calculav(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
        $velo = $request->input('velo');
        $masa = $request->input('masa');
        $gravedad = $request->input('gravedad');
        $radio = $request->input ('radio');

        $velo = sqrt(2 * floatval ($gravedad) * floatval ($masa) / floatval ($radio));
        //dd($request);
        return view('showvelo',['velo' => $velo]);
    }
}