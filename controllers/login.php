<?php

class Login extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if(isset($_SESSION['usuario'])){
            header("location:" . URL . "/login/inicio");
        }
        $data = ['titulo' => 'Login'];
        require_once("views/header.php");
        $this->view->render('login/index', $data);
        require_once("views/footer.php");
    }

    public function inicio()
    {
        if(!isset($_SESSION['usuario'])){
            header("location:" . URL . "/login/index");
        }
        $data = ['titulo' => 'Bienvenido'];
        require_once("views/header.php");
        $this->view->render('login/inicio', $data);
        require_once("views/footer.php");
    }

    public function login()
    {
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        if ($this->model->login($email, $contrasena)) {
            $_SESSION['usuario'] = $this->model->login($email, $contrasena);
            header("location:" . URL . "/login/home");
        } else {
            header("location:" . URL . "/login/index");
        }
    }

    public function cerrar()
    {
        unset($_SESSION['usuario']);
        session_destroy();
        header("location:" . URL . "/login/index");
    }
}
