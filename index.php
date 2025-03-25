<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions relative au temp</title>
</head>

<body>
<header>

</header>
<main>
<?php
date_default_timezone_set("Europe/Paris");
   /*  premier exemple sur la gestion des dates
$jour = array(
    "",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche");

$mois = array(
    "",
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre");

    $datefr = $jour[date("N")]." ".date("d")." ".$mois[date("n")]." ".date("Y");
    echo "Nous sommes le $datefr<br>"; 
*/

   /* deuxième exemple sur la classe IntlDateFormatter qui est une méthode optimisé pour la gestion des dates
$formatter = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
);
echo "Nous sommes le " . $formatter->format(new DateTime());
*/


    // troisième exemple vérification de la validité d'une date
/*
$dates = [
    [12, 31, 2014],
    [13, 31, 2014],
    [01, 25, -100]
];

foreach ($dates as $date) {
    if (checkdate($date[0], $date[1], $date[2])) {
        echo "La date " . implode("/", $date) . " est valide<br>";
    } else {
        echo "La date " . implode("/", $date) . " n'est pas valide<br>";
    }
}
*/
echo "<pre>";  
print_r (getdate());
echo "</pre>";

echo "<br>";
echo "<br>";

echo "<pre>";
print_r (getdate(1));
echo "<\pre>";






?>
</main> 
<footer>

</footer>
</body>

</html>