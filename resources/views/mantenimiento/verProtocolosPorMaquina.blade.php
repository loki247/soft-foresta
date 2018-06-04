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
            <a href="{{route('mantenimiento.protocolos')}}" class="btn btn-info text-light"><i class="fa fa-fw fa-upload"></i>Registro de Protocolo</a>
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
                                    <th>Prioridad</th>
                                    <th>Máquina</th>
                                    <th>Tarea a Realizar</th>
                                    <th>Duración</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class=" table-bordered">
                                <tr>
                                    <td>P001</td>
                                    <td>Mecánica</td>
                                    <td>Alta</td>
                                    <td>Máquina 1</td>
                                    <td>Revisión Correas</td>
                                    <td>1 hora</td>
                                    <td><a class="btn btn-info text-light" data-toggle="modal" data-target="#modalOrdenDeTrabajo"><i class="fa fa-fw fa-file"></i></a></td>
                                </tr>
                                <tr>
                                    <td>P002</td>
                                    <td>Mecánica</td>
                                    <td>Media</td>
                                    <td>Máquina 1</td>
                                    <td>Cambio de aceite</td>
                                    <td>1 hora</td>
                                    <td><a class="btn btn-info text-light" data-toggle="modal" data-target="#modalOrdenDeTrabajo"><i class="fa fa-fw fa-file"></i></a></td>
                                <tr>
                                    <td>P003</td>
                                    <td>Mecánica</td>
                                    <td>Baja</td>
                                    <td>Máquina 1</td>
                                    <td>Cambio de filtros</td>
                                    <td>45 minutos</td>
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

                                    <div class="modal-body">
                                        <p>¿Generar Orden de Trabajo?</p>
                                    </div>

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
