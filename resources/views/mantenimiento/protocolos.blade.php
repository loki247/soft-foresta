@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Protocolos por Máquina</title>
@stop

@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
            <h1>Protocolos por Máquina</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="col-md-4">
                        <a id="agregarMantencion" class="btn btn-success text-light"><i class="fa fa-fw fa-plus"></i>Agregar Mantención</a>
                    </div>
                    <div class="col-md-4"></div>

                    <div class="col-md-4"></div>
                    <br>
                </div>
                <div class="col-md-12">
                        <form method="post" id="formProtocolo">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="form-row">
                                    <h5>Datos para Mantención</h5>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <label for="tipoMantencion">Tipo de mantención</label>
                                        <select class="form-control" id="tipoMantencion" name="tipoMantencion">
                                            <option value="1">Mecánica</option>
                                            <option value="2">Eléctrica</option>
                                            <option value="3">Hidraúlica</option>
                                            <option value="4">Neumática</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="seccion">Sección</label>
                                        <select class="form-control" id="seccion" name="seccion">
                                            <option value="1">Sección 1</option>
                                            <option value="2">Sección 2</option>
                                            <option value="3">Sección 3</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="maquina">Máquina</label>
                                        <select class="form-control" id="maquina" name="maquina">
                                            <option value="1">Máquina 1</option>
                                            <option value="2">Máquina 2</option>
                                            <option value="3">Máquina 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <a class="btn btn-success text-light" id="agregarTarea"><i class="fa fa-fw fa-plus"></i>Agregar Tarea</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row" id="listaTareas">
                                    <div class="col-md-6">
                                        <label for="tarea">Tarea a realizar</label>
                                        <input class="form-control" type="text" id="tarea" name="tarea">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="componente">Componente a revisar</label>
                                        <input class="form-control" type="text" id="componente" name="tarea">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <label for="fecha">Fecha Mantención</label>
                                        <input class="form-control" type="date" id="fecha" name="fecha">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="cicloMantencion">Ciclo Mantención (Días)</label>
                                        <input class="form-control" type="number" id="cicloMantencion" name="cicloMantencion">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="duracionTarea">Duración Tarea (Minutos)</label>
                                        <input class="form-control" type="time" id="duracionTarea" name="duracionTarea">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="observaciones">Observaciones</label>
                                        <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
                                    </div>
                                </div>
                            </div>


                            <script>
                                $(document).ready(function () {
                                    $("#agregarTarea").click(function () {
                                        $("#listaTareas").append(
                                            '<div class="col-md-6">'+
                                                '<label for="tarea">Tarea a realizar</label>'+
                                                '<input class="form-control" type="text" id="tarea" name="tarea">'+
                                            '</div>'+

                                            '<div class="col-md-6">'+
                                                '<label for="componente">Componente a revisar</label>'+
                                                '<input class="form-control" type="text" id="componente" name="tarea">'+
                                            '</div>');
                                    });

                                    $("#agregarMantencion") .click(function () {
                                        $("#formProtocolo").append
                                        ('<div class="form-group">'+
                                            '<div class="form-row">'+
                                                '<h5>Datos para Mantención</h5>'+
                                            '</div>'+
                                        '</div>'+

                                        '<div class="form-group">'+
                                            '<div class="form-row">'+
                                                '<div class="col-md-4">'+
                                                    '<label for="tipoMantencion">Tipo de mantención</label>'+
                                                    '<select class="form-control" id="tipoMantencion" name="tipoMantencion">'+
                                                        '<option value="1">Mecánica</option>'+
                                                        '<option value="2">Eléctrica</option>'+
                                                        '<option value="3">Hidraúlica</option>'+
                                                        '<option value="4">Neumática</option>'+
                                                    '</select>'+
                                                '</div>'+

                                                '<div class="col-md-4">'+
                                                    '<label for="seccion">Sección</label>'+
                                                    '<select class="form-control" id="seccion" name="seccion">'+
                                                        '<option value="1">Sección 1</option>'+
                                                        '<option value="2">Sección 2</option>'+
                                                        '<option value="3">Sección 3</option>'+
                                                    '</select>'+
                                                '</div>'+

                                                '<div class="col-md-4">'+
                                                        '<label for="maquina">Máquina</label>'+
                                                        '<select class="form-control" id="maquina" name="maquina">'+
                                                            '<option value="1">Máquina 1</option>'+
                                                            '<option value="2">Máquina 2</option>'+
                                                            '<option value="3">Máquina 3</option>'+
                                                        '</select>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+


                                        '<div class="form-group">'+
                                            '<div class="form-row">'+
                                                '<div class="col-md-12">'+
                                                    '<a class="btn btn-success text-light" id="agregarTarea2"><i class="fa fa-fw fa-plus"></i>Agregar Tarea</a>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+

                                        '<div class="form-group">'+
                                            '<div class="form-row" id="listaTareas2">'+
                                                '<div class="col-md-6">'+
                                                    '<label for="tarea">Tarea a realizar</label>'+
                                                    '<input class="form-control" type="text" id="tarea" name="tarea">'+
                                                '</div>'+

                                                '<div class="col-md-6">'+
                                                    '<label for="componente">Componente a revisar</label>'+
                                                    '<input class="form-control" type="text" id="componente" name="tarea">'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+

                                        '<div class="form-group">'+
                                            '<div class="form-row">'+
                                                '<div class="col-md-4">'+
                                                    '<label for="fecha">Fecha Mantención</label>'+
                                                    '<input class="form-control" type="date" id="fecha" name="fecha">'+
                                                '</div>'+

                                                '<div class="col-md-4">'+
                                                    '<label for="cicloMantencion">Ciclo Mantención (Días)</label>'+
                                                    '<input class="form-control" type="number" id="cicloMantencion" name="cicloMantencion">'+
                                                '</div>'+

                                                '<div class="col-md-4">'+
                                                    '<label for="duracionTarea">Duración Tarea (Minutos)</label>'+
                                                    '<input class="form-control" type="time" id="duracionTarea" name="duracionTarea">'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+

                                        '<div class="form-group">'+
                                            '<div class="form-row">'+
                                                '<div class="col-md-12">'+
                                                    '<label for="observaciones">Observaciones</label>'+
                                                    '<textarea class="form-control" id="observaciones" name="observaciones"></textarea>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>');
                                    });

                                });
                            </script>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
@stop