@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Maquinaria Registrada</title>
@stop
@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
                    <h1>Maquinaria Registrada</h1>
                    <br>

                    <div class="col-md-12">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>
                                   Nombre Máquina
                                </th>

                                <th>
                                   Código Interno
                                </th>

                                <th>
                                   Marca
                                </th>

                                <th>
                                    Modelo
                                </th>

                                <th>
                                    Año
                                </th>

                                <th>
                                    Sección
                                </th>

                                <th>
                                    Horas de trabajo
                                </th>
                            </tr>

                            <tr>
                                <td>Máquina 1</td>
                                <td>000001</td>
                                <td>Marca 1</td>
                                <td>Modelo 1</td>
                                <td>2018</td>
                                <td>Sección 1</td>
                                <td>10000</td>
                            </tr>

                            <tr>
                                <td>Máquina 2</td>
                                <td>000002</td>
                                <td>Marca 2</td>
                                <td>Modelo 2</td>
                                <td>2018</td>
                                <td>Sección 2</td>
                                <td>15000</td>
                            </tr>

                            <tr>
                                <td>Máquina 3</td>
                                <td>000003</td>
                                <td>Marca 3</td>
                                <td>Modelo 3</td>
                                <td>2018</td>
                                <td>Sección 3</td>
                                <td>5000</td>
                            </tr>
                        </table>
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
