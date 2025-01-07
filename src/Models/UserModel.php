<?php
namespace App\Models;

use App\Classes\Role;
use App\Classes\User;
use App\Config\DatabaseConnection;
use PDO;

class UserModel{
    private $connexion; 

    public function __construct() {
            $db = new DatabaseConnection();
            $this->connexion = $db->connect();
    }

    public function findUserByEmailAndPassword($email, $password){

        $query = "SELECT users.id, users.email, users.password, roles.id as role_id, roles.nom_role as `role`
        FROM users 
        JOIN roles ON roles.id = users.role_id 
        WHERE users.email = :email";
    // AND users.password = :password
        // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->connexion->prepare($query); 
        $stmt->bindParam(":email", $email);
        // $stmt->bindParam(":password", $hashedPassword);
        $stmt->execute();
        
         $row = $stmt->fetch(PDO::FETCH_ASSOC);
         if(!$row){
         return null;
         }
         else{
            $role = new Role($row["role_id"], $row["role"]);
            return new User($row['id'],$row["email"],$role,$row["password"]);
         }
    }
}