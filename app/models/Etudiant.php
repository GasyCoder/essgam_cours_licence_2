<?php

namespace App\Models;

class Etudiant {
    private $id;
    private $nom;
    private $cours;

    public function __construct($id, $nom) {
        $this->id = $id;
        $this->nom = $nom;
        $this->cours = [];
    }

    public function ajouterCours(Cours $cours) {
        $this->cours[] = $cours;
    }

    public function supprimerCours(Cours $cours) {
        // Suppression logique du cours de l'étudiant
    }

    public function getCours() {
        return $this->cours;
    }

    // Autres méthodes getters et setters
}

