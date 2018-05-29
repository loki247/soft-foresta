<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVentas extends Controller {

    public function cotizaciones(){
        return view('ventas.cotizaciones');
    }

    public function detalleCotizacion(Request $request){
        $numCot = $request->get('numCot');
        return view('ventas.detalleCotizacion');
    }

    public function ordenesVenta(){
        return view('ventas.ordenesVenta');
    }

    public function detalleVenta(){
        return view('ventas.detalleVenta');
    }

}
