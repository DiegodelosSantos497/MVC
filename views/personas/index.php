<div class="container">
    <br><br>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3><?= $data['titulo']; ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <a href="<?= URL; ?>/personas/nuevo" class="btn btn-info">Nuevo</a>
            <form class="form-inline mt-2" action="<?= URL; ?>/personas/buscar" method="POST">
                <div class="form-group mb-2 mx-sm-2">
                    <label for="buscar" class="sr-only">Buscar personas</label>
                    <input type="text" class="form-control" name="buscar" placeholder="Buscar">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Buscar</button>
            </form>
        </div>
        <div class="col-sm-12">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <? if (empty($data['personas'])) {
                        echo "<tr><td colspan='6'>No hay registros</td></tr>";
                    } else {
                        foreach ($data['personas'] as $value) { ?>
                            <tr>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['nombre'] ?></td>
                                <td><?= $value['apellido'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['contrasena'] ?></td>
                                <td>
                                    <a href=<?= URL . "/personas/editar?id=" . $value['id'] ?>>Editar</a>
                                    <a href=<?= URL . "/personas/eliminar?id=" . $value['id'] ?>>Eliminar</a>
                                </td>
                            </tr>
                    <? }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>