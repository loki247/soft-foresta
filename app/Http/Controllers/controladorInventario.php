<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorInventario extends Controller{

    public function registroInventario(){
        return view('inventario.registroInventario');
    }

    public function inventarioRegistrado(){
        return view('inventario.inventarioRegistrado');
    }

    public function detalleInsumo(){
        return view('inventario.detalleInsumo');
    }
}
