<?php foreach ($categorias as $categoria) { ?>
    <tr class=" border-bottom border-dark" style="<?= ($categoria->estado == 1)?'background-color: rgba(0, 128, 0, 0.25)':'background-color: rgba(255, 0, 0, 0.25)' ?>">
        <!-- <td><?= $categoria->id_categoria?></td> -->
        <td><?= $categoria->nombre?></td>
        <td><?= $categoria->descripcion?></td>
        <!-- <td><?= $categoria->estado?></td> -->
        <td><button class="btn btn-warning btn-block" onclick="mostrarFormCategoriasData(<?= $categoria->id_categoria?>)">Editar</button></td>
        <td><button class="btn btn-danger btn-block" onclick="eliminarCategoria(<?= $categoria->id_categoria?>)">Eliminar</button></td>
    </tr>
<?php }?>