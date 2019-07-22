<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="id_Institucion font-weight-bold" style="font-weight: bolder">Nombre de la Institucion</label>
            <select name="id_Institucion" id="id_Institucion"></select>
                <option value="">Seleccione una institucion</option>
                <!-- Los datos en php -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="id_Especialidad font-weight-bold" style="font-weight: bolder">Especialidad del docente</label>
            <select name="id_Especialidad" id="id_Especialidad"></select>
                <option value="">Seleccione una especialidad</option>
                <!-- Los datos en php -->
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="nombres font-weight-bold" style="font-weight: bolder">Nombres Docente</label>
            <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres Docente">
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="apellidos font-weight-bold" style="font-weight: bolder">Nombres Docente</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Nombres Docente">
        </div>
    </div>
</div>


<div id="mensajes" class="text-danger text-center mb-2"></div>
<div class="row mx-5 mb-5 text-center">
    <button class="btn btn-success btn-block" onclick="agregarDocente()">Agregar Docente</button>
</div>
