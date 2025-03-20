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
        $menbres = array(
            array('Sal', 35, 'vico42000@yahoo.fr'),
            array('Ass', 36, 'ass@yahoo.com'),
            array('Zak', 6, 'Zak@yahoo.com'),
        );
        for ($ligne = 0; $ligne < 3; $ligne++) {
            $menbres_no = $ligne + 1;
            echo 'Menbre numéro'  . $menbres_no .  '<br>';
            echo '<ul>';
            for ($col = 0; $col < 3; $col++) {
                echo '<li>' . $menbres[$ligne][$col] . '</li>';
            }
            echo '</ul>';
        }
        ?>
    </main>
    <footer>

    </footer>
</body>

</html>