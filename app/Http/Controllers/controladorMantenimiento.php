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

    public function editarMaquina(){
        return view('mantenimiento.editarMaquina');
    }

    public function registroGuardado(Request $request){
        return $request->all();
    }

    public function registroPlanMantenimiento(){
        return view('mantenimiento.planMantenimiento');
    }

    public function protocolos(){
        return view('mantenimiento.protocolos');
    }

    public function verProtocolosPorMaquina(){
        return view('mantenimiento.verProtocolosPorMaquina');
    }

    public function generarOrdenDeTrabajo(){
        return view('mantenimiento.generarOrdenDeTrabajo');
    }

    public function ordenesDeTrabajo(){
        return view('mantenimiento.ordenesDeTrabajo');
    }

    public function ordenesDeCompra(){
        return view('mantenimiento.ordenesDeCompra');
    }
}
