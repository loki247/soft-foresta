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
                    <h1>Inventario Registrado</h1>
                    <br>

                    <form>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="filtroInsumo">Sección</label>
                                    <input class="form-control" type="text" name="filtroInsumo" id="filtroInsumo">
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>

                    <div class="col-md-12">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>
                                    Nombre Insumo
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
                            </tr>

                            <tr>
                                <td>Insumo 1</td>
                                <td>000001</td>
                                <td>Marca 1</td>
                                <td>Modelo 1</td>
                            </tr>

                            <tr>
                                <td>Insumo 2</td>
                                <td>000002</td>
                                <td>Marca 2</td>
                                <td>Modelo 2</td>
                            </tr>

                            <tr>
                                <td>Insumo 3</td>
                                <td>000003</td>
                                <td>Marca 3</td>
                                <td>Modelo 3</td>
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
