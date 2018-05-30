@extends('plantilla')

@section('titulo')
	<title>Soft-Foresta ERP | Ventas</title>
@stop
@section('contenido')
	<br>
	<br>
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
					<h1>Ventas</h1>
					<br>
				</div>

				<div class="col-xl-3 col-sm-6 mb-3">
					<div class="card text-white bg-primary o-hidden h-100">
						<div class="card-body">
							<div class="card-body-icon">
								<i class="fa fa-fw fa-check"></i>
							</div>
							<div class="mr-5">
								<a href="{{route('marketingVentas.cotizaciones')}}" class="nav-link text-light">Cotizaciones</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-sm-6 mb-3">
					<div class="card text-white bg-primary o-hidden h-100">
						<div class="card-body">
							<div class="card-body-icon">
								<i class="fa fa-fw fa-money"></i>
							</div>
							<div class="mr-5">
								<a href="{{route('marketingVentas.ordenesVenta')}}" class="nav-link text-light">Ordenes de Venta</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fa fa-angle-up"></i>
		</a>

@stop
