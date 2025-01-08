<?php
namespace App\Models\Admin;

use App\Config\DatabaseConnection;
use PDO;
use App\Controllers\Admin\CategoriesConttroller;

class CategoryModel {
    private $connexion;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->connexion = $db->connect();
    }

    public function createCategory($nom) {
        try {
            $this->connexion->beginTransaction();

            
            $userQuery = "INSERT INTO categories (nom) 
                          VALUES (:nom)";
            $stmt = $this->connexion->prepare($userQuery);
            $stmt->bindParam(':nom', $nom);
            $stmt->execute();

            $userId = $this->connexion->lastInsertId();

            $this->connexion->commit();
            return true;
        } catch (Exception $e) {
            return $e->getMessage(); 
        }
    }
}
