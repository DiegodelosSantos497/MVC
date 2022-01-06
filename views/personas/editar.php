<div class="container">
    <br><br>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Editar Alumno</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">

            <form action="<?= URL; ?>/personas/guardar" method="POST">
                <input type="hidden" name="id" value="<?= $data['personas']['id']; ?>">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $data['personas']['nombre']; ?>">
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="<?= $data['personas']['apellido']; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $data['personas']['email']; ?>">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="text" class="form-control" name="contrasena" value="<?= $data['personas']['contrasena']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="<?= URL; ?>/personas/" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>