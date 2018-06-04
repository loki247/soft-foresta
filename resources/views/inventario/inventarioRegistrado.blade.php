@extends('plantilla')

@section('titulo')
    <title>ERP | Inventario Registrado</title>
@stop
@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" ><a href="{{'/'}}">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="{{route('inventario')}}">Inventario</a></li>
                        <li class="breadcrumb-item">Inventario Registrado</li>
                    </ol>
                    <h1>Inventario Registrado</h1>
                    <a href="{{route('inventario.registroInventario')}}" class="btn btn-info text-light">Registrar Insumos</a>

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
                        <table class="table table-sm">
                            <thead class="table-info">
                                <tr>
                                    <th>Nombre Insumo</th>
                                    <th>Código Interno</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <td><a href="{{route('inventario.detalleInsumo')}}">Insumo 1</a></td>
                                    <td>000001</td>
                                    <td>Marca 1</td>
                                    <td>Modelo 1</td>
                                </tr>

                                <tr>
                                    <td><a href="#">Insumo 2</a></td>
                                    <td>000002</td>
                                    <td>Marca 2</td>
                                    <td>Modelo 2</td>
                                </tr>

                                <tr>
                                    <td><a href="#">Insumo 3</a></td>
                                    <td>000003</td>
                                    <td>Marca 3</td>
                                    <td>Modelo 3</td>
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
