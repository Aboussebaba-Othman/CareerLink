<?php

namespace App\Classes;


class User {
    public $id;
    public $nom;
    
    public function __construct($id, $nom) {
            $this->id = $id;
            $this->nom = $nom;
         
    }


    public function getId() { return $this->id; }
    public function getName() { return $this->nom; }
    
}