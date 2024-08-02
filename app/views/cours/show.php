<!DOCTYPE html>
<html>
<head>
    <title>Détails du cours</title>
</head>
<body>
    <h1>Détails du cours</h1>
    <p>ID: <?php echo $cours->getId(); ?></p>
    <p>Nom: <?php echo $cours->getNom(); ?></p>
    <a href="/cours">Retour à la liste</a>
</body>
</html>
