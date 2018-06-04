@extends('plantilla')

@section('titulo')
    <title>ERP | Protocolos por Máquina</title>
@stop
@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" ><a href="{{'/'}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('mantenimiento')}}">Mantenimiento</a></li>
                <li class="breadcrumb-item">Ordenes de Trabajo</li>
            </ol>
            <h4>Protocolos por Máquina</h4>
        </div>

        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <table class="table table-sm">
                            <thead class="table-info">
                                <tr>
                                    <th>Código Orden de Trabajo</th>
                                    <th>Código Protocolo de Mantención</th>
                                    <th>Tipo Mantención</th>
                                    <th>Máquina</th>
                                    <th>Tarea a Realizar</th>
                                    <th>Fecha Mantención</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class=" table-bordered">
                                <tr>
                                    <td>OT001</td>
                                    <td>P001</td>
                                    <td>Mecánica</td>
                                    <td>Máquina 1</td>
                                    <td>Revisión Correas</td>
                                    <td>01-06-2018</td>
                                    <td><a class="btn btn-info text-light" data-toggle="modal" data-target="#modalOrdenDeCompra" title="Generar Orden de Compra"><i class="fa fa-fw fa-money"></i></a></td>
                                </tr>
                                <tr>
                                    <td>OT002</td>
                                    <td>P002</td>
                                    <td>Mecánica</td>
                                    <td>Máquina 1</td>
                                    <td>Cambio de aceite</td>
                                    <td>10-06-2018</td>
                                    <td><a class="btn btn-info text-light" data-toggle="modal" data-target="#modalOrdenDeCompra" title="Generar Orden de Compra"><i class="fa fa-fw fa-money"></i></a></td>
                                <tr>
                                    <td>OT003</td>
                                    <td>P003</td>
                                    <td>Mecánica</td>
                                    <td>Máquina 1</td>
                                    <td>Cambio de filtros</td>
                                    <td>10-06-2018</td>
                                    <td><a class="btn btn-info text-light" data-toggle="modal" data-target="#modalOrdenDeCompra" title="Generar Orden de Compra"><i class="fa fa-fw fa-money"></i></a></td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Ventana modal -->
                        <div class="modal fade" id="modalOrdenDeCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Orden de Compra</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <p>¿Generar Orden de Compra?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                                        <a class="btn btn-info" href="{{route('mantenimiento.ordenesDeCompra')}}">Generar</a>
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
