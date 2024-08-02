<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un étudiant</title>
</head>
<body>
    <h1>Ajouter un étudiant</h1>
    <form action="/etudiants/store" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
