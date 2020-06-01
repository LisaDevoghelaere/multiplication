<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Niveau 2</title>
</head>
<body>
<header>
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
    <form method="post" name="table_de_multiplication" action="">
        <label for="table-select">Quelle table veux-tu réviser ?<br></label>
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
    <?php
    if(isset($_POST['multiplication'])){
        $multiplicande=$_POST['multiplication'];
            for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++)
            {
                echo $multiplicande.' x '.$multiplicateur.' = '.$multiplicande*$multiplicateur.'<br>';
            }
        }
    ?>
</main>
</body>
</html>