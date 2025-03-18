<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les variable en PHP</title>
</head>

<body>
    <header>

    </header>
    <main>
        <?php
     $note = 13;
     $dificulte = "facile";
     $dificulte = "dificile";

     if($note <= 12 && $dificulte == "facile"){
        echo"c'est null !";
     }elseif($note >=12  && $dificulte == "facile"){
        echo "Pas mal , mais c'etait facile";
     }elseif($note <=12 && $dificulte == "dificile" ){
        echo "C'est pas terrible et c'etait difficile";
     }else{
        echo " Bravo , c'etait difficile mais tu as reussi";
     }

       
        ?>
    </main>
    <footer>

    </footer>
</body>

</html>