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
        $heure_connecxion = (17);
        if ($heure_connecxion < 18) {
            echo "Passez une bonne journée !<br>";
            $journee = "oui";
        } else {
            echo "Passez une bonne soirée !<br>";
            $journee = "non";
        }
        echo "fait-il jour ? La réponse est $journee";
        ?>
    </main>
    <footer>

    </footer>
</body>

</html>