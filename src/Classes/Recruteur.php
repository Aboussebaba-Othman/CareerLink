<?php
namespace App\Classes;

class Recruteur {
    private $id;
    private $nomEntreprise;
    private $user;

    public function __construct($id, $nomEntreprise, $user) {
        $this->id = $id;
        $this->nomEntreprise = $nomEntreprise;
        $this->user = $user;
    }

    public function getId() {
        return $this->id;
    }

    public function getNomEntreprise() {
        return $this->nomEntreprise;
    }

    public function getUser() {
        return $this->user;
    }

    public function setNomEntreprise($nomEntreprise) {
        $this->nomEntreprise = $nomEntreprise;
    }

    public function setUser($user) {
        $this->user = $user;
    }
}
