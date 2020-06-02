<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Suez+One&display=swap" rel="stylesheet">
    <title>Multiplication - Niveau 3</title>
    <link rel="stylesheet" href="style.scss">
</head>
<body>
    <header>
        <h1>Multiplication</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="niveau-deux.php">Niveau 2</a></li>
                <li><a href="niveau-trois.php">Niveau 3</a></li>
                <li><a href="niveau-quatre.php">Niveau 4</a></li>
                <li><a href="niveau-cinq.php">Niveau 5</a></li>
                <li><a href="niveau-six.php">Niveau 6</a></li>
                <li><a href="niveau-quatre-bis.php">Niveau 4 Bis</a></li>
            </ul>
        </nav>
    </header>
    <!--checkbox - Le choix de la ou des table(s) de multiplication à afficher se fait par checkboxes et par un bouton "valider". La ou les table(s) de multiplication sélectionée(s) s'affiche(nt) en dessous.-->
    <form method="POST" action="">
        <input type="checkbox" name="chiffre[]" value="1"> Table de 1<br>
        <input type="checkbox" name="chiffre[]" value="2"> Table de 2<br>
        <input type="checkbox" name="chiffre[]" value="3"> Table de 3<br>
        <input type="checkbox" name="chiffre[]" value="4"> Table de 4<br>
        <input type="checkbox" name="chiffre[]" value="5"> Table de 5<br>
        <input type="submit" name="bouton" value="Afficher">
    </form>
    
</body>
</html>