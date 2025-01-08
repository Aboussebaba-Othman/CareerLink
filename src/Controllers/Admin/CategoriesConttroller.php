<?php
namespace App\Controllers\Admin;

use App\Models\Admin\CategoryModel;

class CategoriesConttroller {
    public function getCategories() {
        $CategoryModel = new CategoryModel();
        return $CategoryModel->getAllCategories();
        
    }
    
    // <a href="../../Views/admin/Categories/dashCategorie.php"></a>
    
    public function Categorie($nom) {
        $CategoryModel = new CategoryModel();
        $result = $CategoryModel->createCategory($nom);

        if (!$result ) {
             echo "Registration failed: ";
        }
         else {
           header('location: dashCategorie.php');
           exit();
         }
    }
    public function updateCategorie($id, $nom) {
        $CategoryModel = new CategoryModel();
        $result = $CategoryModel->updateCategory($id, $nom);
    
        if (!$result) {
            echo "Update failed: " . $result;
        } else {
            header('Location: dashCategorie.php');
            exit();
        }
    }
    
}