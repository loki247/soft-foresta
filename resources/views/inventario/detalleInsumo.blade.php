@extends('plantilla')

@section('titulo')
    <title>ERP | Detalle Insumo</title>
@stop
@section('contenido')
    <br>
    <br>
    <script src="{{asset('js/jspdf.min.js')}}"></script>
    <script src="{{asset('js/generarPDF.js')}}"></script>
    <div class="content-wrapper">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" ><a href="{{'/'}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('inventario')}}">Inventario</a></li>
                <li class="breadcrumb-item">Detalle Insumo</li>
            </ol>
            <h4>Detalle Insumo</h4>
            <br>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="col-md-12" id="infoGeneral">
                        <table class="table table-sm">
                            <thead class="table-secondary">
                            <tr>
                                <th>Información del Insumo</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody class="table-bordered">
                            <tr>
                                <td>Insumo</td>
                                <td>Insumo 1</td>
                            </tr>
                            <tr>
                                <td>Fabricante</td>
                                <td>Marca 1</td>
                            </tr>
                            <tr>
                                <td>Modelo</td>
                                <td>Modelo 1</td>
                            </tr>
                            <tr>
                                <td>Código del insumo</td>
                                <td>000001</td>
                            </tr>
                            <tr>
                                <td>Stock</td>
                                <td>15</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <table class="table table-sm">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Descripción del Insumo</th>
                                </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <td>Descripcion</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
@stop
