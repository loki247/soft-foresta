<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('usuario', function (Blueprint $table) {
	        $table->increments('idUsuario');
	        $table->string('nombre');
	        $table->string('apellidos');
	        $table->string('email')->nullable();
	        $table->string('direccion');
	        $table->string('telefono');
	        $table->string('ciudad');
	        $table->string('contrasena');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('usuario');
    }
}
