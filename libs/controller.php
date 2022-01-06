<?php

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($model)
    {
        $url = 'models/' . $model . 'model.php';
        if (file_exists($url)) {
            require_once($url);
            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }
}
