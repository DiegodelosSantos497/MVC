<?php

class Errores extends Controller
{
    public function __construct()
    {
        parent::__construct();
        require_once("views/header.php");
        $this->view->index('errores/index');
        require_once("views/footer.php");
    }
}
