@extends('plantilla')

@section('titulo')
    <title>ERP | Editar Máquina</title>
@stop
@section('contenido')
    <br>
    <br>
    <script src="{{asset('js/jspdf.min.js')}}"></script>
    <script src="{{asset('js/generarPDF.js')}}"></script>
    <div class="content-wrapper">
        <div class="col-md-12">
            <a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
            <h4>Editar Máquina</h4>
            <br>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    {{csrf_field()}}
                    <form>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="nombreMaquina">Nombre Máquina</label>
                                    <input class="form-control" type="text" value="Maquina 1" id="nombreMaquina" name="nombreMaquina">
                                </div>

                                <div class="col-md-6">
                                    <label for="codigo">Código Interno</label>
                                    <input class="form-control" type="text" value="000001" id="codigo" name="codigo">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="marca">Marca</label>
                                    <input class="form-control" type="text" value="Marca 1" id="marca" name="marca">
                                </div>

                                <div class="col-md-6">
                                    <label for="modelo">Modelo</label>
                                    <input class="form-control" type="text" value="Modelo 1" id="modelo" name="modelo">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="ano">Año</label>
                                        <input class="form-control" type="text" value="2018" id="ano" name="ano">
                                </div>

                                <div class="col-md-4">
                                    <label for="seccion">Sección</label>
                                    <input class="form-control" type="text" value="Sección 1" id="seccion" name="seccion">
                                </div>

                                <div class="col-md-4">
                                    <label for="horometro">Horas de Trabajo</label>
                                    <input class="form-control" type="text" value="10000" id="horometro" name="horometro">
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
