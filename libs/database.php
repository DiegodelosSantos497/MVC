<?php

class Database
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = HOST;
        $this->db = DATABASE;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->charset = CHARSET;
    }

    public function conectar()
    {
        try {
            $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($conexion, $this->user, $this->password, $opciones);
            return $pdo;
        } catch (PDOException $e) {
            print_r("Error de conexión: " . $e->getMessage());
            die();
        }
    }
}
