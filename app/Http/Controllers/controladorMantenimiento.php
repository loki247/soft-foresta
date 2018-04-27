<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorMantenimiento extends Controller{

    public function registroMaquinaria(){
        return view('mantenimiento.registroMaquinaria');
    }

    public function maquinariaRegistrada(){
        return view('mantenimiento.maquinariaRegistrada');
    }

    public function registroGuardado(Request $request){
        return $request->all();
    }

    public function registroPlanMantenimiento(){
        return view('mantenimiento.planMantenimiento');
    }
}
