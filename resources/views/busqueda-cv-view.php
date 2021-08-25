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
                <legend>Busquedas de Cv's</legend>
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

        <div class="contenedor-dato">
            <div class="numera">
                <h5>1</h5>
            </div>

            <div class="datoscan ">
                <div class="dat1">
                    <td>prueba</td>
                </div>
                <div class="dat2">
                    <td>prueba</td>
                </div>
                <div class="dat3">
                    <td>prueba</td>
                </div>
                <div class="dat4">
                    <td>prueba</td>
                </div>

            </div>
            <div class="Ubic">
                <td>prueba</td>
            </div>
            <div class="Ubic1">
                <td>prueba</td>
            </div>
            <div class="Ubic2">
                <td>prueba</td>
            </div>
            <div class="Ubic3">

            </div>
            <div class="Ubic4">
                <div>
                    <h5>acep</h5>
                </div>

            </div>
            <div class="Ubic5">
                <div class="doss">
                    <h5>acep</h5>
                </div>
                <div class="dosss">
                    <h5>neg</h5>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

</body>
<!-- MAIN CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#register').click(function() {
            var datos = $('#frmajax').serialize();
            $.ajax({
                type: "POST",
                url: "funciones/esco.php",
                data: datos,
                success: function(r) {
                    if (r == 1) {
                        Swal.fire({
                            'title': 'Correcto',
                            'text': 'Agregado con exito',
                            'type': 'success'
                        })

                    } else {
                        Swal.fire({
                            'title': 'Errors',
                            'text': 'There were errors while saving the data.',
                            'type': 'error'
                        })
                    }
                }
            });

            return false;
        });
    });

<?php
include 'templates/business-footer.php';
?>