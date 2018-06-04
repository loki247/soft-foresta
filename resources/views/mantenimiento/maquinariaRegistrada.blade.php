@extends('plantilla')

@section('titulo')
    <title>ERP | Maquinaria Registrada</title>
@stop
@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" ><a href="{{'/'}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('mantenimiento')}}">Mantenimiento</a></li>
                <li class="breadcrumb-item">Maquinaria Registrada</li>
            </ol>
            <h1>Maquinaria Registrada</h1>
            <a href="{{route('mantenimiento.registroMaquinaria')}}" class="btn btn-info text-light"><i class="fa fa-fw fa-upload"></i>Registro de Maquinaria</a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br>

                    <form>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="filtroSeccion">Sección</label>
                                    <select name="filtroSeccion" id="filtroSeccion" class="form-control">
                                        <option value="0">Todas</option>
                                        <option value="1">Seccion 1</option>
                                        <option value="2">Seccion 2</option>
                                        <option value="3">Seccion 3</option>
                                    </select>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>

                    <div class="col-md-12">
                        <table class="table">
                            <thead class="table-info">
                                <tr>
                                    <th>Nombre Máquina</th>
                                    <th>Código Interno</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Año</th>
                                    <th>Sección</th>
                                    <th>Horas de trabajo</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <td><a href="{{route('mantenimiento.editarMaquina')}}">Máquina 1</a></td>
                                    <td>000001</td>
                                    <td>Marca 1</td>
                                    <td>Modelo 1</td>
                                    <td>2018</td>
                                    <td>Sección 1</td>
                                    <td>10000</td>
                                    <td><a href="{{route('mantenimiento.protocolos')}}" class="btn btn-info" title="Crear Protocolo de Mantención"><i class="fa fa-fw fa-wrench"></i><i class="fa fa-fw fa-clock-o"></i></a>
                                        <a href="{{route('mantenimiento.planMantenimiento')}}" class="btn btn-danger" title="Ingresar Mantención Correctiva"><i class="fa fa-fw fa-wrench"></i><i class="fa fa-fw fa-exclamation"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="#">Máquina 2</a></td>
                                    <td>000002</td>
                                    <td>Marca 2</td>
                                    <td>Modelo 2</td>
                                    <td>2018</td>
                                    <td>Sección 2</td>
                                    <td>15000</td>
                                    <td><a href="{{route('mantenimiento.protocolos')}}" class="btn btn-info" title="Crear Protocolo de Mantención"><i class="fa fa-fw fa-wrench"></i><i class="fa fa-fw fa-clock-o"></i></a>
                                        <a href="{{route('mantenimiento.planMantenimiento')}}" class="btn btn-danger" title="Ingresar Mantención Correctiva"><i class="fa fa-fw fa-wrench"></i><i class="fa fa-fw fa-exclamation"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><a href="#">Máquina 3</a></td>
                                    <td>000003</td>
                                    <td>Marca 3</td>
                                    <td>Modelo 3</td>
                                    <td>2018</td>
                                    <td>Sección 3</td>
                                    <td>5000</td>
                                    <td><a href="{{route('mantenimiento.protocolos')}}" class="btn btn-info" title="Crear Protocolo de Mantención"><i class="fa fa-fw fa-wrench"></i><i class="fa fa-fw fa-clock-o"></i></a>
                                        <a href="{{route('mantenimiento.planMantenimiento')}}" class="btn btn-danger" title="Ingresar Mantención Correctiva"><i class="fa fa-fw fa-wrench"></i><i class="fa fa-fw fa-exclamation"></i></a>
                                    </td>
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
