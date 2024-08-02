<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une inscription</title>
</head>
<body>
    <h1>Ajouter une inscription</h1>
    <form action="/inscriptions/store" method="post">
        <label for="etudiant_id">Étudiant:</label>
        <select id="etudiant_id" name="etudiant_id">
            <?php foreach ($etudiants as $etudiant): ?>
                <option value="<?php echo $etudiant->getId(); ?>"><?php echo $etudiant->getNom(); ?></option>
            <?php endforeach; ?>
        </select>
        <label for="cours_id">Cours:</label>
        <select id="cours_id" name="cours_id">
            <?php foreach ($cours as $coursItem): ?>
                <option value="<?php echo $coursItem->getId(); ?>"><?php echo $coursItem->getNom(); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
