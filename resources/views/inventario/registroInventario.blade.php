@extends('plantilla')
@section('titulo')
    <title>ERP | Registrar Insumo</title>
@stop

@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" ><a href="{{'/'}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('inventario')}}">Inventario</a></li>
                <li class="breadcrumb-item">Registrar Insumo</li>
            </ol>
            <h1>Datos de Insumos</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="col-md-4">
                        <button id="agregarTr" class="btn btn-info"><i class="fa fa-fw fa-plus"></i>Agregar Insumo</button>
                    </div>
                    <div class="col-md-4"></div>

                    <div class="col-md-4"></div>
                    <br>
                </div>

                <div class="col-md-12">
                    <form method="post">
                        {{ csrf_field() }}

                        <table class="table table-hover table-bordered" id="tablaInventario">
                            <tr>
                                <th>
                                    Nombre
                                </th>

                                <th>
                                    Código
                                </th>

                                <th>
                                    Marca
                                </th>

                                <th>
                                    Modelo
                                </th>
                            </tr>

                            <tr>
                                <td>
                                    <input class="form-control" id="nombreMaquina" name="nombreMaquina" type="text" aria-describedby="nameHelp" placeholder="Nombre Maquina">
                                </td>

                                <td>
                                    <input class="form-control" id="codigoInterno" name="codigoInterno" type="text" aria-describedby="nameHelp" placeholder="xxxxxxxxxxx">
                                </td>

                                <td>
                                    <input class="form-control" id="marca" name="marca" type="text" aria-describedby="nameHelp" placeholder="Marca Maquina">
                                </td>

                                <td>
                                    <input class="form-control" id="modelo" name="modelo" type="text" aria-describedby="nameHelp" placeholder="Modelo máquina">
                                </td>
                            </tr>

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $("#agregarTr").click(function () {
                                        $("#tablaInventario").append
                                        ("<tr>"+
                                            '<td>'+
                                            '<input class="form-control" id="nombreMaquina" name="nombreMaquina" type="text" aria-describedby="nameHelp" placeholder="Nombre Maquina">'+
                                            '</td>'+

                                            '<td>'+
                                            '<input class="form-control" id="codigoInterno" name="codigoInterno" type="text" aria-describedby="nameHelp" placeholder="xxxxxxxxxxx">'+
                                            '</td>'+

                                            '<td>'+
                                            '<input class="form-control" id="marca" name="marca" type="text" aria-describedby="nameHelp" placeholder="Marca Maquina">'+
                                            '</td>'+

                                            '<td>'+
                                            '<input class="form-control" id="modelo" name="modelo" type="text" aria-describedby="nameHelp" placeholder="Modelo máquina">'+
                                            '</td>');
                                    });

                                });
                            </script>
                        </table>

                        <div class="form-group">
                            <div class="form-row">

                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <input type="submit" class="btn btn-primary" value="Registrar">
                                </div>

                                <div class="col-md-3">
                                    <a class="btn btn-danger text-light" data-toggle="modal"  data-target="#modalCancelar">Cancelar</a>
                                </div>

                                <div class="col-md-3"></div>
                            </div>
                        </div>

                        <!-- Ventana modal -->
                        <div class="modal fade" id="modalCancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">¿Cancelar y salir?</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                                        <a class="btn btn-primary" href="javascript:window.history.back();">Si</a>
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
    <br>
    <br>
    <br>
@stop