<!-- rechercher_stagiaires.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Rechercher des stagiaires</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Rechercher des stagiaires</h1>
    <form action="rechercher_stagiaires_action.php" method="post">
        <label for="groupe">Groupe :</label>
        <input type="text" id="groupe" name="groupe" required><br>
        <input type="submit" value="Rechercher">
    </form>
    <?php include 'footer.php'; ?>
</body>
</html>
