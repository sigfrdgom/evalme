<div class="row">
    <div class="col-sm-12 col-md">
        <input type="hidden"  id="idCategoria" value="<?= $categorias[0]->id_categoria?>" >
        <div class="form-group">
            <label for="nombreCategoria" style="font-weight: bolder">Nombre categoria</label>
            <input type="text" class="form-control" name="nombreCategoria" id="nombreCategoria" placeholder="Nombre de la categoria"
            value="<?= $categorias[0]->nombre?>">
        </div>
    </div>
    <div class="col-sm-12 col-md">
        <div class="form-group">
            <label for="estadoCategoria font-weight-bold" style="font-weight: bolder">Estado categoria</label>
            <select class="form-control" name="estadoCategoria" id="estadoCategoria">
                <option value="1" <?= ($categorias[0]->estado == 1)?'selected':''?> >ACTIVO</option>
                <option value="0"  <?= ($categorias[0]->estado == 0)?'selected':''?>>INACTIVO</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="descripcionCategoria font-weight-bold" style="font-weight: bolder">Descripcion categoria</label>
            <input type="text" class="form-control" name="descripcionCategoria" id="descripcionCategoria" placeholder="Descripcion de la categoria"
            value="<?= $categorias[0]->descripcion?>">
        </div>
    </div>
</div>
<div id="mensajes" class="text-danger text-center mb-2"></div>
<div class="row mx-5 mb-5 text-center">
    <button class="btn btn-success btn-block" onclick="actualizarCategoria()">Actualizar categoria</button>
</div>