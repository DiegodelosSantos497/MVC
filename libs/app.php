<?php
require_once('controllers/errores.php');
class App
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {
            $archivoController = 'controllers/home.php';
            require_once($archivoController);
            $controller = new Home();
            $controller->loadModel($url[0]);
            $controller->index();
            return false;
        }
        $archivoController = 'controllers/' . $url[0] . '.php';
        if (file_exists($archivoController)) {
            require_once($archivoController);
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $controller->index();
                }
            } else {
                $controller->index();
            }
        } else {
            $controller = new Errores();
        }
    }
}
