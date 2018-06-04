@extends('plantillaAuth')

@section('titulo')
    <title>ERP | Registro de usuario</title>
@stop

@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" ><a href="{{'/'}}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Usuario</a></li>
                <li class="breadcrumb-item">Registro Usuario</li>
            </ol>
            <h1>Datos del Usuario</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="card card-register mx-auto">
                    <div class="card-header">Ingresar datos del usuario</div>
                    <div class="card-body">

                        <form method="post" action="{{route('usuario.store')}}">
                            {{ csrf_field() }}
                            <div class="form-group">

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="nombre">Nombre</label>
                                        <input class="form-control" id="nombre" name="nombre" type="text" aria-describedby="nameHelp" placeholder="Nombre">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="apellidos">Apellidos</label>
                                        <input class="form-control" id="apellidos" name="apellidos" type="text" aria-describedby="nameHelp" placeholder="Apellido">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="correo@correo.com">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="direccion">Direccion</label>
                                        <input class="form-control" id="direccion" name="direccion" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Telefono</label>
                                        <input class="form-control" id="telefono" name="telefono" type="text" placeholder="9XXXXXXXX">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="ciudad">Ciudad</label>
                                        <input class="form-control" id="ciudad" name="ciudad" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="password">Contraseña</label>
                                        <input class="form-control" id="password" name="contrasena" type="password" placeholder="Contraseña">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="confirmarPassword">Confirmar contraseña</label>
                                        <input class="form-control" id="confirmarPassword" type="password" placeholder="Confirmar contraseña">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-primary" value="Registrar">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-danger" value="Cancelar">
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