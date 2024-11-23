<!-- modifier_stagiaire.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un stagiaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Modifier un stagiaire</h1>
    <form action="modifier_stagiaire_action.php" method="post">
        <label for="cne">CNE :</label>
        <input type="text" id="cne" name="cne" required><br>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br>
        <label for="groupe">Groupe :</label>
        <input type="text" id="groupe" name="groupe"><br>
        <input type="submit" value="Modifier">
    </form>
    <?php include 'footer.php'; ?>
</body>
</html>
