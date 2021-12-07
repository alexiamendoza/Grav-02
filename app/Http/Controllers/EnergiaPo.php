<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnergiaPo extends Controller
{
    function datosep(){
        return view('energiapo');
    }

    function calculaep(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
       
        $energiapo = $request->input('energiapo');
        $masa = $request->input('masa');
        $potencial = $request->input ('potencial');

        $energiapo = floatval($masa) * floatval($potencial);
        //dd($request);
        return view('showenpo',['energiapo' => $energiapo]);
    }
}