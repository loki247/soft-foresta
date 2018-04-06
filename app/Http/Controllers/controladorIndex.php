<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorIndex extends Controller{
    
    public function index(){
		return view('index');
	}

	public function archivos(){
    	return view('archivos/archivos');
	}

	public function contabilidad(){
		return view('contabilidad/contabilidad');
	}

	public function logistica(){
		return view('logistica/logistica');
	}

	public function produccion(){
		return view('produccion/produccion');
	}

	public function parametros(){
		return view('parametros/parametros');
	}

	public function servicios(){
		return view('servicios/servicios');
	}

	public function predios(){
		return view('predios/predios');
	}

	public function configuracion(){
		return view('configuracion/configuracion');
	}
	public function usuario(){
		return view('usuario/usuario');
	}
}
