<div class="container">
    <br><br>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3><?=$data['titulo']?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">

            <form action="<?= URL; ?>/login/login" method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="text" class="form-control" name="contrasena">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="<?= URL; ?>/home" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
        &nbsp;
        <div class="col-sm-12">
            <ul>
                <li>Email: <strong>admin@admin.com</strong></li>
                <li>Contraseña: <strong>admin</strong></li>
            </ul>
        </div>
    </div>
</div>