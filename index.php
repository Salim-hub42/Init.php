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
$etudiant = false;
if($etudiant == true){
    echo"Vous êtes étudiant";
}
else{
    echo"Vous n'êtes pas étudiant";
}

        //* deuxième exemple
 if($etudiant){
    echo"Vous êtes étudiant";
 }
 else{
    echo "Vous n'êtes pas étudiant";
 }
        //* troisième exemple 
    if(! $etudiant){
        echo"Vous n'êtes pas étudiant";
    }
    else{
        echo "Vous êtes étudiant";
    }   
    ?>
    </main>
    <footer>

    </footer>
</body>

</html>