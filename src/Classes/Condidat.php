<?php
namespace App\Classes;

class Candidat {
    private $id;
    private $skills;
    private $user;

    public function __construct($id, $skills, $user) {
        $this->id = $id;
        $this->skills = $skills;
        $this->user = $user;
    }

    public function getId() {
        return $this->id;
    }

    public function getSkills() {
        return $this->skills;
    }

    public function getUser() {
        return $this->user;
    }

    public function setSkills($skills) {
        $this->skills = $skills;
    }

    public function setUser($user) {
        $this->user = $user;
    }
}
