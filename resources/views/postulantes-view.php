<?php
    $title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
    include 'templates/business-header.php';
?>

<main class="container-registro-empresa  row">
    <hr>

    <!-- ================ división del perfil ===============-->
    <div class="generaaal">


        <div class="general-empresa ">
            <div class="">
                <legend>Postulantes</legend>
            </div>
        </div>

        <div class="row form-group  justify-content-center text-black">
            <select class="col-md-2 selectpicker" data-live-search="true" name="Area" id="" title="Area"></select>
            <select class="col-md-2 selectpicker" data-live-search="true" name="Puesto" id="" title="Puesto"></select>
            <button type="submit" class="btnVerCVS" title="Ver">Ver</button>
        </div>
        <hr>

        <div class="datosusu">
            <div class="Numera">
                <h5>#</h5>
            </div>
            <div class="candita">
                <h5>Candidatos</h5>
            </div>
            <div class="candita1">
                <h5>Ubicacion</h5>
            </div>
            <div class="candita2">
                <h5>Fecha</h5>
            </div>
            <div class="candita3">
                <h5>Empleos en CV</h5>
            </div>
            <div class="candita4">
                <h5>Sueldo</h5>
            </div>
            <div class="candita5">
                <h5>Ver candidatos</h5>
            </div>
            <div class="candita6">
                <h5>Carta</h5>
            </div>
        </div>

        <tbody>
            <?php 
            $index = 1;
            foreach($applicants as $applicant) {

            ?>
                <div class="contenedor-dato">

                    <div class="numera">
                        <tr><h5><?= $index ?></h5></tr>
                    </div>

                    <div class="datoscan ">
                        <div class="dat1">
                            <td><i class="fas fa-user"></i><?= $applicant->usuario->nombre_usuario; ?></td>
                        </div>
                        <div class="dat2">
                            <td><i class="fas fa-hourglass-start"></i> </td>
                        </div>
                        <div class="dat3">
                            <td><i class="fas fa-user-graduate"></i><?= $applicant->usuario->puesto ?></td>
                        </div>
                        <div class="dat4">
                            <td><i class="fas fa-user-friends"></i><?= $applicant->usuario->estado_civil ?></td>
                        </div>

                    </div>
                    <div class="Ubic">
                        <td><?= $applicant->vacante->Estado ?></td>
                    </div>
                    <div class="Ubic1">
                        <td>20/11/2021</td>
                    </div>
                    <div class="Ubic2">
                        <td></td>
                    </div>
                    <div class="Ubic3">
                        <td>$<?= $applicant->usuario->salarioMax ?></td>
                    </div>

                    <div class="Ubic4">
                        <td>
                            <h5><a href="ver-cv.php?correo_usuario=<?= $applicant->usuario->correo_usuario ?>" class="">Ver</a></h5>
                        </td>
                    </div>

                    <div class="Ubic5">

                        <div class="doss">
                            <td>
                                <h5><a href="" class="verde fas fa-arrow-right"></a></h5>
                            </td>
                        </div>
                        <div class="dosss">
                            <td>
                                <h5><a href="" class="rojo fas fa-arrow-right"></a></h5>
                            </td>
                        </div>

                    </div>



                </div>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </div>
</main>

<?php
    include 'templates/business-footer.php';
?>