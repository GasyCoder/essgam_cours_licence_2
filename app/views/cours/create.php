<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un cours</title>
</head>
<body>
    <h1>Ajouter un cours</h1>
    <form action="/cours/store" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
