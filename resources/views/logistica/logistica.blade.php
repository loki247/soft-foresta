@extends('plantilla')

@section('titulo')
    <title>ERP | Logística y Transporte</title>
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
                        <li class="breadcrumb-item">Logística y Transporte</li>
                    </ol>
                    <h1>Logística y Transporte</h1>
                    <br>
                </div>

                <div class="col-12">

                    <style>
                        /* Always set the map height explicitly to define the size of the div
                         * element that contains the map. */
                        #map {
                            height: 400px;
                        }

                    </style>

                    <div id="map"></div>
                    <script>

                        function initMap() {
                            var myLatLng = {lat: -38.767683, lng: -72.764586};

                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 18,
                                center: myLatLng,
                                mapTypeId: 'hybrid'

                            });

                            var marker = new google.maps.Marker({
                                position: myLatLng,
                                map: map,
                                title: 'Hello World!'
                            });
                        }
                    </script>
                    <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwGYMV0iO0D6IQuqZ9SuhoqhAgJfjhvPA&callback=initMap">
                    </script>

                </div>
            </div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
@stop
