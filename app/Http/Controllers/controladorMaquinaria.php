<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class controladorMaquinaria extends Controller{


    public function registrarMaquinaria(Request $request){

        DB::table('maquinaria')->insert([
            "nombre"=>$request->input('nombreMaquina'),
            "codigo"=>$request->input('codigoInterno'),
            "marca"=>$request->input('marca'),
            "modelo"=>$request->input('modelo'),
            "ano"=>$request->input('anoMaquina'),
            "seccion"=>$request->input('seccion'),
            "horometro"=>$request->input('horometro')
        ]);

        return view('mantenimiento.registroMaquinaria');
    }
}
