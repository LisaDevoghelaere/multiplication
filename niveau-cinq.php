<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Suez+One&display=swap" rel="stylesheet">
    <title>Multiplication - Niveau 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="barrenav container">
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
    <!--Super Mode révision : Poser une série de 5 questions puis afficher le score -->
    <main class="container">
        <h2>Super Mode Révision !</h2>
        <p>Répond à 5 questions tirées au hasard ! C'est parti ?</p>
        <form action="" method="post">
        <?php
        for ($i = 1; $i <= 5; $i++)
        {
            echo '<h3>Question : ' . $i . "</h3><br>";
            $number1 = random_int(1,10);
            $number2= random_int(1,10);
            $resultat= $number1*$number2;
            echo "$number1 X $number2 = <input type='number' required name='reponse$i'><input type='hidden' name='resultat$i' value='$resultat'>";
            
        }
        echo "<input type='submit' name='valider' value='valider mes réponses'>";
            if(isset($_POST['valider'])){
                $score=0;
                for($i = 1; $i <= 5; $i++){
                    if ($_POST["reponse".$i]== $_POST['resultat'.$i]){
                        $score++;
                    }
                
                }
                echo "votre score $score /5";
            }
        ?>
 </form>
    </main>
</body>
</html>