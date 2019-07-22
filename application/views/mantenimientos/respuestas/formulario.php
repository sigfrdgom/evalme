<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="docente font-weight-bold" style="font-weight: bolder">Docente</label>
            <select class="form-control" name="docente" id="docente">
                <option value="">Selecciona un docente</option>
              
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="pregunta font-weight-bold" style="font-weight: bolder">Docente</label>
            <select class="form-control" name="pregunta" id="pregunta">
                <option value="">Selecciona una pregunta</option>
              
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md">
        <table>
            <tr>
                <td>Muy malo</td>
                <td>Malo</td>
                <td>Regular</td>
                <td>Bueno</td>
                <td>Excelente</td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="calificacion" id="cal1" value="1">
                </td>
                <td>
                    <input type="radio" name="calificacion" id="cal2" value="2">
                </td>
                <td>
                    <input type="radio" name="calificacion" id="cal3" value="3">
                </td>
                <td>
                    <input type="radio" name="calificacion" id="cal4" value="4">
                </td>
                <td>
                    <input type="radio" name="calificacion" id="cal5" value="5">
                </td>
                
            </tr>
        </table>
    </div>
</div>

<div id="mensajes" class="text-danger text-center mb-2"></div>
<div class="row mx-5 mb-5 text-center">
    <button class="btn btn-success btn-block" onclick="agregarRespuesta()">Agregar Respuesta</button>
</div>
