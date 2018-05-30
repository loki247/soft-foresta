<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorMarketingVentas extends Controller{

    public function cotizaciones(){
        return view('marketingVentas.cotizaciones');
    }

    public function detalleCotizacion(Request $request){
        $numCot = $request->get('numCot');
        return view('marketingVentas.detalleCotizacion');
    }

    public function ordenesVenta(){
        return view('marketingVentas.ordenesVenta');
    }

    public function detalleVenta(){
        return view('marketingVentas.detalleVenta');
    }
}
