<?php
$title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
include 'templates/business-header.php';
?>

<div class="container-candidatos">
    <div class="barraBusqueda">

    </div>
    <br>
    <br>
    <br>
    <div class="informacionCandidatos">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Status</th>
                    <th scope="col">Vacante</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Candidatos</th>
                    <th scope="col">Ver Candidatos</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $index = 1;
                foreach($vacantes as $vacante) { 
                    $postulaciones = App\Entities\Postulacion::where('IdVacante', $vacante->IdVacante)->count();
                ?>
                    <tr>
                        <th><?= $index ?></th>
                        <th scope="row" style="background-color: rgb(0, 209, 52);"></th>
                        <td><?= $vacante->titulo ?></td>
                        <td><?= $vacante->Estado ?></td>
                        <td><?= $vacante->fecha_publicacion ?></td>
                        <td><?= $postulaciones ?>
                        </td>
                        <td><a href="postulantes.php?idVacant=<?= $vacante->IdVacante ?>" class="fas fa-eye"></i></td>

                    </tr>

                <?php 
                    $index++;
                } 
                ?>
            </tbody>
        </table>
    </div>

</div>

<?php
    include 'templates/business-footer.php';
?>