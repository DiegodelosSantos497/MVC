<?php

class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->index();
    }

    public function index()
    {
        $data = ['titulo' => 'Home'];
        require_once("views/header.php");
        $this->view->render('home/index', $data);
        require_once("views/footer.php");
    }
}
