<?php foreach ($preguntas as $pregunta) { ?>
    <tr class=" border-bottom border-dark" style="<?= ($pregunta->estado == 1)?'background-color: rgba(0, 128, 0, 0.25)':'background-color: rgba(255, 0, 0, 0.25)' ?>">
        <td><?= $pregunta->id_pregunta?></td>
        <td><?= $pregunta->id_categoria?></td>
        <td><?= $pregunta->pregunta?></td>
        <td><?= $pregunta->estado?></td>
        <td><button class="btn btn-warning btn-block" onclick="mostrarFormPreguntasData(<?= $pregunta->id_pregunta?>)">Editar</button></td>
        <td><button class="btn btn-danger btn-block" onclick="eliminarPregunta(<?= $pregunta->id_pregunta?>)">Eliminar</button></td>
    </tr>
<?php }?>