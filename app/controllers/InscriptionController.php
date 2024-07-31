<?php

// controllers/InscriptionController.php
class InscriptionController extends BaseController {
    public function index() {
        $inscriptions = Inscription::all();
        $this->render('inscriptions/index', ['inscriptions' => $inscriptions]);
    }

    public function create() {
        $etudiants = Etudiant::all();
        $cours = Cours::all();
        $this->render('inscriptions/create', ['etudiants' => $etudiants, 'cours' => $cours]);
    }

    public function store($data) {
        $etudiant = Etudiant::find($data['etudiant_id']);
        $cours = Cours::find($data['cours_id']);
        $inscription = new Inscription($etudiant, $cours);
        $inscription->inscrire();
        header('Location: /inscriptions');
    }

    public function destroy($etudiant_id, $cours_id) {
        $etudiant = Etudiant::find($etudiant_id);
        $cours = Cours::find($cours_id);
        $inscription = new Inscription($etudiant, $cours);
        $inscription->desinscrire();
        header('Location: /inscriptions');
    }
}