<?php

class Personas extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if(!isset($_SESSION['usuario'])){
            header("location:" . URL . "/login/");
        }
        $data = ['titulo' => 'Listado de Personas', 'personas' =>  $this->model->get()];
        require_once("views/header.php");
        $this->view->render('personas/index', $data);
        require_once("views/footer.php");
    }

    public function nuevo()
    {
        $data = ['titulo' => 'Nueva Persona'];
        require_once("views/header.php");
        $this->view->render('personas/nuevo', $data);
        require_once("views/footer.php");
    }

    public function editar()
    {
        $data = ['titulo' => 'Editar Persona', 'personas' => $this->model->getById($_GET['id'])];
        require_once("views/header.php");
        $this->view->render('personas/editar', $data);
        require_once("views/footer.php");
    }

    public function guardar()
    {
        $nombre = empty($_POST['nombre']) ? "" : $_POST['nombre'];
        $apellido = empty($_POST['apellido']) ? "" : $_POST['apellido'];
        $email = empty($_POST['email']) ? "" : $_POST['email'];
        $contrasena = empty($_POST['contrasena']) ? "" : $_POST['contrasena'];
        $id = empty($_POST['id']) ? "" : $_POST['id'];
        $id = $_POST['id'];
        if (isset($id) && !empty($id)) {
            $this->model->update($id, $nombre, $apellido, $email, $contrasena);
            header("location:" . URL . "/personas/");
        } else {
            $this->model->insert($nombre, $apellido, $email, $contrasena);
            header("location:" . URL . "/personas/nuevo");
        }
    }

    public function eliminar()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : "";
        $this->model->delete($id);
        header("location:" . URL . "/personas/");
    }

    public function buscar()
    {
        $buscar = isset($_POST['buscar']) ? $_POST['buscar'] : "";
        $data = ['titulo' => 'Búsqueda de personas', 'personas' =>  $this->model->search($buscar)];
        require_once("views/header.php");
        $this->view->render('personas/buscar', $data);
        require_once("views/footer.php");
    }
}
