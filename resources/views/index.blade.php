@extends('plantilla')

@section('titulo')
  <title>ERP | Módulos</title>
@stop
@section('contenido')
  <br>
  <br>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1>Módulos</h1>
          <br>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-money"></i>
              </div>
              <div class="mr-5">
                <a href="{{route('marketingVentas')}}" class="nav-link text-light">Marketing y Ventas</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bar-chart"></i>
              </div>
              <div class="mr-5">
                <a href="{{route('finanzas')}}" class="nav-link text-light">Finanzas</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">
                <a href="{{route('operaciones')}}" class="nav-link text-light">Operaciones</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-industry"></i>
              </div>
              <div class="mr-5">
                <a href="{{route('empresa')}}" class="nav-link text-light">Empresa</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-book"></i>
              </div>
              <div class="mr-5">
                <a href="{{route('inventario')}}" class="nav-link text-light">Inventario</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-road"></i>
              </div>
              <div class="mr-5">
                <a href="{{route('logistica')}}" class="nav-link text-light">Logistica y Transporte</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-check-circle"></i>
              </div>
              <div class="mr-5">
                <a href="{{route('mantenimiento')}}" class="nav-link text-light">Mantenimiento</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-wrench"></i>
              </div>
              <div class="mr-5">
                <a href="{{route('configuracion')}}" class="nav-link text-light">Soporte y Configuración</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

  </div>
@stop
