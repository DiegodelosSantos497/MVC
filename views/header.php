<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= URL; ?>/public/css/bootstrap.min.css">

    <title> <?=$data['titulo']. " - " .WEB_NAME?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="<?=URL;?>/home/"><?=WEB_NAME;?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=URL;?>/login/inicio">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=URL;?>/personas">Personas</a>
                </li>
                <?if(isset($_SESSION['usuario'])){?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=URL;?>/login/cerrar">Cerrar Sesión</a>
                </li>
                <?}?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Buscar">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>