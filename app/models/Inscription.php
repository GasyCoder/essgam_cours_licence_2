<?php

// models/Inscription.php
class Inscription {
    private $etudiant;
    private $cours;

    public function __construct(Etudiant $etudiant, Cours $cours) {
        $this->etudiant = $etudiant;
        $this->cours = $cours;
    }

    public function inscrire() {
        $this->etudiant->ajouterCours($this->cours);
        $this->cours->ajouterEtudiant($this->etudiant);
    }

    public function desinscrire() {
        $this->etudiant->supprimerCours($this->cours);
        $this->cours->supprimerEtudiant($this->etudiant);
    }
}
