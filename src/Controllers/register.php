<?php

namespace App\Controllers;

use App\Classes\Users;

class RegisterController
{
    private $user;

    public function __construct()
    {
        $this->user = new Users();
    }

    public function register($data)
    {
        if (isset($data['nom'], $data['prenom'], $data['email'], $data['password'], $data['role_id'])) {
            return $this->user->create(
                $data['nom'],
                $data['prenom'],
                $data['email'],
                $data['password'],
                $data['role_id']
            );
        }
        return "Tous les champs sont obligatoires.";
    }
}
