<!DOCTYPE html>
<html>
<head>
    <title>Modifier un cours</title>
</head>
<body>
    <h1>Modifier un cours</h1>
    <form action="/cours/<?php echo $cours->getId(); ?>/update" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $cours->getNom(); ?>">
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
