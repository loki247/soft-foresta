<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInventario extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
	    Schema::create('inventario', function (Blueprint $table) {
		    $table->increments('idInventario');
		    $table->string('articulo');
		    $table->string('estado');
		    $table->string('ubicacion');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('inventario');
    }
}
