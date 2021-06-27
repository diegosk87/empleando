<!doctype html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/empresa/navbar.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ef20df551b.js" crossorigin="anonymous"></script>
</head>

<body id="top">
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <header class="header">
        <nav class="menu_empresa ">
            <div class="logoEmpresa">
                <li class="nav__li"><a href="index.php">LOGOTIPO</a></li>
            </div>

            <div class="navbar">

                <ul clas="nav__ul">
                    <li class="nav__li"><a href="planesFacturas.html">Planes y facturas</a></li>
                    <li class="nav__li"><a href="busquedacv.php">Busquedas de CV'S</a></li>
                    <li class="nav__li"><a href="vacantes.php">Publicar vacantes</a></li>
                    <li class="nav__li"><a href="mis-vacantes.php">Mis vacantes</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <li class="nav__li dropdown">
                    <?= $empresa->nombre_empresa ?>
                    <a class="nav__lii dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mi Cuenta
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="IndexEmpresa.php">Mi Perfil</a>
                        <a class="dropdown-item" href="#">Cambiar Contraseña</a>
                        <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
                    </div>
                </li>
            </div>
        </nav>
    </header>