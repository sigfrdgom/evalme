<?php foreach ($especialidades as $especialidad) { ?>
    <tr class=" border-bottom border-dark" style="<?= ($especialidad->estado == 1)?'background-color: rgba(0, 128, 0, 0.25)':'background-color: rgba(255, 0, 0, 0.25)' ?>">
        <td><?= $especialidad->id_especialidad?></td>
        <td><?= $especialidad->nombre?></td>
        <td><?= $especialidad->estado?></td>
        <td><button class="btn btn-warning btn-block" onclick="mostrarFormEspecialidadesData(<?= $especialidad->id_especialidad?>)">Editar</button></td>
        <td><button class="btn btn-danger btn-block" onclick="eliminarEspecialidad(<?= $especialidad->id_especialidad?>)">Eliminar</button></td>
    </tr>
<?php }?>