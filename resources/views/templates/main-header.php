<!doctype html>
<html lang="es">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://kit.fontawesome.com/e8948024cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        <header class="site-navbar mt-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-white ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php if (isset($_SESSION['correo_usuario'])) { ?>
                    <a class="nav__lii dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mi Cuenta
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php if ($_SESSION['tipo_usuario'] == 1) { ?>
                        <a class="dropdown-item" href="cv.php">Mi CV</a>
                        <a class="dropdown-item" href="postulaciones.php">Mis postulaciones</a>
                        <a class="dropdown-item text-danger" href="logout.php">Cerrar Sesión</a>
                    <?php 
                    } 
                    else {
                    ?>
                        <a class="dropdown-item" href="#">Planes y facturas</a>
                        <a class="dropdown-item" href="#">Busquedas de CV'S</a>
                        <a class="dropdown-item" href="vacantes.php">Publicar vacantes</a>
                        <a class="dropdown-item" href="mis-vacantes.php">Mis vacantes</a>
                        <a class="dropdown-item text-danger" href="logout.php">Cerrar sesion</a>
                    <?php } ?>
                    </div>
                <?php 
                } 
                else {    
                ?>
                <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
                    <!-- SESION  -->

                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="pruebaslocas nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ASPIRANTE
                            </a>

                            <div id="Registros" class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                <form method="POST" action="login.php" class="p-4 border rounded col-12 dropdown-item">

                                    <div class="row form-group">
                                        <div class="col-md-12 mb-3 mb-md-0">
                                            <input name="correo_usuario" type="text" id="txt-email" class="form-control" placeholder="Correo Electrónico">
                                        </div>
                                    </div>
                                    <div class="row form-group mb-4">
                                        <div class="col-md-12 mb-3 mb-md-0">
                                            <input name="contrasena_usuario" type="password" id="txt-pass" class="form-control" placeholder="Contraseña">
                                        </div>
                                    </div>
                                    <div class="row form-group mb-4">
                                        <div class="col-md-12 mb-3 mb-md-0">
                                            <a href="recuperador.html">¿Olvidaste tu contraseña?</a>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <input type="submit" onclick="HideElement()" value="Iniciar Sesión" class="btnAction_vacio btn px-4 btn-primary text-white" onclick="verificarusuario()">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                EMPRESA
                            </a>

                            <div id="Registros" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <form method="POST" action="login.php" class="p-4 border rounded col-12 dropdown-item">

                                    <div class="row form-group">
                                        <div class="col-md-12 mb-3 mb-md-0">
                                            <input name="correo_empresa" type="text" id="fname" class="form-control" placeholder="Correo Electrónico">
                                        </div>
                                    </div>
                                    <div class="row form-group mb-4">
                                        <div class="col-md-12 mb-3 mb-md-0">
                                            <input name="contrasena_empresa" type="password" id="fname" class="form-control" placeholder="Contraseña">
                                        </div>
                                    </div>
                                    <div class="row form-group mb-4">
                                        <div class="col-md-12 mb-3 mb-md-0">
                                            <a href="recuperador.html">¿Olvidaste tu contraseña?</a>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">

                                            <input type="submit" value="Iniciar Sesión" class="btn px-4 btn-primary text-white">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="registro nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                REGISTRARSE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item text-black" id="opcRegistro" href="#">SOY USUARIO</a>
                                <hr>
                                <a class="dropdown-item text-black" id="opcRegistroEmpresa" href="#">SOY EMPRESA</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php } ?>
            </nav>
        </header>