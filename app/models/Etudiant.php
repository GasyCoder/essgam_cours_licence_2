<?php

// models/Etudiant.php
class Etudiant extends BaseModel {
    public $id;
    public $nom;
    public $cours = [];

    public function __construct($id = null, $nom = null) {
        parent::__construct();
        $this->id = $id;
        $this->nom = $nom;
    }

    public function ajouterCours(Cours $cours) {
        $this->cours[] = $cours;
    }

    public function supprimerCours(Cours $cours) {
        // Suppression d'un cours
    }

    public function getCours() {
        return $this->cours;
    }
}