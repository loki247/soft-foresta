<?php

//Login y registro

Route::get('usuario/registro', ['as' => 'usuario.registro', 'uses' => 'controladorUsuario@create']);

Route::post('usuario', ['as' => 'usuario.store', 'uses' => 'controladorUsuario@store']);


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


//Mantenimiento
Route::get('mantenimiento/registroMaquinaria', ['as' => 'mantenimiento.registroMaquinaria', 'uses' => 'controladorMantenimiento@registroMaquinaria']);

Route::post('mantenimiento/registrarMaquinaria', ['as' => 'mantenimiento.registrarMaquinaria', 'uses' => 'controladorMaquinaria@registrarMaquinaria']);

Route::get('mantenimiento/maquinariaRegistrada', ['as' => 'mantenimiento.maquinariaRegistrada', 'uses' => 'controladorMantenimiento@maquinariaRegistrada']);

Route::post('mantenimiento', ['as' => 'mantenimiento.registroGuardado', 'uses' => 'controladorMantenimiento@registroGuardado']);

Route::get('mantenimiento/planMantenimiento', ['as' => 'mantenimiento.planMantenimiento', 'uses' => 'controladorMantenimiento@registroPlanMantenimiento']);

Route::get('mantenimiento/protocolos', ['as' => 'mantenimiento.protocolos', 'uses' => 'controladorMantenimiento@protocolos']);


//Inventario
Route::get('inventario/registroInventario', ['as' => 'inventario.registroInventario', 'uses' => 'controladorInventario@registroInventario']);

Route::get('inventario/inventarioRegistrado', ['as' => 'inventario.inventarioRegistrado', 'uses' => 'controladorInventario@inventarioRegistrado']);


//Ventas
Route::get('ventas/cotizaciones', ['as' => 'ventas.cotizaciones', 'uses' => 'controladorVentas@cotizaciones']);

Route::get('ventas/detalleCotizacion', ['as' => 'ventas.detalleCotizacion', 'uses' => 'controladorVentas@detalleCotizacion']);

Route::get('ventas/ordenesVenta', ['as' => 'ventas.ordenesVenta', 'uses' => 'controladorVentas@ordenesVenta']);

Route::get('ventas/detalleVenta', ['as' => 'ventas.detalleVenta', 'uses' => 'controladorVentas@detalleVenta']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
