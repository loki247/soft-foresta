<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorIndex extends Controller{
    
    public function index(){
		return view('index');
	}

	public function dashboard(){
    	return view('dashboard/dashboard');
	}

	public function marketingVentas(){
		return view('marketingVentas/marketingVentas');
	}

	public function finanzas(){
		return view('finanzas/finanzas');
	}

	public function operaciones(){
		return view('operaciones/operaciones');
	}

	public function empresa(){
		return view('empresa/empresa');
	}

	public function inventario(){
		return view('inventario/inventario');
	}

	public function logistica(){
		return view('logistica/logistica');
	}
	public function mantenimiento(){
		return view('mantenimiento/mantenimiento');
	}

	public function configuracion(){
		return view('configuracion/configuracion');
	}

	public function usuario(){
		return view('usuario/usuario');
	}

	public function registroUsuario(){
		return view('usuario/registro');
	}
}
