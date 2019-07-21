<div class="row">
    <div class="col-sm-12 col-md">
        <input type="hidden"  id="idEspecialidad" value="<?= $especialidades[0]->id_especialidad?>" >
        <div class="form-group">
            <label for="nombreEspecialidad" style="font-weight: bolder">Nombre Especialidad</label>
            <input type="text" class="form-control" name="nombreEspecialidad" id="nombreEspecialidad" placeholder="Nombre de la Especialidad"
            value="<?= $especialidades[0]->nombre?>">
        </div>
    </div>
    <div class="col-sm-12 col-md">
        <div class="form-group">
            <label for="estadoEspecialidad font-weight-bold" style="font-weight: bolder">Estado Especialidad</label>
            <select class="form-control" name="estadoEspecialidad" id="estadoEspecialidad">
                <option value="1" style="background-color: rgba(0, 128, 0, 0.25)" <?= ($especialidades[0]->estado == 1)?'selected':''?> >ACTIVO</option>
                <option value="0" style="background-color: rgba(255, 0, 0, 0.25)" <?= ($especialidades[0]->estado == 0)?'selected':''?>>INACTIVO</option>
            </select>
        </div>
    </div>
</div>
<div id="mensajes" class="text-danger text-center mb-2"></div>
<div class="row mx-5 mb-5 text-center">
    <button class="btn btn-success btn-block" onclick="actualizarEspecialidad()">Actualizar Especialidad</button>
</div>