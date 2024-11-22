<?php
// Connexion à la base de données
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'gestion_stagiaires';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Erreur de connexion : ' . $conn->connect_error);
}

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // L'identifiant du stagiaire à modifier
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $filiere = $conn->real_escape_string($_POST['filiere']);
    $annee_etude = $conn->real_escape_string($_POST['annee_etude']);
    $type_bac = $conn->real_escape_string($_POST['type_bac']);
    $annee_bac = intval($_POST['annee_bac']);

    // Requête SQL pour modifier les données
    $sql = "UPDATE stagiaires 
            SET 
                nom = '$nom', 
                prenom = '$prenom', 
                filiere = '$filiere', 
                annee_etude = '$annee_etude', 
                type_bac = '$type_bac', 
                annee_bac = $annee_bac
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Les informations du stagiaire ont été mises à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour : " . $conn->error;
    }
}

// Récupérer les informations du stagiaire à modifier
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM stagiaires WHERE id = $id");

    if ($result->num_rows > 0) {
        $stagiaire = $result->fetch_assoc();
    } else {
        echo "Stagiaire introuvable.";
        exit;
    }
} else {
    echo "ID non spécifié.";
    exit;
}

$conn->close();
