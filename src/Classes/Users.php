<?php

namespace App\Classes;

use App\Config\DatabaseConnection;
use PDO;
use PDOException;

class Users
{
    private $db;

    public function __construct()
    {
        $this->db = (new DatabaseConnection())->connect();
    }

    public function create($nom, $prenom, $email, $password, $role_id)
    {
        try {
            $sql = "INSERT INTO User (nom, prenom, email, password, role_id) VALUES (:nom, :prenom, :email, :password, :role_id)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':email' => $email,
                ':password' => password_hash($password, PASSWORD_BCRYPT),
                ':role_id' => $role_id
            ]);
            return true;
        } catch (PDOException $e) {
            return $e->getMessage(); 
        }
    }
}
