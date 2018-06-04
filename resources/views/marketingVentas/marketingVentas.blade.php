@extends('plantilla')

@section('titulo')
	<title>ERP | Ventas</title>
@stop
@section('contenido')
	<br>
	<br>
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{'/'}}">Inicio</a></li>
						<li class="breadcrumb-item">Marketing y Ventas</li>
					</ol>
					<h1>Ventas</h1>
					<br>
				</div>

				<div class="col-xl-3 col-sm-6 mb-3">
					<div class="card text-white bg-info o-hidden h-100">
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
					<div class="card text-white bg-info o-hidden h-100">
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
