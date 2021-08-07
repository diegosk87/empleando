var deletedScolarships = [];

function addNewScholarship() {
    $('#container-institucion').append(`
        <div class="col-md-12 mb-3 mb-md-0 row">
            <div class="col-md-12 mb-3 mb-md-0">
                <label for="userForm" class="text-black">Escolaridad</label>
                <select name="escolaridad" id="escolaridad" class="form-control" required>
                    <option value="">Seleccionar</option>
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
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
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
    `);
}

function removeScolarships(target, id) {
    $(target).parent().parent().remove();
    deletedScolarships.push(id);
}

function saveScolarships(form, e) {
    e.preventDefault();
    var scolarships = [];
    for(let i = 0;i < form.escolaridad.length;i++) {
        let scolarship = { escolaridad: "", institucion: "", FechaIni_esco: "", FechaFin_esco: "", EnCurso: "" };
        scolarship.escolaridad = form.escolaridad[i].value;
        scolarship.institucion = form.institucion[i].value;
        scolarship.FechaIni_esco = form.FechaIni_esco[i].value;
        scolarship.FechaFin_esco = form.FechaFin_esco[i].value;
        scolarship.EnCurso = form.EnCurso[i].checked;

        scolarships.push(scolarship);
    }

    $.ajax({
        type: 'POST',
        url: 'api/scolarships.php',
        data: {
            scolarships: JSON.stringify(scolarships)
        },
        success: res => {
            console.log(res);
        },
        error: err => {
            console.log(err);
        }
    })
}