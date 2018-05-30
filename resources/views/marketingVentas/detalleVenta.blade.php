@extends('plantilla')

@section('titulo')
    <title>Soft-Foresta ERP | Detalle Venta</title>
@stop
@section('contenido')
    <br>
    <br>
    <script src="{{asset('js/jspdf.min.js')}}"></script>
    <script src="{{asset('js/generarPDF.js')}}"></script>
    <div class="content-wrapper">
        <div class="col-md-12">
            <a class="btn btn-primary text-light" href="javascript:window.history.back();"><i class="fa fa-fw fa-arrow-left"></i>Volver</a>
            <button id="generarPDFOrden" class="btn btn-primary text-light"><i class="fa fa-fw fa-file-pdf-o"></i>Exportar PDF</button>
            <h4>Detalle Venta</h4>
            <p class="h4" style="display: none" id="titulo">Orden de Compra</p>
            <br>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="col-md-12" id="infoGeneral">
                        <table class="table table-sm">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Información General</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <th>Nº Venta:</th><td>OV001</td>
                                </tr>
                                <tr>
                                    <th>Nº Cotización:</th><td>COT001</td>
                                </tr>
                                <tr>
                                    <th>Estado:</th><td>Abierta</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12" id="infoContacto">
                        <table class="table table-sm">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Información de Contacto</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <td>Teléfono Móvil: 912345678</td>
                                    <td>Teléfono Fijo: 452123456</td>
                                </tr>

                                <tr>
                                    <td>Correo: cliente1@cliente.cl</td>
                                    <td>Dirección: Dirección Nº 123</td>
                                </tr>

                                <tr>
                                    <td>Dirección de Envío: Dirección Nº 123</td>
                                    <td>Ciudad: Temuco</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12" id="observacionDespacho">
                        <table class="table table-sm">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Observaciones</th>
                                </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <td>Envío en 24 horas hábiles</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12" id="infoProductos">
                        <table class="table table-sm">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Detalle de Productos</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody class="table-bordered">
                                <tr>
                                    <td>Producto: Producto 1</td>
                                    <td>Cantidad: 5</td>
                                </tr>
                                <tr>
                                    <td>Precio Unitario Neto:</td>
                                    <td>$84034</td>
                                </tr>
                                <tr>
                                    <th>Total Neto:</th>
                                    <th>$420170</th>
                                </tr>
                                <tr>
                                    <td>Descuentos(-):</td>
                                    <td>$0</td>
                                </tr>
                                <tr>
                                    <td>Despacho:</td>
                                    <td>$0</td>
                                </tr>
                                <tr>
                                    <td>Total sin IVA:</td>
                                    <td>$420170</td>
                                </tr>
                                <tr>
                                    <td>IVA:</td>
                                    <td>$79830</td>
                                </tr>
                                <tr>
                                    <th>Total + IVA:</th>
                                    <th>$500000</th>
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
