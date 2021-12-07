<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Potencial extends Controller
{
    function datospot(){
        return view('potencial');
    }

    function calculapot(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
        $gravedad = $request->input('gravedad');
        $masa = $request->input('masa');
        $radio = $request->input ('radio');
        $potencial = $request->input ('potencial');

        $potencial = floatval($gravedad) * floatval($masa) / floatval($radio);
        //dd($request);
        return view('showpot',['potencial' => $potencial]);
    }
}