<?php


//Index
Route::get('/', ['as' => 'index', 'uses' => 'controladorIndex@index']);

Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'controladorIndex@dashboard']);

Route::get('marketing', ['as' => 'marketing', 'uses' => 'controladorIndex@marketing']);

Route::get('ventas', ['as' => 'ventas', 'uses' => 'controladorIndex@ventas']);

Route::get('finanzas', ['as' => 'finanzas', 'uses' => 'controladorIndex@finanzas']);

Route::get('operaciones', ['as' => 'operaciones', 'uses' => 'controladorIndex@operaciones']);

Route::get('empresa', ['as' => 'empresa', 'uses' => 'controladorIndex@empresa']);

Route::get('inventario', ['as' => 'inventario', 'uses' => 'controladorIndex@inventario']);

Route::get('logistica', ['as' => 'logistica', 'uses' => 'controladorIndex@logistica']);

Route::get('mantenimiento', ['as' => 'mantenimiento', 'uses' => 'controladorIndex@mantenimiento']);

Route::get('configuracion', ['as' => 'configuracion', 'uses' => 'controladorIndex@configuracion']);

Route::get('usuario', ['as' => 'usuario', 'uses' => 'controladorIndex@usuario']);


