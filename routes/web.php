<?php


//Index
Route::get('/', ['as' => 'index', 'uses' => 'controladorIndex@index']);

Route::get('archivos', ['as' => 'archivos', 'uses' => 'controladorIndex@archivos']);

Route::get('contabilidad', ['as' => 'contabilidad', 'uses' => 'controladorIndex@contabilidad']);

Route::get('logistica', ['as' => 'logistica', 'uses' => 'controladorIndex@logistica']);

Route::get('produccion', ['as' => 'produccion', 'uses' => 'controladorIndex@produccion']);

Route::get('parametros', ['as' => 'parametros', 'uses' => 'controladorIndex@parametros']);

Route::get('servicios', ['as' => 'servicios', 'uses' => 'controladorIndex@servicios']);

Route::get('predios', ['as' => 'predios', 'uses' => 'controladorIndex@predios']);

Route::get('configuracion', ['as' => 'configuracion', 'uses' => 'controladorIndex@configuracion']);

Route::get('usuario', ['as' => 'usuario', 'uses' => 'controladorIndex@usuario']);


//Producción
Route::get('silvicultura', ['as' => 'silvicultura', 'uses' => 'controladorProduccion@silvicultura']);

Route::get('explotacion', ['as' => 'explotacion', 'uses' => 'controladorProduccion@explotacion']);

