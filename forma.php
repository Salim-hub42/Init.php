<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP et MySql</title>
</head>

<body>
<header>

</header>
<main>
<?php
$serveur = "localhost";
$login = "root";
$mdp = "";

try {
    $connexion = new PDO("mysql:host=$serveur;port=3307;dbname=test2", $login, $mdp);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparation de la requête avec des paramètres
    $insertion = "INSERT INTO Visiteurs(nom, prenom, email) VALUES (:nom, :prenom, :email)";
    $stmt = $connexion->prepare($insertion);

    // Liaison des paramètres avec leurs valeurs
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);

    // Définition des valeurs
    $nom = 'khalfoun';
    $prenom = 'salim';
    $email = 'salim.khalfoun@yahoo.fr';

    // Exécution de la requête
    $stmt->execute();

    echo "Insertion réussie !";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
</main> 
<footer>

</footer>
</body>

</html>