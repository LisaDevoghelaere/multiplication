<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Suez+One&display=swap" rel="stylesheet">
    <title>Multiplication - Niveau 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header  class="barrenav container">
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
<main>
<header>
    <h2 class="titre-page">Quelle table veux-tu réviser ?</h2>
</header>
    <form method="post" name="table_de_multiplication" action="">
        <select name="multiplication">
            <option value="0">--Choisis un chiffre--</option>
            <option value="1">Table de 1</option>
            <option value="2">Table de 2</option>
            <option value="3">Table de 3</option>
            <option value="4">Table de 4</option>
            <option value="5">Table de 5</option>
            <option value="6">Table de 6</option>
            <option value="7">Table de 7</option>
            <option value="8">Table de 8</option>
            <option value="9">Table de 9</option>
            <option value="10">Table de 10</option>
        </select>
        <input type="submit" name="valider" value="OK"/>
    </form>
    <div>
        <p>
            <?php
            if(isset($_POST['multiplication'])){
                $multiplicande=$_POST['multiplication'];
                    for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++)
                    {
                        echo $multiplicande.' x '.$multiplicateur.' = '.$multiplicande*$multiplicateur.'<br>';
                    }
                }
            ?>
        </p>
    </div>
</main>
</body>
</html>