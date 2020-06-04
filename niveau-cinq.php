<?php session_start(); //pour que les *_SESSION marchent. le $_SESSION permet de terenir des infos ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Suez+One&display=swap" rel="stylesheet">
    <title>Multiplication - Niveau 5</title>
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
    <!--Super Mode révision : Poser une série de 5 questions puis afficher le score -->
    <main>
        <h2>Super Mode Révision !</h2>
        <p>Répond à 5 questions tirées au hasard ! C'est parti ?</p>
        <?php
        for ($question = 1; $question <= 5; $question++)
        {
            echo '<h3>Question : ' . $question . "</h3><br>";
            $_SESSION['number1'] = random_int(1,10);
            $_SESSION['number2'] = random_int(1,10);
            echo $_SESSION['number1'] . " X " . $_SESSION['number2'] . " = " . '<form action="" method="post"><input type="text" name="reponse"> '. ' <input type="submit" value="valider"></form>';
            var_dump($_SESSION['number1']*$_SESSION['number2']);
        
            if(isset($_POST['reponse'])){
               
                $resultat=$_SESSION['number1']*$_SESSION['number2'];
                if ($_POST["reponse"]==$resultat){
                
                ?>
                        <p>Bravo! Tu as trouvé!</p>
                    <?php
                    }
                else{
                    ?>
                        <p>Mauvaise Réponse!</p>
                    <?php
                    }
            }
        }   
         
        ?>

    </main>
</body>
</html>