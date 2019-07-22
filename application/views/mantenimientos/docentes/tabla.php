<?php foreach ($docentes as $docente) { ?>
    <tr class=" border-bottom border-dark">
        <td><?= $docente->id_docente?></td>
        <td><?= $docente->id_institucion?></td>
        <td><?= $docente->id_especialidad?></td>
        <td><?= $docente->nombres?></td>
        <td><?= $docente->apellidos?></td>
        <td><button class="btn btn-warning btn-block" onclick="mostrarFormDocentesData(<?= $docente->id_docente?>)">Editar</button></td>
        <td><button class="btn btn-danger btn-block" onclick="eliminarDocente(<?= $docente->id_institucion?>)">Eliminar</button></td>
    </tr>
<?php }?>