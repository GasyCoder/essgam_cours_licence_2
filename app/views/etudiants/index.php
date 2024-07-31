<?php require_once 'views/layout.php'; ?>

<h1>Liste des étudiants</h1>
<ul>
    <?php foreach ($etudiants as $etudiant): ?>
        <li>
            <a href="index.php?controller=etudiant&action=details&id=<?= $etudiant->getId() ?>">
                <?= htmlspecialchars($etudiant->getNom()) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>