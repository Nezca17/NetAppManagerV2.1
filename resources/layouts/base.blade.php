<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-NetAppManager</title>
    <link rel="shortcut icon" href="icon/Nam-32x32.png">
    <!--Import Styles -->
    <link rel="stylesheet" href="Css/myStyle.css">
    <link rel="stylesheet" href="js/Frameworks/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="js/Frameworks/fontawesome-free-6.3.0-web/css/all.css">
    <link rel="stylesheet" href="js/Frameworks/DataTables/datatables.min.css">

</head>

<body class="">
    <header class="container-fluid   bg-dark">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="">
                            <img src="images/LogoBlanco.png" class="img img-fluid" alt="">
                        </a>


                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="container-fluid ">
                                <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                    <div class="col-12 ">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>

                                    </div>
                                </div>

                                <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                    <div class="col-sm-12 ">
                                        <div class="offcanvas-body">
                                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="index.php">DashBoard</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Mantenimientos
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-dark">
                                                        <li><a class="dropdown-item " href="pages/VistaGeneralMops.php">Vista General</a></li>
                                                        <li><a class="dropdown-item " href="pages/NuevoMantenimiento.php">Nuevo mantenimiento</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>

                                <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                    <div class="col-sm-12 ">
                                        <form class="d-flex mt-3" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-success" type="submit">Buscar</button>
                                        </form>

                                    </div>
                                </div>

                                <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|} mt-5 pie mb-3">
                                    <div class="col-sm-12 offset-md-5">
                                        <form class="" role="User">
                                            <label for="" class="me-1">

                                               // <?php NombreUsuario() ?>
                                                <i class="fa-regular fa-circle-user"></i>
                                            </label>
                                            <button class="btn btn-danger" type="button" id="btnCerrarSesion" name="btnCerrarSesion"><i class="fa-solid fa-right-from-bracket fa-fade"></i></button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row pb-3 bg-secondary">
            <div class="col-md-8 textColorwhite">
                <h2>Dashboard</h2>
            </div>

            <div class="col-md-4 ">
                <p></p>
            </div>
        </div>
        <div class="row pb-3 pt-3">
            <div class="col-md-8 textColorwhite">

                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">inicio</a></li>
                    </ol>
                </nav>

            </div>
            <div class="col-md-4 text-center">

            </div>
        </div>

    </header>


    <main class="container-fluid ">
        <div class="container ">


        </div>
    </main>

</body>
    <footer>
    </footer>
</html>