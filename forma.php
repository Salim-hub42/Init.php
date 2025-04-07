<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération de données mysql</title>
</head>

<body>
<header>

</header>
<main>
<?php
$serveur = "localhost";
$login = "root";
$mdp = "";
try{
    $connexion = new PDO("mysql:host=$serveur;port=3307;dbname=test2;charset=utf8",$login,$mdp);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données !<br>";

    $jointure_int = "
    SELECT ins.prenom, com.commentaire
    FROM inscrits AS ins
    LEFT  JOIN commentaire AS com
    ON ins.id = com.id_inscrit

    UNION

    SELECT ins.prenom, com.commentaire
    FROM inscrits AS ins
    RIGHT JOIN commentaire AS com
    ON ins.id = com.id_inscrit";

    $requete = $connexion->prepare($jointure_int);
    $requete->execute();

    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    echo "<table border='1'>";
    echo "<tr><th>Prénom</th><th>Commentaire</th></tr>";
    foreach ($resultat as $row) {
        echo "<tr><td>{$row['prenom']}</td><td>{$row['commentaire']}</td></tr>";
    }
    echo "</table>";
 
}
catch(PDOException $e){
    echo "Erreur de connexion : " . $e->getMessage();
}


?>
</main> 
<footer>

</footer>
</body>

</html>