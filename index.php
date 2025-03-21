<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions String  PHP</title>
</head>

<body>
<header>

</header>
<main>
<?php
echo strlen("Bonjour a tous")."<br>";
echo str_word_count("Bonjour à tous")."<br>";
echo str_repeat("Coucou à tous <br>", 10);
echo str_replace("Bonjour", "Bonsoir", "Bonjour à tous")."<br>";
echo strtolower("BONJOUR A TOUS")."<br>";
echo strtoupper("bonjour a tous")."<br>";
echo strpos("Bonjour à tous", "tous")."<br>";

$str = 'j\'aime les fruits et le <strong>chocolat</strong>';
echo htmlspecialchars($str)."<br>";
echo htmlspecialchars_decode($str)."<br>";

echo nl2br("Bonjour à tous \n Comment ça va ?")."<br>";




?>
</main>
<footer>

</footer>
</body>

</html>