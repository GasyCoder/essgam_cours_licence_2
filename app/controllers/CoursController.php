<?php

namespace App\Controllers;

use App\Models\Cours;

class CoursController extends BaseController {
    public function index() {
        $cours = Cours::all();
        $this->render('cours/index', ['cours' => $cours]);
    }

    public function show($id) {
        $cours = Cours::find($id);
        $this->render('cours/show', ['cours' => $cours]);
    }

    public function create() {
        $this->render('cours/create');
    }

    public function store($data) {
        $cours = new Cours($data['id'], $data['nom']);
        $cours->save();
        header('Location: /cours');
    }

    public function edit($id) {
        $cours = Cours::find($id);
        $this->render('cours/edit', ['cours' => $cours]);
    }

    public function update($id, $data) {
        $cours = Cours::find($id);
        $cours->nom = $data['nom'];
        $cours->save();
        header('Location: /cours');
    }

    public function destroy($id) {
        $cours = Cours::find($id);
        $cours->delete();
        header('Location: /cours');
    }
}

