<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'instruction include</title>
</head>
<body>
<header>
   <?php 
   include("header.php"); 
   ?>
   <?php
    include("menu.php");
    ?>
</header>
<main>
    <!--Contenu de la page-->
        <h1>Mon premier site en PHP</h1>
        <p>Je suis un paragraphe en HTML</p>
</main>
<footer>
 <?php
    include("footer.php");
    ?>
</footer>
</body>
</html>