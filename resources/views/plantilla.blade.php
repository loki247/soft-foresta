<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('titulo')
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #009900">

    <!-- Barra superior -->
    <a class="navbar-brand" href="{{'/'}}">Soft-Foresta ERP</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive" style="background-color: #009900">

        <!-- Barra Lateral -->
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-link-text" data-toggle="tooltip" data-placement="right">
                <span class="nav-link text-light"><h5><i class="fa fa-fw fa-clock-o"></i>Opciones Recientes</h5></span>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contabilidad">
                <a class="nav-link text-light" href="#">
                    <span class="nav-link-text">Contabilidad</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Producción">
                <a class="nav-link text-light" href="#">
                    <span class="nav-link-text">Producción</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logística y Transporte">
                <a class="nav-link text-light" href="#">
                    <span class="nav-link-text">Logística y Transporte</span>
                </a>
            </li>

        </ul>

        <ul class="navbar-nav sidenav-toggler" title="Ocultar">

            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>

        </ul>

        <!-- Barra superior Usuario -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a href="{{'usuario'}}" class="nav-link text-light"><i class="fa fa-fw fa-user"></i>Nombre Apellido</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-light" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesión</a>
            </li>

        </ul>

    </div>
</nav>
    
    <!-- Contenido -->
    @yield('contenido')

    <!-- Logout -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Cerrar Sesión?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.html">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="sticky-footer">

        <div class="container">
            <div class="text-center">
                <small>© MacroActiva SPA 2018</small>
            </div>
        </div>

    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
</body>
</html>