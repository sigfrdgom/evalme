<?php foreach ($instituciones as $institucion) { ?>
    <tr class=" border-bottom border-dark" style="<?= ($institucion->estado == 1)?'background-color: rgba(0, 128, 0, 0.25)':'background-color: rgba(255, 0, 0, 0.25)' ?>">
        <!-- <td><?= $institucion->id_institucion?></td> -->
        <td><?= $institucion->nombre?></td>
        <td><?= $institucion->direccion?></td>
        <td><?= $institucion->codigo?></td>
        <!-- <td><?= $institucion->estado?></td> -->
        <td><button class="btn btn-warning btn-block" onclick="mostrarFormInstitucionesData(<?= $institucion->id_institucion?>)">Editar</button></td>
        <td><button class="btn btn-danger btn-block" onclick="eliminarInstitucion(<?= $institucion->id_institucion?>)">Eliminar</button></td>
    </tr>
<?php }?>