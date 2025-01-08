<?php
namespace App\Controllers\Admin;

use App\Models\Admin\CategoryModel;

class CategoriesConttroller {
    public function Categorie($postData) {
        $nomCategory = $postData['nom_category'];

        $CategoryModel = new CategoryModel();
        $result = $CategoryModel->createCategory($nom);

        if ($result === true) {
            echo"inerst valid";
        } else {
            echo "Registration failed: " . $result;
        }
    }
}