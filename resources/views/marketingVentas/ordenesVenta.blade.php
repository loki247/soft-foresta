@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Ventas</title>
@stop
@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-info text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
                    <h1>Ventas</h1>
                    <br>

                    <form>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="filtroSeccion">Nº Venta</label>
                                    <input type="text" class="form-control" id="numCotizacion" name="numCotizacion">
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>

                    <div class="col-md-12">
                        <table class="table table-sm">
                            <thead class="table-info">
                            <tr>
                                <th>Nº Venta</th>
                                <th>Cliente</th>
                                <th>Fecha</th>
                                <th>Precio Total</th>
                            </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <td><a href="{{route('marketingVentas.detalleVenta')}}">OV001</a></td>
                                    <td>Cliente 1</td>
                                    <td>01-06-2018</td>
                                    <td>$500000</td>
                                </tr>

                                <tr>
                                    <td><a href="#">OV002</a></td>
                                    <td>Cliente 2</td>
                                    <td>01-06-2018</td>
                                    <td>$250000</td>
                                </tr>

                                <tr>
                                    <td><a href="#">OV003</a></td>
                                    <td>Cliente 3</td>
                                    <td>01-06-2018</td>
                                    <td>$5000000</td>
                                </tr>
                            </tbody>
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
