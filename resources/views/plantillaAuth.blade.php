<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('titulo')
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #009900">

    <!-- Barra superior -->
    <a class="navbar-brand" href="{{'/'}}">Soft-Foresta ERP</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

</nav>

<!-- Contenido -->
@yield('contenido')


<!-- Pie de página -->
<footer class="sticky-footer">

    <div class="container">
        <div class="text-center">
            <small>© MacroActiva SPA 2018</small>
        </div>
    </div>

</footer>

<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('js/sb-admin.min.js')}}"></script>
<script src="{{asset('js/sb-admin-charts.min.js')}}"></script>
</body>
</html>