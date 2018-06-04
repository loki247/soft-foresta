@extends('plantilla')

@section('titulo')
    <title>ERP | Registro de Maquinaria</title>
@stop

@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" ><a href="{{'/'}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{route('mantenimiento')}}">Mantenimiento</a></li>
                <li class="breadcrumb-item"><a href="{{route('mantenimiento.maquinariaRegistrada')}}">Maquinaria Registrada</a></li>
                <li class="breadcrumb-item">Registrar Máquina</li>
            </ol>
            <h1>Ficha maquinaria</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('mantenimiento.registrarMaquinaria')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label class="h3">Caracteristicas Generales</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="codigo">Código</label>
                                    <input type="text" class="form-control" id="codigo" name="codigo">
                                </div>

                                <div class="col-md-4">
                                    <label for="numSerie">Nº Serie</label>
                                    <input type="text" class="form-control" id="numSerie" name="numSerie">
                                </div>

                                <div class="col-md-4">
                                    <label for="horometro">Horometro</label>
                                    <input type="number" class="form-control" id="horometro" name="horometro">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="fabricante">Fabricante</label>
                                    <input type="text" class="form-control" id="fabricante" name="fabricante">
                                </div>

                                <div class="col-md-4">
                                    <label for="marca">Marca</label>
                                    <input type="text" class="form-control" id="marca" name="marca">
                                </div>

                                <div class="col-md-4">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>

                                <div class="col-md-3">
                                    <label for="ubicacion">Ubicación</label>
                                    <select class="form-control" id="ubicacion" name="ubicacion">
                                        <option value="1">Ubicación 1</option>
                                        <option value="2">Ubicación 2</option>
                                        <option value="3">Ubicación 3</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="seccion">Sección</label>
                                    <select class="form-control" id="seccion" name="seccion">
                                        <option value="1">Sección 1</option>
                                        <option value="2">Sección 2</option>
                                        <option value="3">Sección 3</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="grupo">Grupo</label>
                                    <input type="text" class="form-control" id="grupo" name="grupo">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="descripcion">Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                                </div>

                                <div class="col-md-4"></div>

                                <div class="col-md-4"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label class="h3">Caracteristicas Técnicas</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <label for="voltaje">Voltaje Nominal (V)</label>
                                    <input type="number" class="form-control" id="voltaje" name="voltaje">
                                </div>

                                <div class="col-md-3">
                                    <label for="amperaje">Amperaje Nominal (A)</label>
                                    <input type="number" class="form-control" id="amperaje" name="amperaje">
                                </div>

                                <div class="col-md-3">
                                    <label for="potencia">Potencia (Kw)</label>
                                    <input type="number" class="form-control" id="potencia" name="potencia">
                                </div>

                                <div class="col-md-3">
                                    <label for="frecuencia">Frecuencia (Hz)</label>
                                    <input type="number" class="form-control" id="frecuencia" name="frecuencia">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-1"></div>

                                <div class="col-md-2">
                                    <label for="capacidad">Capacidad (Kg)</label>
                                    <input type="number" class="form-control" id="capacidad" name="capacidad">
                                </div>

                                <div class="col-md-2">
                                    <label for="presion">Presión (PSI)</label>
                                    <input type="number" class="form-control" id="presion" name="presion">
                                </div>

                                <div class="col-md-2">
                                    <label for="velocidad">Velocidad</label>
                                    <input type="number" class="form-control" id="velocidad" name="velocidad">
                                </div>

                                <div class="col-md-2">
                                    <label for="tNominal">Tº Nominal (ºC)</label>
                                    <input type="number" class="form-control" id="tNominal" name="tNominal">
                                </div>

                                <div class="col-md-2">
                                    <label for="tMaxima">Tº Máxima (ºC)</label>
                                    <input type="number" class="form-control" id="tMaxima" name="tMaxima">
                                </div>

                                <div class="col-md-1"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-1"></div>

                                <div class="col-md-2">
                                    <label for="peso">Peso (Kg)</label>
                                    <input type="number" class="form-control" id="peso" name="peso">
                                </div>

                                <div class="col-md-2">
                                    <label for="dimensiones">Dimensiones</label>
                                    <input type="number" class="form-control" id="dimensiones" name="dimensiones">
                                </div>

                                <div class="col-md-2">
                                    <label for="regimen">Regimén</label>
                                    <select class="form-control" id="regimen" name="regimen">
                                        <option value="1">Monofásico</option>
                                        <option value="2">Bifásico</option>
                                        <option value="3">Trifásico</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label for="vidaUtil">Vída Util (Años)</label>
                                    <input type="number" class="form-control" id="vidaUtil" name="vidaUtil">
                                </div>

                                <div class="col-md-2">
                                    <label for="vibracion">Vibración</label>
                                    <input type="number" class="form-control" id="vibracion" name="vibracion">
                                </div>

                                <div class="col-md-1"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label class="h3">Fechas</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <label for="fabricacion">Fabricación</label>
                                    <input type="date" class="form-control" id="fabricacion" name="fabricacion">
                                </div>

                                <div class="col-md-2">
                                    <label for="compra">Compra</label>
                                    <input type="date" class="form-control" id="compra" name="compra">
                                </div>

                                <div class="col-md-2">
                                    <label for="instalacion">Instalación</label>
                                    <input type="date" class="form-control" id="instalacion" name="instalacion">
                                </div>

                                <div class="col-md-2">
                                    <label for="modificacion">Modificación</label>
                                    <input type="date" class="form-control" id="modificacion" name="modificacion">
                                </div>

                                <div class="col-md-2">
                                    <label for="operación">Operación</label>
                                    <input type="date" class="form-control" id="operación" name="operación">
                                </div>

                                <div class="col-md-2">
                                    <label for="eliminacion">Eliminación</label>
                                    <input type="date" class="form-control" id="eliminacion" name="eliminacion">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">

                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <input type="submit" class="btn btn-info" value="Registrar">
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
                                        <h5 class="modal-title" id="exampleModalLabel">Cancelar</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <p>¿Cancelar y salir?</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-info" type="button" data-dismiss="modal">No</button>
                                        <a class="btn btn-danger" href="javascript:window.history.back();">Si</a>
                                    </div>
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

