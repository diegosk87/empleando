<?php
$title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
include 'templates/header.php';
?>

<div class="container-home">
    <main class="home">
        <!-- ================ división del perfil ===============-->
        <form action="image-uploader.php" method="POST" enctype="multipart/form-data">
            <div class="container-perfil form-group row">

                <div class="conperfil">
                    <div class="img-perfil ">
                        <img src="<?= $usuario->UrlImagen; ?>">
                    </div>
                </div>
                <div class="conte-input-subir">
                    Añadir imagen: <input name="UrlImagen" id="UrlImagen" type="file" />
                </div>
                <button id="btn2" class="botonCV" name="insertarescolaridad" type="submit">Agregar Imagen</button>
            </div>
        </form>

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
                                <option><?= $usuario->estado_civil; ?></option>
                                <option value="soltero">Soltero/a</option>
                                <option value="casado">Casado/a</option>
                                <option value="divorciado">Divorciado/a</option>
                                <option value="viudo">Viudo/a</option>
                                <option value="otro">otro</option>
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
                                <option><?= $usuario->sexo; ?></option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Indistinto">Indistinto</option>
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
                                <option>Morelos</option>
                                <option>CDMX</option>

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
        <form id="frmajax" method="POST">
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

                        <div class="col-md-12 mb-3 mb-md-0">
                            <label for="userForm" class="text-black">Escolaridad</label>
                            <select name="escolaridad" id="escolaridad" class="form-control" required>
                                <option value="">Seleccionar</option>
                                <option value="primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                                <option value="Bachillerato">Bachillerato</option>
                                <option value="Educación Profesional Técnica">Educación Profesional Técnica</option>
                                <option value="Licenciatura Concluida">Licenciatura Concluida</option>
                                <option value="Licenciatura Trunca">Licenciatura Trunca</option>
                                <option value="Ingeniería Concluida">Ingeniería Concluida</option>
                                <option value="Ingeniería Trunca">Ingeniería Trunca</option>
                                <option value="Maestria">Maestria</option>
                                <option value="Doctorado">Doctorado</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="text-black" for="userForm">Institución</label>
                            <input type="text" id="institucion" name="institucion" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label for="userForm">Inicio</label>
                            <input type="date" id="FechaIni_esco" name="FechaIni_esco" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label for="userForm">Final</label>
                            <input class="form-control" id="FechaFin_esco" type="date" name="FechaFin_esco" required>
                        </div>

                        <div class="col-md-12 form-group row justify-content-center">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" value="fecha">Cursando Actualmente</label>
                            </div>
                        </div>
                        <div class="row col-md-12 justify-content-center">
                            <div class="faMas" id="fa-plus-circle">
                                <i class="fas fa-plus-circle" id="btnAgregarInstitucion" onclick="clonarInstitucion()"></i><b>Agregar
                                    otra</b>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="GuardarCv">
                    <button id="register" class="botonCV">Agregar Escolaridad</button>

                </div>
            </div>
        </form>

        <!-- Datos laborales-->
        <form id="trabajax" method="POST">
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

                <div class=" datos-laborales" id="datos-laborales">
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

                        </div>

                        <div class="row col-md-12 justify-content-center">
                            <div class="faMas" id="fa-plus-circle">
                                <i class="fas fa-plus-circle" id="btnAgregarInstitucion" onclick="clonarTrabajos()"></i><b>Agregar
                                    otra</b>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="GuardarCv">
                    <button id="btnempleo" class="botonCV">Agregar Trabajo</button>
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
                <div class="GuardarCv">
                    <button id="btnskills" class="botonCV">Agregar Habilidades</button>
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
            <div class="GuardarCv">
                <button id="btnCertif" class="botonCV">Agregar Habilidades</button>
            </div>
        </div>

        <br>
        <div class="container-button boton-visualizar">
            <button class="btn btn-bootstrap" name="insertarcv" type="submit">Guardar perfil</button>

            <a href="Vistaprevia.php"><input clas="btn-visualizar" type="button" value="Vista previa">

        </div>
        <br>
    </main>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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