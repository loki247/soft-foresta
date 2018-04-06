<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorProduccion extends Controller {

	public function silvicultura(){
		return view('produccion/silvicultura');
	}

	public function explotacion(){
		return view('produccion/explotacion');
	}
}
