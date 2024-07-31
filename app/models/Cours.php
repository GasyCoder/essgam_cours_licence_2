<?php 

// models/Cours.php
class Cours {
    private $id;
    private $nom;
    private $etudiants;

    public function __construct($id, $nom) {
        $this->id = $id;
        $this->nom = $nom;
        $this->etudiants = [];
    }

    public function ajouterEtudiant(Etudiant $etudiant) {
        $this->etudiants[] = $etudiant;
    }

    public function supprimerEtudiant(Etudiant $etudiant) {
        // Suppression logique de l'étudiant du cours
    }

    public function getEtudiants() {
        return $this->etudiants;
    }

    // Autres méthodes getters et setters
}
