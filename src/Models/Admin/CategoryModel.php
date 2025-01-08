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
    public function getAllCategories() {
        try {
            $query = "SELECT * FROM categories";
            $stmt = $this->connexion->prepare($query);
            $stmt->execute();
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            
            return $categories;
        } catch (Exception $e) {
            echo "Erreur lors de la récupération des catégories : " . $e->getMessage();
            return []; 
        }
    }
    
    
    
    
    
    
    public function createCategory($nom) {
        try {


            $userQuery = "INSERT INTO categories (nom) 
                          VALUES (:nom)";
            $stmt = $this->connexion->prepare($userQuery);
            $stmt->bindParam(':nom', $nom);
            $stmt->execute();

            $userId = $this->connexion->lastInsertId();
             return $userId ;
        } catch (Exception $e) {
            return $e->getMessage(); 
        }
    }
    public function updateCategory($id, $nom) {
        try {
            $query = "UPDATE categories SET nom = :nom WHERE id = :id";
            $stmt = $this->connexion->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nom', $nom);
            $stmt->execute();
    
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                echo "No rows updated. Category ID might not exist.";
                return false;
            }
        } catch (Exception $e) {
            echo "Error updating category: " . $e->getMessage();
            return false;
        }
    }
    
}


