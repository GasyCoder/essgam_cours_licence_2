<?php
// controllers/EtudiantController.php
class EtudiantController extends BaseController {
    public function index() {
        $etudiants = Etudiant::all();
        $this->render('etudiants/index', ['etudiants' => $etudiants]);
    }

    public function show($id) {
        $etudiant = Etudiant::find($id);
        $this->render('etudiants/show', ['etudiant' => $etudiant]);
    }

    public function create() {
        $this->render('etudiants/create');
    }

    public function store($data) {
        $etudiant = new Etudiant($data['id'], $data['nom']);
        $etudiant->save();
        header('Location: /etudiants');
    }

    public function edit($id) {
        $etudiant = Etudiant::find($id);
        $this->render('etudiants/edit', ['etudiant' => $etudiant]);
    }

    public function update($id, $data) {
        $etudiant = Etudiant::find($id);
        $etudiant->nom = $data['nom'];
        $etudiant->save();
        header('Location: /etudiants');
    }

    public function destroy($id) {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        header('Location: /etudiants');
    }
}
