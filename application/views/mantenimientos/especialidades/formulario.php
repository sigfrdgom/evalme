
<div class="row">
    <div class="col-sm-12 col-md">
        <div class="form-group">
            <label for="nombreEspecialidad" style="font-weight: bolder">Nombre especialidad</label>
            <input type="text" class="form-control" name="nombreEspecialidad" id="nombreEspecialidad" placeholder="Nombre de la especialidad">
        </div>
    </div>
    <div class="col-sm-12 col-md">
        <div class="form-group">
            <label for="estadoEspecialidad font-weight-bold" style="font-weight: bolder">Estado especialidad</label>
            <select class="form-control" name="estadoEspecialidad" id="estadoEspecialidad">
                <option value="1" style="background-color: rgba(0, 128, 0, 0.25)">ACTIVO</option>
                <option value="0" style="background-color: rgba(255, 0, 0, 0.25)">INACTIVO</option>
            </select>
        </div>
    </div>
</div>
<div id="mensajes" class="text-danger text-center mb-2"></div>
<div class="row mx-5 mb-5 text-center">
    <button class="btn btn-success btn-block" onclick="agregarEspecialidad()">Agregar especialidad</button>
</div>
