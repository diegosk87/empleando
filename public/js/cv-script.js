var deletedScolarships = [];
var deletedJobs = [];

function addNewScholarship() {
    $('#container-institucion').append(`
        <div class="col-md-12 mb-3 mb-md-0 row">
            <input name="id_escolar" type="hidden" value="0">
            <div class="col-md-12 mb-3 mb-md-0">
                <label for="userForm" class="text-black">Escolaridad</label>
                <select name="escolaridad" id="escolaridad" class="form-control" required>
                    <option name="id_escolar" value="">Seleccionar</option>
                    <option>Primaria</option>
                    <option>Secundaria</option>
                    <option>Bachillerato</option>
                    <option>Educación Profesional Técnica</option>
                    <option>Licenciatura Concluida</option>
                    <option>Licenciatura Trunca</option>
                    <option>Ingeniería Concluida</option>
                    <option>Ingeniería Trunca</option>
                    <option>Maestria</option>
                    <option>Doctorado</option>
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
                    <input name="EnCurso" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" value="fecha">Cursando Actualmente</label>
                </div>
                <div class="btn btn-sm btn-danger ml-3" onclick="$(this).parent().parent().remove()">Eliminar</div>
            </div>
        </div>
    `);
}

function addNewJob() {
    $('#datos-laborales').append(`
        <div class="row form-group mb-4" id="trabajos">
            <input name="id_laboral" type="hidden" value="0">
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
                <center><div class="btn btn-sm btn-danger ml-3" onclick="removeJob(this, <?= $empresa->id_laboral ?>)">Eliminar</div></center>
            </div>
        </div>
    `);
}

function addNewLanguage(){
    $('#lenguajes').append(`
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
                        <center> <div class="btn btn-sm btn-danger ml-3" onclick="">Eliminar</div> </center>
        </div>
    `);
    console.log("nuevo campo de lenguaje agregado");
}

function addNewCert(){
    $('#certs').append(`
    <div class="col-md-12">

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
        <center> <div class="btn btn-sm btn-danger ml-3" onclick="">Eliminar</div> </center>
    </div>
    `);
}

function removeScolarships(target, id) {
    $(target).parent().parent().remove();
    deletedScolarships.push(id);
}

function saveScolarships(form, e) {
    e.preventDefault();
    var scolarships = [];
    var scolarship = { escolaridad: "", institucion: "", FechaIni_esco: "", FechaFin_esco: "", EnCurso: "" };

    try {
        for(let i = 0;i < form.escolaridad.length;i++) {
            scolarship.escolaridad = form.escolaridad[i].value;
            scolarship.institucion = form.institucion[i].value;
            scolarship.FechaIni_esco = form.FechaIni_esco[i].value;
            scolarship.FechaFin_esco = form.FechaFin_esco[i].value;
            scolarship.EnCurso = form.EnCurso[i].checked;
    
            if(form.id_escolar[i].value == "0") scolarships.push(scolarship);
        }
    }
    catch(ex) {
        scolarship.escolaridad = form.escolaridad.value;
        scolarship.institucion = form.institucion.value;
        scolarship.FechaIni_esco = form.FechaIni_esco.value;
        scolarship.FechaFin_esco = form.FechaFin_esco.value;
        scolarship.EnCurso = form.EnCurso.checked;

        if(form.id_escolar.value == "0") scolarships.push(scolarship);
    }

    if(scolarships.length > 0 || deletedScolarships.length > 0) {
        $.ajax({
            type: 'POST',
            url: 'api/scolarships.php',
            data: {
                scolarships: JSON.stringify(scolarships),
                deleted: JSON.stringify(deletedScolarships)
            },
            success: res => {
                console.log(res);
            },
            error: err => {
                console.log(err);
            }
        });
    }
}

function removeJob(target, id){
    $(target).parent().parent().parent().remove();
    deletedJobs.push(id);
}

function saveJobs(form, e){
    e.preventDefault();
    var jobs = [];
    var job = {empresa : "", puestos : "", FechaIni : "", FechaFin : "", estado_status : "" , actividades : "" };

    try {
        for(let i = 0; i < form.empresa.length; i++){
            job.empresa = form.empresa[i].value;
            job.puestos = form.puestos[i].value;
            job.FechaIni = form.FechaIni[i].value;
            job.FechaFin = form.FechaFin[i].value;
            job.estado_status = form.estado_status[i].checked;
            job.actividades = form.actividades[i].value;

            if(form.id_laboral[i].value == "0") jobs.push(job);
        }
    } catch (err) {
        job.empresa = form.empresa.value;
        job.puestos = form.puestos.value;
        job.FechaIni = form.FechaIni.value;
        job.FechaFin = form.FechaFin.value;
        job.estado_status = form.estado_status.checked;
        job.actividades = form.actividades.value;

        if(form.id_laboral.value == "0") jobs.push(job);
    }

    if(jobs.length > 0 || deletedJobs.length > 0) {
        $.ajax({
            type: 'POST',
            url: 'api/jobsUser.php',
            data: {
                jobs: JSON.stringify(jobs),
                deleted: JSON.stringify(deletedJobs)
            },
            success: res => {
                console.log(res);
                alert('trabajos guardados');
            },
            error: err => {
                console.log(err);
                alert('valio pito');
            }
        });
    }
    
}

//mi cagada
function saveInfo(form, e) {
    e.preventDefault();

    $.ajax({
        type: 'POST',
        url: 'api/cvusuario.php',
        data: {
            correo_usuario: form.correo_usuario.value,
            nombre_usuario: form.nombre_usuario.value,
            puesto : form.puesto.value,
            descripcion: form.descripcion.value,
            salarioMin: form.salarioMin.value,
            salarioMax: form.salarioMax.value,
            numero_telefonico: form.numero_telefonico.value,
            edad: form.edad.value,
            sexo: form.sexo.value,
            fecha_nacimiento: form.fecha_nacimiento.value,
            estado_civil: form.estado_civil.value,
            Estado: form.Estado.value
        },
        success: res => {
            alert(res);
        },
        error: err => {
            console.log(err);
        }
    })
}