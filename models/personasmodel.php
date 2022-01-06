<?php

class personasModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($nombre, $apellido, $email, $contrasena)
    {
        try {
            $stmt = $this->db->conectar()->prepare('INSERT INTO personas(nombre, apellido, email, contrasena) VALUES(:nombre, :apellido, :email, :contrasena)');
            $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":apellido", $apellido, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":contrasena", $contrasena, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            print("Error: " . $e->getMessage());
            die();
        }
    }

    public function get()
    {
        try {
            $stmt = $this->db->conectar()->query("SELECT * FROM personas");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print("Error: " . $e->getMessage());
            die();
        }
    }

    public function delete($id)
    {
        try {
            $stmt = $this->db->conectar()->prepare('DELETE FROM personas WHERE id = :id');
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            print("Error: " . $e->getMessage());
            die();
        }
    }

    public function getById($id)
    {
        try {
            $stmt = $this->db->conectar()->prepare('SELECT * FROM personas WHERE id = :id');
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            if ($stmt->execute()) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            print("Error: " . $e->getMessage());
            die();
        }
    }

    public function update($id, $nombre, $apellido, $email, $contrasena)
    {
        try {
            $stmt = $this->db->conectar()->prepare('UPDATE personas SET nombre = :nombre, apellido = :apellido, email = :email, contrasena = :contrasena WHERE id = :id');
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam(":apellido", $apellido, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":contrasena", $contrasena, PDO::PARAM_STR);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            print("Error: " . $e->getMessage());
            die();
        }
    }

    public function search($buscar)
    {
        try {
            $stmt = $this->db->conectar()->prepare("SELECT * FROM personas WHERE nombre LIKE  '%$buscar%' OR apellido LIKE  '%$buscar%'");
            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            print("Error: " . $e->getMessage());
            die();
        }
    }
}
