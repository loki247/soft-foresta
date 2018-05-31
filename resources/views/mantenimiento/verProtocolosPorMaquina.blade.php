@extends('plantilla')

@section('titulo')
    <title>ERP | Protocolos por Máquina</title>
@stop
@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <a class="btn btn-info text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
            <h4>Protocolos por Máquina</h4>
            <a href="{{route('mantenimiento.protocolos')}}" class="btn btn-primary text-light"><i class="fa fa-fw fa-upload"></i>Registro de Protocolo</a>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <table class="table table-sm">
                            <thead class="table-info">
                                <tr>
                                    <th>Código</th>
                                    <th>Tipo Mantención</th>
                                    <th>Sección</th>
                                    <th>Máquina</th>
                                    <th>Tarea a Realizar</th>
                                    <th>Componente a revisar</th>
                                    <th>Fecha Mantención</th>
                                    <th>Ciclo Mantención</th>
                                    <th>Duración</th>
                                    <th>Observaciones</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class=" table-bordered">
                                <tr>
                                    <td>P001</td>
                                    <td>Mecánica</td>
                                    <td>Sección 1</td>
                                    <td>Máquina 1</td>
                                    <td>Revisión Correas</td>
                                    <td>Correas</td>
                                    <td>01-06-2018</td>
                                    <td>60 días</td>
                                    <td>1 hora</td>
                                    <td>Cambiar Correas</td>
                                    <td><a class="btn btn-info text-light" data-toggle="modal" data-target="#modalOrdenDeTrabajo"><i class="fa fa-fw fa-file"></i></a></td>
                                </tr>
                                <tr>
                                    <td>P002</td>
                                    <td>Mecánica</td>
                                    <td>Sección 1</td>
                                    <td>Máquina 1</td>
                                    <td>Cambio de aceite</td>
                                    <td>Aceite de motor</td>
                                    <td>10-06-2018</td>
                                    <td>90 días</td>
                                    <td>1 hora</td>
                                    <td>Cambiar Aceite</td>
                                    <td><a class="btn btn-info text-light" data-toggle="modal" data-target="#modalOrdenDeTrabajo"><i class="fa fa-fw fa-file"></i></a></td>
                                <tr>
                                    <td>P002</td>
                                    <td>Mecánica</td>
                                    <td>Sección 1</td>
                                    <td>Máquina 1</td>
                                    <td>Cambio de filtros</td>
                                    <td>Filtro de aceite, Filtro de Aire, Filtro de Combustible</td>
                                    <td>10-06-2018</td>
                                    <td>90 días</td>
                                    <td>45 minutos</td>
                                    <td>Cambiar Filtros</td>
                                    <td><a class="btn btn-info text-light" data-toggle="modal" data-target="#modalOrdenDeTrabajo"><i class="fa fa-fw fa-file"></i></a></td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Ventana modal -->
                        <div class="modal fade" id="modalOrdenDeTrabajo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Orden de Trabajo</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">¿Generar Orden de Trabajo?</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger" type="button" data-dismiss="modal">No</button>
                                        <a class="btn btn-info" href="{{route('mantenimiento.generarOrdenDeTrabajo')}}">Si</a>
                                    </div>
                                </div>
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
