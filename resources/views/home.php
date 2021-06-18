<?php
session_start();

if (isset($_SESSION['correo_empresa'])) {
    header("location:misvacantes.php");
}

// if (isset($_POST['submit'])) {
//     $nombre = $_POST['nombre_usuario'];
//     $apellido = $_POST['apellido'];
//     $correo = $_POST['correo_usuario'];
//     $clave_usuario = $_POST['contrasena_usuario'];
// }
?>

<!doctype html>
<html lang="es">

<head>
    <title>Empleando &mdash; - Encuentra el trabajo de tus sueños</title>
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
                <a class="nav__lii dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mi Cuenta
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                    <a class="dropdown-item" href="cvUsuario.php">Mi CV</a>
                    <a class="dropdown-item" href="funciones/cerrarsesion.php">Cerrar Sesión</a>
                </div>

                <div class="MyForm collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
                    <!-- SESION  -->

                    <ul id="MyForm" class="MyForm navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="pruebaslocas nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ASPIRANTE
                            </a>

                            <div id="Registros" class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                <form method="POST" action="funciones/accesousuario.php" class="p-4 border rounded col-12 dropdown-item">

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
                                            <input type="submit" onclick="HideElement()" value="Iniciar Sesión" class="btnAction_vacio btn px-4 btn-primary text-white" onclick="verificarusuario()">>
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
                                <form method="POST" action="funciones/accEmpresa.php" class="p-4 border rounded col-12 dropdown-item">

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

            </nav>

        </header>


        <!-- HOME -->
        <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="mb-5 text-center">
                            <h1 class="text-white font-weight-bold">El Trabajo de tus Sueños te está Esperando</h1>

                        </div>


                        <form method="" class="search-jobs-form">

                            <div class="row mb-5 align-items-center">

                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                                    <input type="text" class="form-control form-control-lg" placeholder="Título del trabajo, compañía..">
                                </div>

                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" data-size="4" title="Estado">

                                    </select>
                                </div>

                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" data-size="4" title="Categoria">
                                        <option value="">Administración</option>
                                        <option value="">Aduana y comercio Exterior</option>
                                        <option value="">Atención Clientes - Call Center</option>
                                        <option value="">Compras / Comercio Exterior</option>
                                        <option value="">Comunicación , diseño y arte</option>
                                        <option value="">Contabilidad - Finanzas</option>
                                        <option value="">Educación - Docencia - Consultoria</option>
                                        <option value="">Derecho - Leyes</option>
                                        <option value="">Ingenieria Industrial - Civil y construccion </option>
                                        <option value="">Informatica / Desarrollo / Telecomunicaciones</option>
                                        <option value="">Logistica / Transporte / Almacen</option>
                                        <option value="">Mercadotecnia - Publicidad</option>
                                        <option value="">Manufactura / Produccion / Mantenimiento</option>
                                        <option value="">Oficios y otros</option>
                                        <option value="">Pasantia - Trainee - Becarios</option>
                                        <option value="">Produccion y Manufactura</option>
                                        <option value="">Recursos Humanos</option>
                                        <option value="">Sector Salud </option>
                                        <option value="">Turismo - Gastronomia</option>
                                        <option value="">Ventas</option>
                                        <option value="">Otros</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" title="Jornada Laboral">
                                        <option>Medio Tiempo</option>
                                        <option>Tiempo completo</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row justify-content-center">
                                <div class="col align-self-end col-12 col-sm-4 col-md-6 col-lg-4 mb-4 mb-lg-12 ">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Buscar Empleo</button>
                                </div>
                            </div>



                        </form>



                        <!-- Registro de empresa -->

                        <div class="container-registro-empresa" id="registro-empresa" style="display: none;">




                            <div class="">

                                <header class="general-empresa">
                                    <span>
                                        <h3>Registro para empresas</h3>
                                    </span>
                                    <i class=" fas fa-times-circle" id="btnCerrar" style="font-size: 40px;"></i>
                                </header>

                                <form method="post" action="funciones/Regis_empresa.php" enctype='multipart/form-data' class="p-4 border rounded formContainer">
                                    <div class=" row form-group mb-4 justify-content-between ">


                                        <div class="col-12 center justify-content-center">
                                            <h3 class="col-md-12 text-white">Datos de acceso</h3>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="text-black" for="userForm">Correo Electrónico</label>
                                            <input name="correo_empresa" type="email" id="userForm" class="form-control" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="text-black">Contraseña</label>
                                            <div class="input-group">
                                                <input name="clave" type="Password" Class="form-control" required>
                                                <div class="input-group-append">
                                                    <button id="mostrar" class="btn btn-primary" type="button" onclick="mostrar()">
                                                        <span class="fa fa-eye-slash icon"></span> </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 center justify-content-cente">
                                            <h3 class="col-md-12 text-white">Empresa</h3>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="Nombre-empresa" for="">Nombre de la empresa</label>
                                            <input name="nombre_empresa" type="text" class="form-control" placeholder="" required>

                                            <div>

                                                </select>
                                                <label for="estado-empre" class="text-black"> Estado</label>
                                                <select name="Estado" class=" form-control" required>
                                                    <option value="">Seleccionar</option>
                                                    <option value="">Morelos</option>
                                                    <option value="">Ciudad de mexico</option>
                                                    <option value="">Queretaro</option>


                                                </select>

                                            </div>




                                            <label class="dir-empre" for="">Direccion de la empresa</label>
                                            <input name="Direccion" type="nombre" id="userForm" class="form-control" placeholder="Direccion" required>

                                            <label for="userForm" class="text-black">Número Telefónico</label>
                                            <input name="telefono_empresa" type="number" id="userForm" class="form-control" required>



                                        </div>
                                        <div class="col-md-5 ">



                                            <label class="rfc" for="">RFC</label>
                                            <input name="RFC" type="text" id="" class="form-control" placeholder="RFC" required>
                                            <label for="estado-empre" class="text-black"> Municipio</label>
                                            <select name="Municipio" class="form-control" required>
                                                <option value="">Seleccionar</option>
                                                <option value="">Cuernavaca</option>
                                                <option value="">Jiutepec</option>
                                            </select>
                                            <label for="giro-empresa" class="text-black"> Giro</label>
                                            <select name="Giro_empresa" id="" class="form-control" required>
                                                <option value="">Selecionar</option>
                                                <option value="Administracion">Administración</option>
                                                <option value="Biologia">Biología </option>
                                                <option value="Comunicaciones">Comunicaciones </option>
                                                <option value="Construccion">Construcción </option>
                                                <option value="Contabilidad-Finanzas">Contabilidad / Finanzas</option>
                                                <option value="C-P-DC">Creatividad, Producción, Diseño Comercial</option>
                                                <option value="Derecho">Derecho y Leyes </option>
                                                <option value="Educacion">Educación </option>
                                                <option value="Ingenieria">Ingeniería </option>
                                                <option value="Logistica">Logistica, Transportación y Operación</option>
                                                <option value="Mercadotecnia">Mercadotecnia, Publicidad y Operación</option>
                                                <option value="Recursos-Humanos">Recursos Humanos</option>
                                                <option value="Salud y Belleza">Salud y Belleza</option>
                                                <option value="Sector Salud">Sector Salud </option>
                                                <option value="Seguro">Seguro y Reaseguro</option>
                                                <option value="Tecnologias">Tecnologias de la información y Sistemas</option>
                                                <option value="Turismo">Turismo, Hospitalidad y Gastronomia</option>
                                                <option value="Ventas">Ventas </option>
                                                <option value="Veterinaria y Zoologia">Veterinaria y Zoologia </option>
                                            </select>







                                        </div>

                                    </div>

                                    <div class="button-empresa center">
                                        <input type="hidden" name="registro" value="empresa">
                                        <input type="submit" value="Registrarse" class="btn px-4 text-white">

                                    </div>

                                </form>


                            </div>

                        </div>

                        <!--FIN Registro de empresa -->

                        <!-- Registro de Usuario -->


                        <div class="registro-usuario-home" id="registro-usuario" style="display:none;">

                            <div class="col-lg-12 mb-5 ">
                                <header class="header-registro-usuario col-lg-12 mb-5">
                                    <span>
                                        <h3>Registro de Usuarios</h3>
                                    </span> <i class="mb-6 fas fa-times" id="btnClose"></i>
                                </header>
                                <form method="POST" id="prueba" action="funciones/Registro_usuario" class="p-4 border rounded formContainer">

                                    <!-- Datos de la cuenta-->
                                    <div class="form-group mb-4">
                                        <legend>Datos de la cuenta</legend>
                                        <div class="row form-group">
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <input name="nombre_usuario" type="text" id="tetx-nomb" class="txt-nomb form-control" autocomplete="new-password" placeholder="Nombre(s)" required>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <input name="apellido" type="text" id="txt-ape" class="txt-ape form-control" placeholder="Apellido paterno" required>
                                            </div>

                                        </div>
                                        <div class="row form-group ">

                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <input name="correo_usuario" type="text" id="txt-email" class="txt-email form-control" placeholder="Dirección de E-mail" required>
                                            </div>
                                            <div class="col-md-6 mb-3 mb-md-0">
                                                <input name="contrasena_usuario" type="password" id="txt-pass" class="txt-pass form-control" placeholder="Contraseña" required>
                                            </div>

                                        </div>

                                        <!-- Recaptcha-->
                                        <div class="row form-group ">
                                            <div class="g-recaptcha col-6" data-sitekey="localhost">

                                            </div>
                                            <br>
                                        </div>
                                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                        <div class="row form-group justify-content-end">
                                            <div class="col-md-12">

                                                <input type="submit" class="btnAction_vacio btn px-4 btn-primary text-white" placeholder="Registrarse">

                                            </div>

                                        </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="containerlogos">
            <div class="logo-slider">
                <!-- Logos  size 400x200 -->

                <div class="itemms"><a href="#"><img src="images/job_logo_1.jpg" alt=""></a></div>
                <div class="itemms"><a href="#"><img src="images/job_logo_2.jpg" alt=""></a></div>
                <div class="itemms"><a href="#"><img src="images/job_logo_3.jpg" alt=""></a></div>
                <div class="itemms"><a href="#"><img src="images/job_logo_4.jpg" alt=""></a></div>
                <div class="itemms"><a href="#"><img src="images/job_logo_5.jpg" alt=""></a></div>
                <div class="itemms"><a href="#"><img src="images/job_logo_2.jpg" alt=""></a></div>
                <div class="itemms"><a href="#"><img src="images/job_logo_3.jpg" alt=""></a></div>
                <div class="itemms"><a href="#"><img src="images/job_logo_4.jpg" alt=""></a></div>
                <div class="itemms"><a href="#"><img src="images/job_logo_5.jpg" alt=""></a></div>


            </div>

        </div>










        <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h2 class="text-white">¿Buscas un trabajo?</h2>
                        <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci
                            impedit.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <a href="#top" class="btn btn-warning btn-block btn-lg">Registrate</a>
                    </div>
                </div>
            </div>
        </section>



        <footer class="site-footer">
            <!-- Botones Sliders
        <a href="#top" class="smoothscroll scroll-top">
          <span class="icon-keyboard_arrow_up"></span>
        </a>
  -->
            <div class="container">
                <div class="row mb-5">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Search Trending</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Web Developers</a></li>
                            <li><a href="#">Python</a></li>
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Company</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Support</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Contact Us</h3>
                        <div class="footer-social">
                            <a href="#"><span class="icon-facebook"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-instagram"></span></a>
                            <a href="#"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12">
                        <p class="copyright"><small>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made
                                with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </small></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script src="vendor/sweetalert2/sweetalert2@10.js"></script>
    <script src="js/prueba.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/prueba.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>



    <script>
        $('.logo-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 1000,
            infinte: true



        });
    </script>

    <script type="text/javascript">
        var onloadCallback = function() {
            alert("grecaptcha is ready!");
        };
    </script>

    <script src="js/custom.js"></script>
    <script src="js/previsualizar.js"></script>
    <script>
        function mostrar() {
            var x = document.getElementById("mostrar");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script type="text/javascript">
        document.getElementById('MyForm').style.display = 'block';

        function HideElement() {

            document.getElementById('MyForm').style.display = 'block';

        }
    </script>
</body>
</html>