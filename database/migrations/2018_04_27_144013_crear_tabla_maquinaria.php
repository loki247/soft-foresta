<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMaquinaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('maquinaria', function (Blueprint $table) {
            $table->increments('idMaquinaria');
            $table->string('nombre');
            $table->integer('codigo');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('ano');
            $table->string('seccion');
            $table->integer('horometro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('maquinaria');
    }
}
