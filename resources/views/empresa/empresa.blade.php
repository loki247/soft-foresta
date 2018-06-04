@extends('plantilla')

@section('titulo')
    <title>ERP | Empresa</title>
@stop
@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" ><a href="{{'/'}}">Inicio</a></li>
                        <li class="breadcrumb-item">Empresa</li>
                    </ol>
                    <h1>Empresa</h1>
                    <br>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-info o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-upload"></i>
                            </div>
                            <div class="mr-5">
                                <a href="#" class="nav-link text-light">Registrar Secciones</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-info o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-users"></i>
                            </div>
                            <div class="mr-5">
                                <a href="#" class="nav-link text-light">Ver Secciones</a>
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
    </div>
@stop
