<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnergiaCi extends Controller
{
    function datosci(){
        return view('energiaci');
    }

    function calculaci(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
       
        $energiaci = $request->input('energiaci');
        $masa = $request->input('masa');
        $potencial = $request->input ('potencial');
        $exp = 2;

        $energiaci = 1/2 * floatval($masa) * pow($potencial,$exp);
        //dd($request);
        return view('showenci',['energiaci' => $energiaci]);
    }
}