<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target PHP</title>
</head>

<body>
<header>

</header>
<main>
<?php
$prenom = $nom = $pseudo = "";

function securisation($donnees){
      $donnees = trim($donnees);
      $donnees = stripslashes($donnees);
      $donnees = strip_tags($donnees);
      $donnees = htmlspecialchars($donnees);
      return $donnees;
}

$prenom = securisation($_POST["prenom"]);
$nom = securisation($_POST["nom"]);
$pseudo = securisation($_POST["pseudo"]);

echo "<p>Bonjour $prenom $nom, votre pseudo est $pseudo</p>";
echo "<p>Vous avez envoyé les données suivantes : </p>";
echo "<ul>";
echo "<li>Prénom : $prenom</li>";
echo "<li>Nom : $nom</li>";
echo "<li>Pseudo : $pseudo</li>";
echo "</ul>";

?>

</main> 
<footer>

</footer>
</body>

</html>