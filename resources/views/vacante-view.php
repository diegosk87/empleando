<?php
    $title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
    include 'templates/header.php';
?>

<link rel="stylesheet" href="css/estilosEmpleos.css">
<link rel="stylesheet" href="css/empresa/estilos.css">
<link rel="stylesheet" href="css/aspirante/index.css">

<script src="https://kit.fontawesome.com/e8948024cf.js" crossorigin="anonymous"></script>

<form method="POST" action="funciones/AplicarVacante.php" enctype='multipart/form-data'>
    <hr>
    <div class="general-vac">
        <div class="vervac">
            <div class="vac-1">
                <p class="darkk"> Empresa: <?= $vacante->datosEmpresa->nombre_empresa; ?></p>
            </div>
            <div class="vac-2">
                <img width="130" height="140" src="images/job_logo_5.jpg">
            </div>
            <div class="vac-3">
                <a href="#">Ver empresa</a>
            </div>
        </div>
        <hr>
        <hr>
        <p class="nomb-vac">Nombre vacante: <?= $vacante->titulo; ?></p>
        <hr>
        <hr>
        <div class="vervac1"><?= $vacante->descripcion; ?></div>
        <div class="vervac2">
            <p class="darkk"> <i class="far fa-calendar-alt"></i> Publicado: <?= $vacante->fecha_publicacion; ?></p>
            <p class="darkk"><i class="fas fa-briefcase"></i> Categoria: <?= $vacante->categoria; ?></p>
            <input type="Hidden" name="IdVacante" value="<?= $vacante->IdVacante; ?>" /></input>
            <p class="darkk"> <i class="fas fa-map-marker-alt"></i> Zona: <?= $vacante->Estado; ?></p>
            <p class="darkk"><i class="fas fa-dollar-sign"></i> Sueldo: <?= $vacante->salarioMin; ?> - <?= $vacante->salarioMax; ?></p>
            <p class="darkk" name="nombre_empresa"> <i class="fas fa-file-signature"></i> Tipo contrato: <?= $vacante->tipo_contrato; ?> </p>
            <hr>
        </div>
</form>

<div class="contenedor-sugeridas">
    <div class="vac-suger">
        <p>Otra vacante sugerida</p>
    </div>

    <div class="vac-suger1">
        <p>Otra vacante sugerida</p>
    </div>
</div>

<?php
    include 'templates/footer.php';
?>