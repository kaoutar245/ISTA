<!-- ajouter_stagiaire_action.php -->
<?php
include 'config.php';

$cne = $_POST['cne'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$groupe = $_POST['groupe'];

$sql = "INSERT INTO stagiaires (cne, nom, prenom, groupe) VALUES ('$cne', '$nom', '$prenom', '$groupe')";
if ($conn->query($sql) === TRUE) {
    echo "Nouveau stagiaire ajouté avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="index.php">Retour à l'accueil</a>
