<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les base de la P O O  en php</title>
</head>

<body>
<header>

</header>
<main>
<?php

// Exemple d'utilisation de try et catch pour gérer une connexion à une base de données

// Informations de connexion
$host = 'localhost'; // Adresse du serveur de base de données
$dbname = 'test_db'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur pour la connexion
$password = ''; // Mot de passe pour la connexion

try {
    // Tentative de connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); // Création d'une instance PDO pour se connecter à la base de données 

    // Configuration des options PDO pour gérer les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configuration du mode d'erreur de PDO pour lancer des exceptions en cas d'erreur 

    // Si la connexion réussit, afficher un message
    echo "Connexion réussie à la base de données !"; // Message de succès de la connexion à la base de données
} catch (PDOException $e) { // Capture des exceptions liées à PDO (exemple : erreur de connexion, base de données inexistante)
    
    echo "Erreur de connexion : " . $e->getMessage(); 
} finally {
    // Bloc exécuté dans tous les cas (connexion réussie ou échouée)
    echo "\nFin du script.";
}
?>
</main> 
<footer>

</footer>
</body>

</html>