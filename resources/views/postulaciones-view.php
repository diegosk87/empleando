<?php
    $title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
    include 'templates/header.php';
?>

<section class="mis-postulaciones">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Puesto</th>
                <th scope="col">Empresa</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Zona</th>
                <th scope="col">Status</th>
                <th scope="col">ver vacante</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $index = 1;
            foreach($postulaciones as $postulacion) {
        ?>
            <tr>
                <th scope="row"><?= $index; ?></th>
                <td><?= $postulacion->fecha; ?> </td>
                <td><?= $postulacion->vacante->titulo; ?> </td>
                <td><?= $postulacion->vacante->datosEmpresa->nombre_empresa; ?> </td>
                <td><?= $postulacion->vacante->salarioMax; ?> </td>
                <td><?= $postulacion->vacante->Estado; ?> </td>
                <td class="status" style="background-color: rgb(0, 209, 52);"></td>
                <td><a href="vacante.php?IdVacante=<?= $postulacion->vacante->IdVacante?>" class="fas fa-eye"> </a></td>
            </tr>
        <?php 
                $index++;
            } 
        ?>
        </tbody>
    </table>
</section>

<script src="js/previsualizar.js"></script>
<script src="js/elementosform.js"></script>

<?php
    include 'templates/footer.php';
?>