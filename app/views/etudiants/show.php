<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'étudiant</title>
</head>
<body>
    <h1>Détails de l'étudiant</h1>
    <p>ID: <?php echo $etudiant->getId(); ?></p>
    <p>Nom: <?php echo $etudiant->getNom(); ?></p>
    <a href="/etudiants">Retour à la liste</a>
</body>
</html>
