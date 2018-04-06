@extends('plantilla')

@section('titulo')
  <title>Soft-Foresta ERP | Módulos</title>
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
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-file-o"></i>
              </div>
              <div class="mr-5">
                <a href="{{'archivos'}}" class="nav-link text-light">Archivos</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-balance-scale"></i>
              </div>
              <div class="mr-5">
                <a href="{{'contabilidad'}}" class="nav-link text-light">Contabilidad</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-road"></i>
              </div>
              <div class="mr-5">
                <a href="{{'logistica'}}" class="nav-link text-light">Logistica y Transporte</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bar-chart"></i>
              </div>
              <div class="mr-5">
                <a href="{{'produccion'}}" class="nav-link text-light">Producción</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">
                <a href="{{'parametros'}}" class="nav-link text-light">Parámetros</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-calculator"></i>
              </div>
              <div class="mr-5">
                <a href="{{'servicios'}}" class="nav-link text-light">Compras y Servicios</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-book"></i>
              </div>
              <div class="mr-5">
                <a href="{{'predios'}}" class="nav-link text-light">Predios</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-wrench"></i>
              </div>
              <div class="mr-5">
                <a href="{{'configuracion'}}" class="nav-link text-light">Configuración</a>
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
