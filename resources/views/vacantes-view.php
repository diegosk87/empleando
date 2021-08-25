<?php
$title = "Empleando &mdash; - Encuentra el trabajo de tus sueños";
include 'templates/business-header.php';
?>

<form method="POST" action="store-vacant.php" enctype='multipart/form-data' class="p-4 border rounded formContainer" name="vacantes_form" id="vacantes_form">

    <div class="contenedor-vacantes container">
        <section class="header-info row">

            <div class="topp col-12">
                <legend>Nueva vacante</legend>
            </div>
            <div class="datos-empresa alert alert-primary col-4">
                <img class="logo" src="images/job_logo_3.jpg" width="136" height="140" alt="Logotipo de la vacante">
            </div>

            <div class="datos-empresa alert alert-primary col-8">
                <div class="confidencial">
                    <h3><?= $empresa->nombre_empresa; ?></h3>
                    <p><?= $empresa->titular; ?></p>
                    <p><?= $empresa->telefono_empresa; ?></p>
                    <p><?= $empresa->Estado . ", " . $empresa->Municipio; ?></p>
                    <p><?= $empresa->correo_empresa; ?></p>
                </div>
            </div>


        </section>
        <hr>
        <div class="confidencia alert alert-primary">
            <h4>Confidencial</h4>
            <p><input type="radio" id="checkbox1"><label for="checkbox1">Si</label>
                <input type="radio" id="checkbox2"><label for="checkbox2">No</label>
            </p>
        </div>
        <hr>
        <section class="datos-vacante">
            <div class="datos-geograficos alert alert-primary">
                <div class=" geografi row  ">

                    <!--<div class="col-md-4">
                        <label for="" class="text-black"> País</label>
                        <select name="" id="" class="form-control">
                            <option value="estado">Morelos</option>
                            <option value="estado">CDMX</option>
                        </select>
                    </div>-->
                    <div class="areas col-md-6">
                        <label for="" class="text-black">Estado</label>
                        <select name="Estado" id="estado" class="form-control" onchange="loadMunicipalities()" required>
                            <option value="">Seleccionar</option>
                            <?php foreach($estados as $estado) { ?>
                                <option value="<?= $estado->id ?>"><?= $estado->nombre ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="areas col-md-6">
                        <label for="" class="text-black">Municipio</label>
                        <select name="Municipio" id="municipio" class="form-control" required>
                            <option value="">Seleccionar</option>
                        </select>
                    </div>



                </div>

            </div>

            <div class="titulo-vacantes alert alert-primary">

                <input name="titulo" id="titulo" class=" titulo-vaca col-8 titulo" type="text" placeholder="Titutulo de Vacante" required>

            </div>
            <div class="datos-geograficos alert alert-primary">
                <div class=" geografi row  ">


                    <div class="areas col-md-6">
                        <label class="text-black" for="">Categoria:</label>
                        <select name="categoria" id="" class=" form-control" required>
                            <option value="">Seleccionar</option>
                            <option value="Administración">Administración</option>
                            <option value="Aduana y comercio Exterior">Aduana y comercio Exterior</option>
                            <option value="Atención Clientes - Call Center">Atención Clientes - Call Center</option>
                            <option value="Compras / Comercio Exterior">Compras / Comercio Exterior</option>
                            <option value="Comunicación , diseño y arte">Comunicación , diseño y arte</option>
                            <option value="">Contabilidad - Finanzas</option>
                            <option value="">Educación - Docencia - Consultoria</option>
                            <option value="">Derecho - Leyes</option>
                            <option value="">Ingenieria Industrial - Civil y construccion </option>
                            <option value="">Informatica / Desarrollo / Telecomunicaciones</option>
                            <option value="">Logistica / Transporte / Almacen</option>
                            <option value="">Mercadotecnia - Publicidad</option>
                            <option value="">Manufactura / Produccion / Mantenimiento</option>
                            <option value="">Oficios y otros</option>
                            <option value="">Pasantia - Trainee - Becarios</option>
                            <option value="">Produccion y Manufactura</option>
                            <option value="">Recursos Humanos</option>
                            <option value="">Sector Salud </option>
                            <option value="">Turismo - Gastronomia</option>
                            <option value="">Ventas</option>
                            <option value="">Otros</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=" datos-geograficos alert alert-primary">
                <div class="textvacan row ">
                    <textarea class="descripcionVacante col-12" name="descripcion" id="" cols="" rows="5" placeholder="Descripcion de la Vacante" required></textarea>
                </div>

                <hr>
                <div class="row">
                    <div class="areas col-md-6">
                        <label class="text-black ">Jornada:</label>
                        <select name="jornada" id="" class="form-control" required>
                            <option>Seleccionar</option>
                            <option> Jornada </option>
                            <option>Tiempo completo</option>
                            <option>Medio tiempo</option>
                            <option>Por horas</option>
                        </select>
                    </div>

                    <div class="areas col-md-6">
                        <label class="text-black" for="">Tipo de contrato:</label>
                        <select name="tipo_contrato" id="" class="form-control" required>
                            <option>Seleccionar</option>
                            <option>tipo de contrato</option>
                            <option>Indefinido</option>
                            <option>temporal</option>
                            <option>Practicas</option>
                        </select>
                    </div>


                </div>
                <hr>


                <div class=" row form-group  text-black">
                    <div class="salario">
                        <h5>Sueldo/Salario</h5>
                        <div>
                            <input type="number" name="salarioMin" id="salarioDeseado-empresa" placeholder="$Minimo" required>
                            <input type="number" name="salarioMax" id="salarioDeseado-empresa" placeholder="$Maximo" required>
                            <input class="form-group" type="checkbox" name="ocultar" value="block">Ocultar salario
                        </div>
                    </div>
                </div>
            </div>

            <div class="topp">
                <legend>Complementarios</legend>
            </div>
            <div class="tipo-sexo alert alert-primary text-black">
                <p>Sexo:

                    <input type="radio" name="sexo" value="Hombre"> Hombre
                    <input type="radio" name="sexo" value="Mujer"> Mujer
                    <input type="radio" name="sexo" value="Indistinto"> Indistinto
                </p>
            </div>
            <div class=" edades alert-primary alert row text-black">
                <div class="form-group col-6">
                    <p> Edad minima:
                        <input name="edad_Min" type="number" required>
                    </p>

                </div>
                <div class="form-group col-6">
                    <p> Edad Maxima:
                        <input name="edad_Max" type="number" required>
                    </p>

                </div>
                <div class=" exp form-group col-6">
                    <p> Experencia:
                        <select class="form-control" name="experiencia" required>
                            <option>Seleccionar</option>
                            <option>0-6 meses</option>
                            <option>1-3 años</option>
                            <option>3-5 años</option>
                            <option>5-10 años</option>
                            <option>(+)10 años</option>
                        </select>

                    </p>
                </div>
                <div class="exp col-6">
                    <P>Escolaridad:
                        <select name="escolaridad" class="form-control" required>
                            <option>Seleccionar</option>
                            <option>primaria</option>
                            <option>secundaria</option>
                            <option>preparatoria</option>
                            <option>licenciatura</option>
                            <option>doctorado</option>
                        </select>
                    </P>
                </div>

                <div class="exp col-6">
                    <p>Idioma:
                        <select name="idioma" class="form-control">
                            <option>Seleccionar</option>
                            <option>ingles</option>
                            <option>español</option>
                            <option>aleman</option>
                            <option>chino</option>
                            <option>japones</option>
                        </select>
                    </p>
                </div>

                <div class="exp col-6">
                    <p>Nivel:
                        <select name="nivel" id="nivel" class="form-control">
                            <option>Seleccionar</option>
                            <option>avanzado</option>
                            <option>medio</option>
                            <option>nativo</option>

                        </select>
                    </p>
                </div>
            </div>
        </section>
        <hr>
    </div>

    <div class="boton-visualizar">
        <button id="btn2" class="btn btn-bootstrap" type="">Vista previa</button>

        <button id="btn2" class="btn btn-bootstrap btnActionnn" type="submit">Publicar</button>
    </div>
    <hr>

</form>

</body>


<script src="js/vacantes.js"></script>

<script>
    function loadMunicipalities() {
        // $('select#estado option').filter(':selected').val()
        let estado_id = $('select#estado').val();
        
        $.ajax({
            type: "GET",
            url: "api/municipios.php",
            data: { estado_id },
            success: res => {
                let municipios = JSON.parse(res);
                $('select#municipio').empty();
                $('select#municipio').append('<option value="">Seleccionar</option>');

                for(let municipio of municipios)
                    $('select#municipio').append(`<option value="${municipio.id}">${municipio.nombre}</option>`);
            },
            error: err => console.log('Error loading data')
        });
    }

    //creamos un pequeña funcion la cual sera llamada desde el html
    function validateForm() {
        //capturamos el valor(value) de myfrom/fname 
        var titulo = document.forms["vacantes_form"]["titulo"].value;
        //validamos para ver si existe un valor agregado al input
        if (titulo == "") {

            // y si no fue agregado ninguna informacion que te mande un alert notificando que es obligatorio.
            alert("Porfavor ingrese titulo de la vacante");
            return false;
        }
    }
</script>

<?php
include 'templates/business-footer.php';
?>