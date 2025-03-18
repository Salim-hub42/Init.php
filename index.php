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
          $note = 22;
  
switch($note){
    case 12:
          echo "Tu es nul";
    break;
        case 14:
          echo "Tu es très faible";
    break;
        case 16:
          echo "Tu es faible";
    break;
        case 18:
          echo "Tu es moyen";
    break;
        case 20:
          echo "Tu es fort";
    break;
        case 22:
          echo "Excellent travail";
    break;
        default:
          echo "Désolé, je n'ai pas de message à afficher pour cette note";
    break;
}

       
        ?>
    </main>
    <footer>

    </footer>
</body>

</html>