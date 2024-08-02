<!DOCTYPE html>
<html>
<head>
    <title>Modifier un étudiant</title>
</head>
<body>
    <h1>Modifier un étudiant</h1>
    <form action="/etudiants/<?php echo $etudiant->getId(); ?>/update" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $etudiant->getNom(); ?>">
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
