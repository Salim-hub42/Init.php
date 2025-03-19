<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les boucles en PHP</title>
</head>

<body>
    <header>

    </header>
    <main>
    <?php
 /*$x = 1;
 while ($x <= 10){
    echo"Ceci est le nobre : $x <br>";
    $x++;
 }
$x = 1;
do{
    echo"Ceci est le nombre : $x  <br>";
    $x++;
}
while($x <= 10);*/


for($x=10;$x>=1;$x--){
    echo"Ceci est le nombre : $x <br>";
foreach(array(1,2,3,4,5) as $valeur){
    echo"La valeur est : $valeur <br>";
}
}

    ?>
    </main>
    <footer>

    </footer>
</body>

</html>