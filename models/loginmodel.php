<?php

class loginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $contrasena)
    {
        try {
            $stmt = $this->db->conectar()->prepare('SELECT * FROM personas WHERE email = :email AND contrasena = :contrasena');
            if ($stmt->execute(['email' => $email, 'contrasena' => $contrasena])) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            print("Error: " . $e->getMessage());
            die();
        }
    }

}
