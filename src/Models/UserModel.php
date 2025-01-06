<?php
namespace App\Models;

use App\Classes\Role;
use App\Classes\User;
use App\Config\DatabaseConnection;
use PDO;

class UserModel{
    private $connexion;

    public function __construct() {
            $db = new Database();
            $this->connexion = $db->connection();
    }

    public function findUserByEmailAndPassword($email, $password){
        $query = "SELECT users.id , users.email , users.password , role.id as role_id , nom_role as `role`
        FROM users join role on role.id = users.role_id where users.email = :email and users.password = :password";        
   
        $stmt = $this->connexion->prepare($query); 
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
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