<div class="row">
<input type="hidden" id="idInstitucion"  value="<?= $preguntas[0]->id_pregunta ?>">
    <div class="col">
        <div class="form-group">
            <label for="pregunta" class="font-weight-bold" style="font-weight: bolder">Pregunta</label>
            <input type="text" class="form-control" name="pregunta" id="pregunta" placeholder="Pregunta"
            value="<?= $preguntas[0]->pregunta ?>">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md">
        <div class="form-group">
            <label for="categoria" style="font-weight: bolder">Categoria</label>
            <select name="categoria" id="categoria">
                <option value="">Seleccion una categoria</option>
            </select>
        </div>
    </div>
    <div class="col-sm-12 col-md">
        <div class="form-group">
            <label for="estado_pregunta font-weight-bold" style="font-weight: bolder">Estado Pregunta</label>
            <select class="form-control" name="estado_pregunta" id="estado_pregunta">
            <option value="1" style="background-color: rgba(0, 128, 0, 0.25)" <?= ($preguntas[0]->estado == 1)?'selected':"" ?>>ACTIVO</option>
                <option value="0" style="background-color: rgba(255, 0, 0, 0.25)" <?= ($preguntas[0]->estado == 0)?'selected':"" ?>>INACTIVO</option>
            </select>
        </div>
    </div>
</div>

<div id="mensajes" class="text-danger text-center mb-2"></div>
<div class="row mx-5 mb-5 text-center">
    <button class="btn btn-success btn-block" onclick="actualizarPregunta()">Agregar pregunta</button>
</div>