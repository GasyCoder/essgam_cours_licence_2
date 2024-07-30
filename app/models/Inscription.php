<?php

// models/Inscription.php
class Inscription extends BaseModel {
    public $etudiant;
    public $cours;

    public function __construct(Etudiant $etudiant, Cours $cours) {
        parent::__construct();
        $this->etudiant = $etudiant;
        $this->cours = $cours;
    }

    public function inscrire() {
        // Ajouter l'étudiant au cours et le cours à l'étudiant
    }

    public function desinscrire() {
        // Supprimer l'étudiant du cours et le cours de l'étudiant
    }
}