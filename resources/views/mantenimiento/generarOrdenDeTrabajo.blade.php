@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Generar orden de Trabajo</title>
@stop
@section('contenido')
    <br>
    <br>
    <script src="{{asset('js/jspdf.min.js')}}"></script>
    <script src="{{asset('js/generarPDF.js')}}"></script>
    <div class="content-wrapper">
        <div class="col-md-12">
            <a class="btn btn-info text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
            <button id="generarPDFOrdenDeTrabajo" class="btn btn-info text-light"><i class="fa fa-fw fa-file-pdf-o"></i>Exportar PDF</button>
            <h4>Generar orden de Trabajo</h4>
            <p class="h4" style="display: none" id="titulo">Orden de Trabajo</p>
            <br>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="container" id="infoGeneral">
                    <div class="col-md-12">
                        <table class="table">
                            <thead class="table-info">
                                <tr>
                                    <th>Código</th>
                                    <th>Tipo Mantención</th>
                                </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <td>P001</td>
                                    <td>Mecánica</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead class="table-info">
                                <tr>
                                    <th>Sección</th>
                                    <th>Máquina</th>
                                </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <td>Sección 1</td>
                                    <td>Máquina 1</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead class="table-info">
                                <tr>
                                    <th>Tarea a Realizar</th>
                                    <th>Componente a revisar</th>
                                </tr>
                            </thead>
                            <tbody class="table-bordered">
                                <tr>
                                    <td>Revisión Correas</td>
                                    <td>Correas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead class="table-info">
                                <tr>
                                    <th>Fecha Mantención</th>
                                    <th>Ciclo Mantención</th>
                                </tr>
                            </thead>
                            <tbody class="table-bordered">
                                <tr>
                                    <td>01-06-2018</td>
                                    <td>60 días</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead class="table-info">
                                <tr>
                                    <th>Duración</th>
                                </tr>
                            </thead>
                            <tbody class="table-bordered">
                                <tr>
                                    <td>1 hora</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <table class="table">
                            <thead class="table-info">
                                <tr>
                                    <th>Observaciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-bordered">
                                <tr>
                                    <td>Cambiar Correas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row" style="display: none">
                        <div class="col-md-6">
                            <p>Orden generada por <strong>Usuario</strong></p>
                            <p>Firma de Usuario</p>
                            <p>_______________________</p>
                        </div>
                        <div class="col-md-6">
                            <p>Nombre Encargado __________________________</p>
                            <p>Firma Encargado</p>
                            <p>_______________________</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
@stop
