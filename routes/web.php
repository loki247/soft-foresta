<?php

//Login y registro

Route::get('usuario/registro', ['as' => 'usuario.registro', 'uses' => 'controladorUsuario@create']);

Route::post('usuario', ['as' => 'usuario.store', 'uses' => 'controladorUsuario@store']);


//Index
Route::get('/', ['as' => 'index', 'uses' => 'controladorIndex@index']);

Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'controladorIndex@dashboard']);

Route::get('marketingVentas', ['as' => 'marketingVentas', 'uses' => 'controladorIndex@marketingVentas']);

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

Route::get('mantenimiento/editarMaquina', ['as' => 'mantenimiento.editarMaquina', 'uses' => 'controladorMantenimiento@editarMaquina']);

Route::post('mantenimiento', ['as' => 'mantenimiento.registroGuardado', 'uses' => 'controladorMantenimiento@registroGuardado']);

Route::get('mantenimiento/planMantenimiento', ['as' => 'mantenimiento.planMantenimiento', 'uses' => 'controladorMantenimiento@registroPlanMantenimiento']);

Route::get('mantenimiento/protocolos', ['as' => 'mantenimiento.protocolos', 'uses' => 'controladorMantenimiento@protocolos']);

Route::get('mantenimiento/verProtocolosPorMaquina', ['as' => 'mantenimiento.verProtocolosPorMaquina', 'uses' => 'controladorMantenimiento@verProtocolosPorMaquina']);

Route::get('mantenimiento/generarOrdenDeTrabajo', ['as' => 'mantenimiento.generarOrdenDeTrabajo', 'uses' => 'controladorMantenimiento@generarOrdenDeTrabajo']);

Route::get('mantenimiento/ordenesDeTrabajo', ['as' => 'mantenimiento.ordenesDeTrabajo', 'uses' => 'controladorMantenimiento@ordenesDeTrabajo']);

Route::get('mantenimiento/ordenesDeCompra', ['as' => 'mantenimiento.ordenesDeCompra', 'uses' => 'controladorMantenimiento@ordenesDeCompra']);


//Inventario
Route::get('inventario/registroInventario', ['as' => 'inventario.registroInventario', 'uses' => 'controladorInventario@registroInventario']);

Route::get('inventario/inventarioRegistrado', ['as' => 'inventario.inventarioRegistrado', 'uses' => 'controladorInventario@inventarioRegistrado']);

Route::get('inventario/detalleInsumo', ['as' => 'inventario.detalleInsumo', 'uses' => 'controladorInventario@detalleInsumo']);


//Ventas
Route::get('marketingVentas/cotizaciones', ['as' => 'marketingVentas.cotizaciones', 'uses' => 'controladorMarketingVentas@cotizaciones']);

Route::get('marketingVentas/detalleCotizacion', ['as' => 'marketingVentas.detalleCotizacion', 'uses' => 'controladorMarketingVentas@detalleCotizacion']);

Route::get('marketingVentas/ordenesVenta', ['as' => 'marketingVentas.ordenesVenta', 'uses' => 'controladorMarketingVentas@ordenesVenta']);

Route::get('marketingVentas/detalleVenta', ['as' => 'marketingVentas.detalleVenta', 'uses' => 'controladorMarketingVentas@detalleVenta']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
