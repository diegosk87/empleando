<?php
$title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
include 'templates/header.php';
?>

<link rel="stylesheet" href="css/estilosEmpleos.css">
<link rel="stylesheet" href="css/empresa/estilos.css">
<link rel="stylesheet" href="css/aspirante/index.css">

<script src="https://kit.fontawesome.com/e8948024cf.js" crossorigin="anonymous"></script>

<!-- Buscador de empleo -->
<section class="container home-section ">
    <form action="busqueda-empleo.php" method="POST" class="search-jobs-form">

        <div class="row mb-5 align-items-center" id="formulario-busqueda">

            <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                <input name="busqueda" type="text" class="form-control form-control-lg" placeholder="Título del trabajo, compañía.." value="<?= $filter['busqueda'] ?>">
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                <select name="estado" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Estado">
                </select>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                <select name="categoria" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Categoria">
                    <option>Seleccionar</option>
                    <option>Administración</option>
                    <option>Aduana y comercio Exterior</option>
                    <option>Atención Clientes - Call Center</option>
                    <option>Compras / Comercio Exterior</option>
                    <option>Comunicación , diseño y arte</option>
                    <option>Contabilidad - Finanzas</option>
                    <option>Educación - Docencia - Consultoria</option>
                    <option>Derecho - Leyes</option>
                    <option>Ingenieria Industrial - Civil y construccion </option>
                    <option>Informatica / Desarrollo / Telecomunicaciones</option>
                    <option>Logistica / Transporte / Almacen</option>
                    <option>Mercadotecnia - Publicidad</option>
                    <option>Manufactura / Produccion / Mantenimiento</option>
                    <option>Oficios y otros</option>
                    <option>Pasantia - Trainee - Becarios</option>
                    <option>Produccion y Manufactura</option>
                    <option>Recursos Humanos</option>
                    <option>Sector Salud </option>
                    <option>Turismo - Gastronomia</option>
                    <option>Ventas</option>
                    <option>Otros</option>
                </select>
            </div>


            <div class="col-12 col-sm-6 col-md-3 col-lg-3 mb-4 mb-lg-0">
                <select name="tiempo" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Jornada Laboral">
                    <option>Medio Tiempo</option>
                    <option>Tiempo completo</option>
                </select>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col align-self-end col-12 col-sm-4 col-md-6 col-lg-4 mb-4 mb-lg-12 ">
                <input type="submit" value="Buscar empleo" name="search" id="search" class="btn btn-primary btn-lg btn-block text-white btn-search" class="icon-search icon mr-2"></input>
            </div>
        </div>

    </form>
</section>

<div class="resultados-busqueda">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
        <tbody>
            <?php foreach($vacantes as $vacante) { ?>
                <div id=alljobs>
                    <div class="publicacion_titulo card-header  row">
                        <p> <i class="far fa-calendar-alt"></i> Publicado: <?= $vacante->fecha_publicacion ?> </p>
                    </div>
                    <div class="card-body">
                        <h6 class="publicacion_titulo">Empresa: <?= $vacante->nombre_empresa ?></h6>
                        <hr>
                        <h5 class="publicacion_titulo"><?= $vacante->titulo ?></h5>
                        <div class="logs ">
                            <img width="136" height="140" src="images/job_logo_5.jpg">
                        </div>
                        <hr>

                        <div class="contenedor-busc">
                            <div class=" busc-trabajo">
                                <p class="card-text "> <i class="fas fa-dollar-sign"></i> De <?= $vacante->salarioMin ?> - <?= $vacante->salarioMax ?></p>
                            </div>
                            <div class="busc-trabaj">
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i><?= $vacante->Municipio ?></p>
                            </div>
                        </div>
                        <a href="vacante.php?IdVacante=<?= $vacante->IdVacante ?>" id="datos" class="btn btn-primary">Ver vacante</a>
                    </div>
                    <br>
                </div>
            <?php } ?>
        </tbody>
    </div>
</div>

<?php
    include 'templates/footer.php';
?>