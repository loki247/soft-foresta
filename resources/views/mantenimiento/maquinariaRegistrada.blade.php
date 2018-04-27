@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Maquinaria Registrada</title>
@stop
@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
                    <h1>Maquinaria Registrada</h1>
                    <br>

                    <div class="col-md-12">
                        <table class="table">
                            <th>
                               Nombre Máquina
                            </th>

                            <th>
                               Código Interno
                            </th>

                            <th>
                               Marca
                            </th>

                            <th>
                                Modelo
                            </th>

                            <th>
                                Año
                            </th>

                            <th>
                                Sección
                            </th>

                            <th>
                                Horas de trabajo
                            </th>
                        </table>
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
