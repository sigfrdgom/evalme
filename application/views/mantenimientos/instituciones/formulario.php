<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="nombreInstitucion font-weight-bold" style="font-weight: bolder">Nombre de la Institucion</label>
            <input type="text" class="form-control" name="nombreInstitucion" id="nombreInstitucion" placeholder="Nombre de la Institucion">
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="direccionInstitucion font-weight-bold" style="font-weight: bolder">Direccion Institucion</label>
            <input type="text" class="form-control" name="direccionInstitucion" id="direccionInstitucion" placeholder="Direccion de la Institucion">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md">
        <div class="form-group">
            <label for="codigoInstitucion" style="font-weight: bolder">Codigo Institucion</label>
            <input type="number" class="form-control" name="codigoInstitucion" id="codigoInstitucion" placeholder="Codigo de la Institucion" min="1" max="99999" step="1">
        </div>
    </div>
    <div class="col-sm-12 col-md">
        <div class="form-group">
            <label for="estadoInstitucion font-weight-bold" style="font-weight: bolder">Estado Institucion</label>
            <select class="form-control" name="estadoInstitucion" id="estadoInstitucion">
                <option value="1">ACTIVO</option>
                <option value="0">INACTIVO</option>
            </select>
        </div>
    </div>
</div>

<div id="mensajes" class="text-danger text-center mb-2"></div>
<div class="row mx-5 mb-5 text-center">
    <button class="btn btn-success btn-block" onclick="agregarInstitucion()">Agregar Institucion</button>
</div>