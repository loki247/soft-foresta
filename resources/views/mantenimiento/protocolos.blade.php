@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Protocolos por Máquina</title>
@stop

@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <a class="btn btn-info text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
            <h1>Protocolos por Máquina</h1>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <form method="post" id="formProtocolo">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label class="h3">Datos para Mantención</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="ubicacion">Ubicación</label>
                                    <select class="form-control" id="ubicacion" name="ubicacion">
                                        <option value="1">Ubicación 1</option>
                                        <option value="2">Ubicación 2</option>
                                        <option value="3">Ubicación 3</option>
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
                                    <label class="h3">Tareas a realizar</label>
                                    <a class="btn btn-info text-light" id="agregarTarea"><i class="fa fa-fw fa-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="listaTareas">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="tipoMantencion">Tipo de mantención</label>
                                    <select class="form-control" id="tipoMantencion" name="tipoMantencion">
                                        <option value="1">Mecánica</option>
                                        <option value="2">Eléctrica</option>
                                        <option value="3">Hidraúlica</option>
                                        <option value="4">Neumática</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="tarea">Tarea</label>
                                    <input class="form-control" type="text" id="tarea" name="tarea">
                                </div>

                                <div class="col-md-3">
                                    <label for="herramientas">Herramientas</label>
                                    <input class="form-control" type="text" id="herramientas" name="herramientas">
                                </div>

                                <div class="col-md-3">
                                    <label for="equipos">Equipos</label>
                                    <input class="form-control" type="text" id="equipos" name="equipos">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="repuestos">Repuestos</label>
                                    <input class="form-control" type="text" id="repuestos" name="repuestos">
                                </div>

                                <div class="col-md-4">
                                    <label for="consumibles">Consumibles</label>
                                    <input class="form-control" type="text" id="consumibles" name="consumibles">
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
                                    <label class="h3">Seguridad</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="condicionesBloqueo">Condiciones de Bloqueo</label>
                                    <select class="form-control" id="condicionesBloqueo" name="condicionesBloqueo">
                                        <option value="1">Eléctrico</option>
                                        <option value="2">Mecánico</option>
                                        <option value="3">Hidráulico</option>
                                        <option value="4">Neumático</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="condicionesOperacion">Condiciones de Operación</label>
                                    <select class="form-control" id="condicionesOperacion" name="condicionesOperacion">
                                        <option value="1">Detención Total</option>
                                        <option value="2">Detención Parcial</option>
                                        <option value="3">Sin Detención</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="implementosSeguridad">Implementos de Seguridad</label>
                                    <textarea class="form-control" id="implementosSeguridad" name="implementosSeguridad"></textarea>
                                </div>

                                <div class="col-md-6"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="personal">Personal</label>
                                    <select class="form-control" id="personal" name="personal">
                                        <option value="1">Interno</option>
                                        <option value="2">Externo</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="supervisor">Supervisor</label>
                                    <select class="form-control" id="supervisor" name="supervisor">
                                        <option value="1">Supervisor 1</option>
                                        <option value="2">Supervisor 2</option>
                                        <option value="3">Supervisor 3</option>
                                    </select>
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