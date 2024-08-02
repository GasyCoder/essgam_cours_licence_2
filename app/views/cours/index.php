<!DOCTYPE html>
<html>
<head>
    <title>Liste des cours</title>
</head>
<body>
    <h1>Liste des cours</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cours as $coursItem): ?>
                <tr>
                    <td><?php echo $coursItem->getId(); ?></td>
                    <td><?php echo $coursItem->getNom(); ?></td>
                    <td>
                        <a href="/cours/<?php echo $coursItem->getId(); ?>">Voir</a>
                        <a href="/cours/<?php echo $coursItem->getId(); ?>/edit">Modifier</a>
                        <a href="/cours/<?php echo $coursItem->getId(); ?>/delete">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/cours/create">Ajouter un cours</a>
</body>
</html>
