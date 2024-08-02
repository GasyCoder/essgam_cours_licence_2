<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Liste des étudiants</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($etudiants) && count($etudiants) > 0): ?>
                <?php foreach ($etudiants as $etudiant): ?>
                    <tr>
                        <td><?php echo $etudiant->getId(); ?></td>
                        <td><?php echo $etudiant->getNom(); ?></td>
                        <td>
                            <a href="/etudiants/<?php echo $etudiant->getId(); ?>">Voir</a>
                            <a href="/etudiants/<?php echo $etudiant->getId(); ?>/edit">Modifier</a>
                            <a href="/etudiants/<?php echo $etudiant->getId(); ?>/delete">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">Aucun étudiant trouvé.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="/etudiants/create">Ajouter un étudiant</a>
</body>
</html>

