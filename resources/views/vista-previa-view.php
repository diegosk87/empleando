<?php
$title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
include 'templates/header.php';
?>
<link rel="stylesheet" href="css/estilosCV.css">

<div class="perfilCV">
    <div class="foto-perfil">
        <label id="image-uploader" style="background-image: url('<?= $usuario->UrlImagen; ?>');"></label>
    </div>
    <div class="titulo">
        <h2><?= $usuario->puesto; ?></h2>
        <div class="form-group green-border-focus text-area">
            <textarea class="form-control" rows="3" maxlength="200"><?= $usuario->descripcion; ?></textarea>
        </div>
        <hr>
        <h3>$<?= $usuario->salarioMin; ?>-$<?= $usuario->salarioMax; ?></h3>
    </div>
</div>

<div class="datos-personalesCV">
    <table>
        <tr>
            <td>
                <i class="fas fa-user"></i> <?= $usuario->nombre_usuario; ?>
            </td>
            <td>
                <i class="fa fa-intersex"></i> <?= $usuario->sexo; ?>
            </td>
            <td>
                <i class="fas fa-mail-bulk"></i> <?= $usuario->correo_usuario; ?>
            </td>
        </tr>
        <tr>
            <td>
                <i class="fas fa-user-friends"></i> <?= $usuario->estado_civil; ?>
            </td>
            <td>
                <i class="fa fa-calendar"></i> <?= $usuario->fecha_nacimiento; ?>
            </td>
            <td>
                <i class="fa fa-phone-square"></i> <?= $usuario->numero_telefonico; ?>
            </td>
        </tr>
        <tr>
            <td>
                <i class="fas fa-user"></i> <?= $usuario->edad; ?>
            </td>
            <td>
                <i class="fas fa-map-marked-alt"></i> <?= $usuario->Estado; ?>
            </td>
        </tr>
    </table>
</div>

<div class="datos-escolaresCV">
    <table class="estudios">
        <tbody>
            <?php if($cvEscolaridad) { ?>
                <tr>
                    <td class="icono-estudios">
                    </td>
                    <td>
                        <h3 class="nombre-universidad"><?= $cvEscolaridad->escolaridad; ?></h3>
                        <h4><?= $cvEscolaridad->institucion; ?></h4>
                        <p class="carrera"></p>
                        <p><i class="fa fa-calendar"></i> Inicio: <?= $cvEscolaridad->FechaIni_esco; ?>,<i class="fa fa-calendar"></i> Final <?= $cvEscolaridad->FechaFin_esco; ?></p>
                    </td>
                </tr>
                <br>
            <?php } else { ?>
                <h3 class="alto">No hay datos escolares.</h3>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="datos-laboralesCV">
    <div class="trabajos alto">
        <tbody>
            <?php if($cvLaboral) { ?>
                <h3 class="alto"><i class="fas fa-building"></i><?= $cvLaboral->empresa; ?></h3>
                <h4><i class="fas fa-briefcase"></i><?= $cvLaboral->puestos; ?></h4>
                <p>Inicio: <i class="far fa-calendar-alt"></i><?= $cvLaboral->FechaIni; ?></p>
                <p name="" id="" autofocus>Fin: <i class="far fa-calendar-alt"></i><?= $cvLaboral->FechaFin; ?></p>
                <h4>Actividades:</h4>
                <p><?= $cvLaboral->actividades; ?></p>
                <hr>
            <br>
            <?php } else { ?>
                <h3 class="alto">No hay datos laborales.</h3>
            <?php } ?>
        </tbody>
    </div>
</div>

<div class="datos-complementariosCV">
    <tbody>
        <?php if($cvIdiomaHabilidad) { ?>
            <div class="complementario">
                <h2>Idiomas</h2>
                <ul>
                    <li><i class="fas fa-language"></i><?= $cvIdiomaHabilidad->idioma_primario; ?>-<?= $cvIdiomaHabilidad->idioma_prim_dominio; ?></li>
                </ul>
            </div>
            <div class="complementario">
                <h2>Software</h2>
                <ul>
                    <li><i class="fas fa-file-excel"></i><?= $cvIdiomaHabilidad->habilidad_1; ?>-<?= $cvIdiomaHabilidad->habilidad_1_nivel; ?></li>
                </ul>
            </div>
        <?php } else { ?>
            <h3 class="alto">No hay datos complementarios.</h3>
        <?php } ?>
        <div class="complementario">
            <h2>Certificaciones</h2>
            <?php if($cvCertificaciones) { ?>
                <ul>
                    <li><i class="fas fa-file-certificate"></i><?= $cvCertificaciones->certificacion; ?></li>
                    <li><i class="fa fa-calendar"><?= $cvCertificaciones->fecha; ?></li>
                </ul>
            <?php } else { ?>
                <h3 class="alto">No hay datos de cetificaciones.</h3>
            <?php } ?>
        </div>
    </tbody>
</div>

<?php
include 'templates/footer.php';
?>