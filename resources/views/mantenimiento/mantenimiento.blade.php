@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Mantenimiento</title>
@stop
@section('contenido')
    <br>
    <br>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
                <h1>Mantenimiento</h1>
                <br>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-registered"></i>
                        </div>
                        <div class="mr-5">
                            <a href="{{route('mantenimiento.maquinariaRegistrada')}}" class="nav-link text-light">Maquinaria Registrada</a>
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
                            <a href="{{route('mantenimiento.planMantenimiento')}}" class="nav-link text-light">Plan de Mantenimiento</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-product-hunt"></i>
                        </div>
                        <div class="mr-5">
                            <a href="{{route('mantenimiento.verProtocolosPorMaquina')}}" class="nav-link text-light">Ver Protocolos por Máquina</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
@stop
