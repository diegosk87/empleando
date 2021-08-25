<?php
    $title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
    include 'templates/business-header.php';
?>
<link rel="stylesheet" href="css/estilosCV.css">
<div class="perfilCV">
    <div class="foto-perfil">
        <img src="<?= $usuario->UrlImagen ?>" alt="">
    </div>
    <div class="titulo">
        <h2><?= $usuario->puesto ?></h2>
        <div class="form-group green-border-focus text-area">
            <textarea class="form-control" rows="3" maxlength="200"><?= $usuario->descripcion ?></textarea>
        </div>
        <hr>
        <h3>$<?= $usuario->salarioMin ?>-$<?= $usuario->salarioMax ?></h3>
    </div>
</div>

<div class="datos-personalesCV">
    <table>
        <tr>
            <td>
                <i class="fas fa-user"></i><?= $usuario->nombre_usuario ?>
            </td>
            <td>
                <i class="fa fa-intersex"></i><?= $usuario->sexo ?>
            </td>
            <td>
                <i class="fas fa-mail-bulk"> </i><?= $usuario->correo_usuario ?>
            </td>
        </tr>
        <tr>
            <td>
                <i class="fas fa-user-friends"></i><?= $usuario->estado_civil ?>
            </td>
            <td>
                <i class="fa fa-calendar"></i><?= $usuario->fecha_nacimiento ?>
            </td>
            <td>
                <i class="fa fa-phone-square"></i><?= $usuario->numero_telefonico ?>
            </td>
        </tr>
        <tr>
            <td>
                <i class="fas fa-user"></i><?= $usuario->edad ?>
            </td>
            <td>
                <i class="fas fa-map-marked-alt"></i><?= $usuario->Estado ?>
            </td>
        </tr>
    </table>

</div>
<div class="datos-escolaresCV">
    <table class="estudios">
        <tbody>
            <?php foreach($cvEscolaridad as $escolaridad) { ?>
                <tr>
                    <td class="icono-estudios">

                    </td>
                    <td>
                        <h3 class="nombre-universidad"><?= $escolaridad->escolaridad ?></h3>
                        <h4><?= $escolaridad->institucion ?></h4>
                        <p class="carrera"></p>
                        <p><i class="fa fa-calendar"></i> Inicio: <?= $escolaridad->FechaIni_esco ?>, <i class="fa fa-calendar"></i> Final: <?= $escolaridad->FechaFin_esco ?></p>
                    </td>
                </tr>
            <?php } ?>
            <br>
        </tbody>
    </table>



</div>

<div class="datos-laboralesCV">
    <div class="trabajos alto">
        <tbody>
            <?php foreach($cvLaboral as $laboral) { ?>
                <h3 class="alto"><i class="fas fa-building"></i><?= $laboral->empresa ?></h3>
                <h4><i class="fas fa-briefcase"></i><?= $laboral->puestos ?></h4>
                <p>Inicio: <i class="far fa-calendar-alt"></i><?= $laboral->FechaIni ?></p>
                <p name="" id="" autofocus>Fin: <i class="far fa-calendar-alt"></i><?= $laboral->FechaFin ?></p>
                <h4>Actividades:</h4>
                <p><?= $laboral->actividades ?></p>
                <hr>
            <?php } ?>
            <br>  
        </tbody>
    </div>
</div>

<div class="datos-complementariosCV">
    <tbody>
        <?php foreach($cvIdiomaHabilidad as $idioma) { ?>
            <div class="complementario">
                <h2>Idiomas</h2>
                <ul>
                    <li><i class="fas fa-language"></i><?= $idioma->idioma_primario ?>-<?= $idioma->idioma_prim_dominio ?></li>
                </ul>
            </div>
            <div class="complementario">
                <h2>Software</h2>
                <ul>
                    <li><i class="fas fa-file-excel"></i><?= $idioma->habilidad_1 ?>-<?= $idioma->habilidad_1_nivel ?></li>
                </ul>
            </div>
        <?php } ?>
    </tbody>
    <?php foreach($cvCertificaciones as $certificacion) { ?>
        <div class="complementario">
            <h2>Certificaciones</h2>
            <ul>
                <li><i class="fas fa-file-certificate"></i> <?= $certificacion->certificacion ?></li>
                <li><i class="fa fa-calendar"></i> <?= $certificacion->fecha ?></li>
            </ul>
        </div>
    <?php } ?>
    </tbody>
</div>

<?php
    include 'templates/business-footer.php';
?>