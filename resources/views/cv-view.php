<?php
$title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
include 'templates/header.php';
?>

<div class="container-home">
    <main class="home">
        <div class="container mb-2 text-center">
            <form action="image-uploader.php" method="POST" enctype="multipart/form-data">
                <label id="image-uploader" style="background-image: url('<?= $usuario->UrlImagen; ?>');">
                    <input name="UrlImagen" type="file" onchange="setPreviewImage(event)" class="d-none">
                    <div id="placeholder-uploader">Cambiar imagen</div>
                </label><br>
                <input id="save-image" class="btn btn-primary btn-sm d-none" type="submit" value="Guardar Imagen">
            </form>
        </div>

        <form method="POST" action="funciones/cvusuario.php" enctype='multipart/form-data'>
            <div class="container-titulo-cv datos-form">
                <div class="titulo-cv">
                    <h2><input name="puesto" type="text" class="form-group" placeholder="Ingrese aqui su puesto" value="<?= $usuario->puesto; ?>"></input></h2>
                    <div class="form-group green-border-focus text-area">
                        <label for="textarea">Descripción</label>
                        <textarea class="form-control" name="descripcion" rows="3" maxlength="200"><?= $usuario->descripcion; ?></textarea>
                    </div>
                    <input type="number" name="salarioMin" placeholder="$ Salario Minimo" value="<?= $usuario->salarioMin; ?>"></input>
                    <input type="number" name="salarioMax" placeholder="$ Salario Maximo" value="<?= $usuario->salarioMax; ?>"></input>
                </div>
            </div>

            <div class="container-datos-personales datos-form " id="container-datos-personales">
                <div class="cabecera">
                    <div class="legend">
                        <legend>Datos Generales </legend>
                    </div>
                    <div class="fas-icon">
                        <i class="fas fa-minus fa2minus"></i>
                        <i class="fas fa-pen fa2plus"></i>
                    </div>
                </div>
                <div class="datos-personales">
                    <div class="row form-group mb-5 justify-content-between">
                        <div class="col-md-5">
                            <label class="text-black" for="userForm">Nombre(s)</label>
                            <input type="text" value="<?= $usuario->nombre_usuario; ?>" name="nombre_usuario" class="form-control" placeholder="Ingrese su nombre"></input>
                        </div>
                        <div class="col-md-5">
                            <label for="userForm" class="text-black">Estado Civil</label>
                            <select name="estado_civil" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="Soltero/a" <?= $usuario->estado_civil!="Soltero/a"?"":"selected" ?>>Soltero/a</option>
                                <option value="Casado/a" <?= $usuario->estado_civil!="Casado/a"?"":"selected" ?>>Casado/a</option>
                                <option value="Divorciado/a" <?= $usuario->estado_civil!="Divorciado/a"?"":"selected" ?>>Divorciado/a</option>
                                <option value="Viudo/a" <?= $usuario->estado_civil!="Viudo/a"?"":"selected" ?>>Viudo/a</option>
                                <option value="Otro" <?= $usuario->estado_civil!="Otro"?"":"selected" ?>>Otro</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group mb-5 justify-content-between">
                        <div class="col-md-5 mb-3 mb-md-0">
                            <label class="text-black" for="userForm">Edad</label>
                            <input type="number" name="edad" class="form-control" value="<?= $usuario->edad; ?>"></input>
                        </div>
                        <div class="col-md-5 mb-3 mb-md-0">
                            <label class="text-black" for="userForm">Correo Electrónico</label>
                            <input name="correo_usuario" class="form-control" value="<?= $usuario->correo_usuario; ?>"></input>
                        </div>
                    </div>

                    <div class="row form-group mb-5 justify-content-between">
                        <div class="col-md-5">
                            <label for="userForm" class="text-black">Sexo</label>
                            <select name="sexo" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="Masculino" <?= $usuario->sexo!="Masculino"?"":"selected" ?>>Masculino</option>
                                <option value="Femenino" <?= $usuario->sexo!="Femenino"?"":"selected" ?>>Femenino</option>
                                <option value="Indistinto" <?= $usuario->sexo!="Indistinto"?"":"selected" ?>>Indistinto</option>
                            </select>
                        </div>
                        <div class="col-md-5 mb-3 mb-md-0">
                            <label for="userForm" class="text-black">Número Telefónico</label>
                            <input type="number" name="numero_telefonico" class="form-control" value="<?= $usuario->numero_telefonico; ?>"></input>
                        </div>
                    </div>
                    <div class="row form-group mb-4 justify-content-between">

                        <div class="col-md-5 mb-3 mb-md-0">
                            <label for="userForm" class="text-black">Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" id="" class="form-control" value="<?= $usuario->fecha_nacimiento; ?>"></input>
                        </div>
                        <div class="col-md-5 mb-3 mb-md-0">
                            <label for="userForm" class="text-black">Estado/Ubicación</label>
                            <select name="Estado" class="form-control">
                                <option value="">Seleccionar</option>
                            <?php foreach($estados as $estado) { ?>
                                <option <?= $usuario->Estado!=$estado->nombre?"":"selected" ?>><?= $estado->nombre ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="col-md-12">
            <hr>
        </div>

        <!-- universidad --->
        <form id="form_escolaridad" method="POST" onsubmit="saveScolarships(this, event)">
            <div class="container-datos-escolares datos-form" id="datos-escolares">
                <header class="cabecera">
                    <div class="legend">
                        <legend>Escolaridad</legend>
                    </div>
                    <div class="fas-icon">
                        <i class="fas fa-minus fa5minus"></i>
                        <i class="fas fa-pen fa5plus"></i>
                    </div>
                </header>

                <div class="row form-group contEscolaridad" id="contenedorEscolaridad">
                    <div class="row col-md-12 form-group" id="container-institucion">
                        <?php foreach($usuario->escolaridades as $escolaridad) { ?>
                            <div class="col-md-12 mb-3 mb-md-0 row">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label for="userForm" class="text-black">Escolaridad</label>
                                <select name="escolaridad" id="escolaridad" class="form-control" required>
                                    <option value="">Seleccionar</option>
                                    <option <?= $escolaridad->escolaridad!="Primaria"?"":"selected" ?>>Primaria</option>
                                    <option <?= $escolaridad->escolaridad!="Secundaria"?"":"selected" ?>>Secundaria</option>
                                    <option <?= $escolaridad->escolaridad!="Bachillerato"?"":"selected" ?>>Bachillerato</option>
                                    <option <?= $escolaridad->escolaridad!="Educación Profesional Técnica"?"":"selected" ?>>Educación Profesional Técnica</option>
                                    <option <?= $escolaridad->escolaridad!="Licenciatura Concluida"?"":"selected" ?>>Licenciatura Concluida</option>
                                    <option <?= $escolaridad->escolaridad!="Licenciatura Trunca"?"":"selected" ?>>Licenciatura Trunca</option>
                                    <option <?= $escolaridad->escolaridad!="Ingeniería Concluida"?"":"selected" ?>>Ingeniería Concluida</option>
                                    <option <?= $escolaridad->escolaridad!="Ingeniería Trunca"?"":"selected" ?>>Ingeniería Trunca</option>
                                    <option <?= $escolaridad->escolaridad!="Maestria"?"":"selected" ?>>Maestria</option>
                                    <option <?= $escolaridad->escolaridad!="Doctorado"?"":"selected" ?>>Doctorado</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label class="text-black" for="userForm">Institución</label>
                                <input type="text" id="institucion" value="<?= $escolaridad->institucion ?>" name="institucion" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="userForm">Inicio</label>
                                <input type="date" id="FechaIni_esco" value="<?= $escolaridad->FechaIni_esco ?>" name="FechaIni_esco" class="form-control" required>
                            </div>
                            <div class="col-md-3">
                                <label for="userForm">Final</label>
                                <input class="form-control" id="FechaFin_esco" value="<?= $escolaridad->FechaFin_esco ?>" type="date" name="FechaFin_esco" required>
                            </div>

                            <div class="col-md-12 form-group row justify-content-center">
                                <div class="form-check">
                                    <input name="EnCurso" type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Cursando Actualmente</label>
                                </div>
                                <div class="btn btn-sm btn-danger ml-3" onclick="removeScolarships(this, <?= $escolaridad->id_escolar ?>)">Eliminar</div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="row col-md-12 justify-content-center">
                        <div class="faMas" id="fa-plus-circle">
                            <i class="fas fa-plus-circle" id="btnAgregarInstitucion" onclick="addNewScholarship()"></i><b>Agregar
                                otra</b>
                        </div>
                    </div>
                    <div class="row col-md-12 justify-content-center">
                        <input class="btn btn-primary my-2" type="submit" value="Guardar escolaridades">
                    </div>
                </div>
            </div>
        </form>

        <!-- Datos laborales-->
        <form id="form_trabajo" method="POST">
            <div class="container-datos-laborales datos-form">
                <header class="cabecera">
                    <div class="legend">
                        <legend>Laboral </legend>
                    </div>
                    <div class="fas-icon">
                        <i class="fas fa-minus fa1minus"></i>
                        <i class="fas fa-pen fa1plus"></i>
                    </div>
                </header>

                <div class="datos-laborales" id="datos-laborales">
                    <div class="row form-group mb-4" id="trabajos">
                        <div class="col-md-12">
                            <label class="text-black" for="userForm"> Empresa</label>
                            <input type="text" name="empresa" class="form-control" required></input>
                        </div>
                        <div class="col-md-12">
                            <label for="userForm" class="text-black">Puesto / Cargo</label>
                            <input type="text" name="puestos" class="form-control" required></input>
                        </div>
                        <div class="col-md-4">
                            <label for="userForm">Fecha de inicio</label>
                            <input type="date" name="FechaIni" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="userForm">Fecha de Salida</label>
                            <input type="date" name="FechaFin" class="form-control" required>
                        </div>

                        <div class="col-md-4">
                            <label for="">Estado</label>
                            <div class="input-group col-mb-3">
                                <div class="input-group-prepend">

                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                    </div>
                                </div>
                                <input type="text" name="estado_status" value="Actualmente" disabled>
                            </div>
                        </div>

                        <div class="md-form col-md-12">
                            <br>
                            <textarea name="actividades" class="md-textarea form-control" placeholder="Actividades" rows="5" required></textarea>
                            <center><div class="btn btn-sm btn-danger ml-3" onclick="$(this).parent().parent().remove()">Eliminar</div></center>
                        </div>
                    </div>
                </div>
                <div class="row col-md-12 justify-content-center">
                    <div class="faMas" id="fa-plus-circle">
                        <i class="fas fa-plus-circle" id="btnAgregarInstitucion" onclick="addNewJob()"></i><b>Agregar
                            otra</b>
                    </div>
                </div>
                <div class="row col-md-12 justify-content-center">
                    <input class="btn btn-primary my-2" type="submit" value="Guardar trabajos">
                </div>
            </div>
        </form>
        <!--Fin Datos Laborales-->
        <div class="container-datos-complementarios datos-form" id="datos-complementarios">
            <header class="cabecera">
                <div class="legend">
                    <legend>Datos Complementarios</legend>
                </div>
                <div class="fas-icon">
                    <i class="fas fa-minus fa4minus "></i>
                    <i class="fas fa-pen fa4plus"></i>
                </div>
            </header>


            <div class=" datos-complementarios">
                <form id="skillajax" method="POST">
                    <div class="row form-group mb-4" id="contenedor-complementarios">
                        <div class="col-xl-6 col-md-12">
                            <label for="userForm"> Idiomas</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">

                                    </div>
                                </div>
                                <select class="form-control" aria-label="Text input with checkbox" id="idioma_primario" name="idioma_primario" requiered>
                                    <option value="">Seleccionar</option>
                                    <option value="Aleman">Aleman</option>
                                    <option value="Chino">Chino</option>
                                    <option value="Frances">Frances</option>
                                    <option value="Ingles">Ingles</option>
                                    <option value="Japones">Japones</option>
                                    <option value="Portugues">Portugues</option>
                                    <option value="Ruso">Ruso</option>
                                </select>
                                <select class="form-control" aria-label="Text input " id="idioma_prim_dominio" name="idioma_prim_dominio">
                                    <option value="">Seleccionar</option>
                                    <option value="Basico">Basico</option>
                                    <option value="Intermedio">Intermedio</option>
                                    <option value="Avanzado">Avanzado</option>
                                    <option value="Nativo">Nativo</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">

                                    </div>
                                </div>
                                <select class="form-control" aria-label="Text input with checkbox" id="idioma_secundario" name="idioma_secundario">
                                    <option value="">Seleccionar</option>
                                    <option value="Aleman">Aleman</option>
                                    <option value="Chino">Chino</option>
                                    <option value="Frances">Frances</option>
                                    <option value="Ingles">Ingles</option>
                                    <option value="Japones">Japones</option>
                                    <option value="Portugues">Portugues</option>
                                    <option value="Ruso">Ruso</option>
                                </select>
                                <select class="form-control" aria-label="Text input with checkbox" name="idioma_sec_dominio" id="idioma_sec_dominio">
                                    <option value="">Seleccionar</option>
                                    <option value="Basico">Basico</option>
                                    <option value="Intermedio">Intermedio</option>
                                    <option value="Avanzado">Avanzado</option>
                                    <option value="Nativo">Nativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12">
                            <label for="userForm"> Software y sistemas</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="text" id="habilidad_1" names="habilidad_1" placeholder="Escriba su habilidad" required></input>
                                    </div>
                                </div>

                                <select class="form-control" aria-label="Text input with checkbox" name="habilidad_1_nivel" id="habilidad_1_nivel" required>

                                    <option value="">Seleccionar</option>
                                    <option value="Basico">Basico</option>
                                    <option value="Intermedio">Intermedio</option>
                                    <option value="Avanzado">Avanzado</option>
                                    <option value="Nativo">Nativo</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="text" name="habilidad_2" id="habilidad_2" placeholder="Escriba su habilidad" required></input>
                                    </div>
                                </div>

                                <select class="form-control" aria-label="Text input with checkbox" name="habilidad_2_nivel" id="habilidad_2_nivel" required>

                                    <option value="">Seleccionar</option>
                                    <option value="Basico">Basico</option>
                                    <option value="Intermedio">Intermedio</option>
                                    <option value="Avanzado">Avanzado</option>
                                    <option value="Nativo">Nativo</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="text" id="habilidad_3" name="habilidad_3" placeholder="Escriba su habilidad" required>
                                    </div>
                                </div>

                                <select class="form-control" aria-label="Text input with checkbox" name="habilidad_3_nivel" id="habilidad_3_nivel" required>

                                    <option value="">Seleccionar</option>
                                    <option value="Basico">Basico</option>
                                    <option value="Intermedio">Intermedio</option>
                                    <option value="Avanzado">Avanzado</option>
                                    <option value="Nativo">Nativo</option>
                                </select>
                            </div>
                        </div>
                </form>
                <div class="row col-md-12 justify-content-center">
                    <div class="faMas" id="fa-plus-circle">
                        <i class="fas fa-plus-circle" id="btnAgregarInstitucion" onclick="clonarCertificaciones()"></i><b>Agregar
                            otra</b>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12" id="certificaciones">
                    <div class="col-md-12">
                        <label for="userForm"> Certificaciones</label>

                        <input type="text" class="form-control" name="certificacion" placeholder="Nombre de la certificación">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="text" value="Fecha" disabled>
                                </div>
                                <br>
                            </div>
                            <input type="date" class="form-control" name="fecha">
                        </div>
                    </div>

                    <div class="row col-md-12 justify-content-center">
                        <div class="faMas" id="fa-plus-circle">
                            <i class="fas fa-plus-circle" id="btnAgregarInstitucion" onclick="clonarCertificaciones()"></i><b>Agregar
                                otra</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container-button boton-visualizar">
            <button class="btn btn-primary" name="insertarcv" type="submit">Guardar perfil</button>

            <a href="vista-previa.php"><input clas="btn-visualizar" type="button" value="Vista previa">

        </div>
        <br>
    </main>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#register').click(function() {
            var datos = $('#frmajax').serialize();
            $.ajax({
                type: "POST",
                url: "esco.php",
                data: datos,
                success: function(r) {
                    if (r == 1) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Correcto...',
                            text: 'Se Registro con exito',
                            confirmButtonText: 'Regresar'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error...',
                            text: 'Fallo el servidor, Intente de nuevo',
                            confirmButtonText: 'Regresar',
                        });
                    }
                }
            });

            return false;
        });
    });
</script>
<!-------------------------- TRABAJOS -------------------------------------->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnempleo').click(function() {
            var datos = $('#trabajax').serialize();
            $.ajax({
                type: "POST",
                url: "emple.php",
                data: datos,
                success: function(r) {
                    if (r == 1) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Correcto...',
                            text: 'Se Registro con exito',
                            confirmButtonText: 'Regresar'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error...',
                            text: 'Fallo el servidor, Intente de nuevo',
                            confirmButtonText: 'Regresar',
                        });
                    }
                }
            });

            return false;
        });
    });
</script>

<script>
    function setPreviewImage(e) {
        let reader = new FileReader();
        reader.readAsDataURL(e.target.files[0]);
        reader.onload = () => {
            $('#image-uploader').css("background-image", 'url(' + reader.result + ')');
            $('#save-image').removeClass('d-none');
        }
    }
</script>

<!--skills-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnskills').click(function() {
            var datos = {
                "idioma_primario": idioma_primario,
                "idioma_secundario": idioma_secundario,
                "idioma_prim_dominio": idioma_prim_dominio,
                "idioma_sec_dominio": idioma_sec_dominio,
                "habilidad_1": habilidad_1,
                "habilidad_2": habilidad_2,
                "habilidad_3": habiliadd_3,
                "habilidad_1_nivel": habilidad_1_nivel,
                "habilidad_2_nivel": habilidad_2_nivel,
                "habilidad_3_nivel": habilidad_3_nivel
            };
            $.ajax({
                type: "POST",
                url: "compleUsua.php",
                data: datos,
                success: function(r) {
                    if (r == 1) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Correcto...',
                            text: 'Se Registro con exito',
                            confirmButtonText: 'Regresar'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error...',
                            text: 'Fallo el servidor, Intente de nuevo',
                            confirmButtonText: 'Regresar',
                        });
                    }
                }
            });

            return false;
        });
    });
</script>
<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="/public/js/cv-script.js"></script>
<!-- <script>
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          // Asignamos el atributo src a la tag de imagen
          $('#imgperfil').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    // El listener va asignado al input
    $("#imagen").change(function () {
      readURL(this);
    });
  </script> -->

<?php
    include 'templates/footer.php';
?>