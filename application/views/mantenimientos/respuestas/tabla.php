<?php foreach ($respuestas as $respuesta) { ?>
    <tr class=" border-bottom border-dark" >
        <td><?= $respuesta->id_respuesta?></td>
        <td><?= $respuesta->id_docente?></td>
        <td><?= $respuesta->id_categoria?></td>
        <td><?= $respuesta->calificacion?></td>
        <td><?= $respuesta->fecha_respuesta?></td>
        <td><button class="btn btn-warning btn-block" onclick="mostrarFormRespuestasData(<?= $respuesta->id_respuesta?>)">Editar</button></td>
        <td><button class="btn btn-danger btn-block" onclick="eliminarRespuesta(<?= $respuesta->id_respuesta?>)">Eliminar</button></td>
    </tr>
<?php }?>