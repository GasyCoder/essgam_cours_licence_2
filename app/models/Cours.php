<?php 

// models/Cours.php
class Cours extends BaseModel {
    public $id;
    public $nom;
    public $etudiants = [];

    public function __construct($id = null, $nom = null) {
        parent::__construct();
        $this->id = $id;
        $this->nom = $nom;
    }

    public function ajouterEtudiant(Etudiant $etudiant) {
        $this->etudiants[] = $etudiant;
    }

    public function supprimerEtudiant(Etudiant $etudiant) {
        // Suppression d'un étudiant
    }

    public function getEtudiants() {
        return $this->etudiants;
    }
}