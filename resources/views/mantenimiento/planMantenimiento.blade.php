@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Plan de Matenimiento</title>
@stop

@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
            <h1>Plan de Matenimiento</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="card card-register mx-auto">
                    <div class="card-header">Mantenimiento de Maquinaria</div>
                    <div class="card-body">

                        <form method="post" action="{{route('mantenimiento.registroGuardado')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="seccion">Sección</label>
                                        <select class="form-control" id="seccion" name="seccion">
                                            <option value="1">Sección 1</option>
                                            <option value="2">Sección 2</option>
                                            <option value="3">Sección 3</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="nombreMaquina">Nombre Máquina</label>
                                        <select class="form-control" id="nombreMaquina" name="nombreMaquina">
                                            <option value="1">Máquina 1</option>
                                            <option value="2">Máquina 2</option>
                                            <option value="3">Máquina 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="ultimaMantencion">Ultima Mantención</label>
                                        <input class="form-control" id="ultimaMantencion" name="ultimaMantencion" type="text" disabled value="10/11/2017">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="horometro">Horometro Última Mantención</label>
                                        <input class="form-control" id="horometro" name="horometro" type="text" disabled value="150000">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="descripcion">Descripción de la Mantención</label>
                                        <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="horometroActual">Horometro Actual</label>
                                        <input class="form-control" type="text" name="horometroActual" id="horometroActual">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">

                                    <div class="col-md-3"></div>

                                    <div class="col-md-3">
                                        <input type="submit" class="btn btn-primary" value="Registrar">
                                    </div>

                                    <div class="col-md-3">
                                        <a class="btn btn-danger text-light" data-toggle="modal" data-target="#modalCancelar">Cancelar</a>
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
    </div>
    <br>
    <br>
    <br>
@stop