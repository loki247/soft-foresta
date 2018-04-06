@extends('plantilla')

@section('contenido')
    <br>
    <br>
    <div class="content-wrapper">
        <div class="col-md-12">

            <a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>

            <h1>Datos del Usuario</h1>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="card card-register mx-auto">
                    <div class="card-header">Editar datos del usuario</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="exampleInputName">Nombre</label>
                                        <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Nombre">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleInputLastName">Apellidos</label>
                                        <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Apellido">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="correo@correo.com">
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="exampleInputPassword1">Contraseña</label>
                                        <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Contaseña">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleConfirmPassword">Confirmar contraseña</label>
                                        <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirmar contraseña">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <a class="btn btn-primary btn-block" href="#">Guardar</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-primary btn-block" href="#">Cancelar</a>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop