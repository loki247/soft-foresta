@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Ordenes de Compra</title>
@stop

@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
            <h4>Orden de Compra</h4>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="codigoMantencion">Código Orden de Trabajo</label>
                                    <select class="form-control">
                                        <option value="1">OT001</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="datosMantencion">Datos de Mantención</label>
                                <table class="table table-sm" id="datosMantencion">
                                    <thead class="table-info">
                                        <tr>
                                            <th>Máquina</th>
                                            <th>Tipo Mantención</th>
                                            <th>Tarea</th>
                                        </tr>
                                    </thead>

                                    <tbody class="table-bordered">
                                        <td>Máquina 1</td>
                                        <td>Mecánica</td>
                                        <td>Cambio Correas</td>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <a class="btn btn-primary text-light" id="agregarRepuesto"><i class="fa fa-fw fa-plus"></i>Agregar Repuesto</a>
                                    </div>
                                </div>
                            </div>

                            <script>
                                $(document).ready(function () {
                                    $('#agregarRepuesto').click(function () {
                                        $('#listaRepuestos').append(
                                            '<div class="col-md-6">'+
                                            '<label for="repuesto">Repuesto a solicitar</label>'+
                                            '<input type="text" class="form-control" id="repuesto" name="repuesto">'+
                                            '</div>'+

                                            '<div class="col-md-6">'+
                                            '<label for="cantidad">Cantidad</label>'+
                                            '<input type="number" class="form-control" id="cantidad" name="cantidad">'+
                                            '</div>'
                                        );
                                    });
                                });
                            </script>

                            <div class="form-group">
                                <div class="form-row" id="listaRepuestos">
                                    <div class="col-md-6">
                                        <label for="repuesto">Repuesto a solicitar</label>
                                        <input type="text" class="form-control" id="repuesto" name="repuesto">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="cantidad">Cantidad</label>
                                        <input type="number" class="form-control" id="cantidad" name="cantidad">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <a class="btn btn-info text-light" data-toggle="modal" data-target="#modalOrdenDeCompra">Registrar</a>
                                </div>

                                <div class="col-md-3">
                                    <a class="btn btn-danger text-light" data-toggle="modal" data-target="#modalCancelar">Cancelar</a>
                                </div>

                                <div class="col-md-3"></div>
                            </div>
                        </div>

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
                                    <div class="modal-body">¿Generar Orden de Compra?</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-fw fa-close"></i>Cancelar</button>
                                        <a class="btn btn-info text-light" data-toggle="modal" data-dismiss="modal" data-target="#modalExitoso"><i class="fa fa-fw fa-check"></i>Generar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalExitoso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Orden de Trabajo</h5>
                                        <div class="modal-body">Orden de Compra Registrada</div>
                                        <div class="modal-footer">
                                            <a class="btn btn-info text-light" type="button" data-dismiss="modal"><i class="fa fa-fw fa-check"></i>Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modalCancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Salir</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">¿Cancelar y salir?</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal"><i class="fa fa-fw fa-close"></i>Cancelar</button>
                                        <a class="btn btn-primary" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Salir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
@stop

