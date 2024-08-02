<!DOCTYPE html>
<html>
<head>
    <title>Liste des inscriptions</title>
</head>
<body>
    <h1>Liste des inscriptions</h1>
    <table>
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Cours</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inscriptions as $inscription): ?>
                <tr>
                    <td><?php echo $inscription->getEtudiant()->getNom(); ?></td>
                    <td><?php echo $inscription->getCours()->getNom(); ?></td>
                    <td>
                        <a href="/inscriptions/<?php echo $inscription->getEtudiant()->getId(); ?>/<?php echo $inscription->getCours()->getId(); ?>/delete">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/inscriptions/create">Ajouter une inscription</a>
</body>
</html>
