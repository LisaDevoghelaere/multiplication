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
    <header class="container flex-head">
        <h1><a href="index.php">Multiplication</a></h1>
        <nav>
            <ul class="nav-links">
                <li class="resp-disappear"><a href="niveau-deux.php">Niveau 2</a></li>
                <li class="resp-disappear"><a href="niveau-trois.php">Niveau 3</a></li>
                <li class="resp-disappear"><a href="niveau-quatre.php">Niveau 4</a></li>
                <li class="resp-disappear"><a href="niveau-cinq.php">Niveau 5</a></li>
                <li class="resp-disappear"><a href="niveau-six.php">Niveau 6</a></li>
                <li class="resp-disappear"><a href="niveau-quatre-bis.php">Niveau 4 Bis</a></li>
            </ul> 
            <p class="padding-right"><div class="burger"><span></span></div></p>    
        </nav> 
    </header>
    <!--Super Mode révision : Poser une série de 5 questions puis afficher le score -->
    <main class="container">
        <div class="partage2">
            <div class="flex-n5">
                <h2 class="titre-page">Super Mode Révision !</h2>
                <p class="intro">Répond à 5 questions tirées au hasard ! C'est parti ?</p>
                <p class="rose-arrow"><img src="media/rose-arrow.svg" alt="flèche rose"></p>
            </div>
            <div class="window-box">
                <form action="" method="post">
                <?php
                for ($i = 1; $i <= 5; $i++)
                {
                    echo '<h3 class="questions-n5">Question : ' . $i . "</h3><br>";
                    $number1 = random_int(1,10);
                    $number2= random_int(1,10);
                    $resultat= $number1*$number2;
                    echo "$number1 X $number2 = <input type='text' name='reponse$i' class='choisis-un-chiffre'><input type='hidden' name='resultat$i' value='$resultat'>";
                    
                }
                echo "<br><input type='submit' name='valider' value='valider mes réponses' class='afficher'>";
                    if(isset($_POST['valider'])){
                        $score=0;
                        for($i = 1; $i <= 5; $i++){
                            if ($_POST["reponse".$i]== $_POST['resultat'.$i]){
                                $score++;
                            }
                        
                        }
                        echo "<p class='score'>Ton score : <span> $score</span> /5</p>";
                    }
                ?>
         </form>
            </div>
        </div>
    </main>
    <script src="app.js"></script>
</body>
</html>