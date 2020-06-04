<?php session_start(); //pour que les *_SESSION marchent. le $_SESSION permet de retenir des infos ?>
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
        <div>
            <h3>Question 1</h3>
            <?php
                $_SESSION['number1a'] = random_int(1,10);
                $_SESSION['number1b'] = random_int(1,10);
                $_SESSION['question1'] = $_SESSION['number1a']*$_SESSION['number1b'];
        
            ?>
            <p><?php echo $_SESSION['number1a']; ?> x <?php echo $_SESSION['number1b']; ?> = </p>
            <form action="" method="post"><input type="text" name="reponse1"></form>
            <?php var_dump($_SESSION['number1a']*$_SESSION['number1b']);
               
            ?>
        </div>
        <div>
            <h3>Question 2</h3>
            <?php
                $_SESSION['number2a'] = random_int(1,10);
                $_SESSION['number2b'] = random_int(1,10);
                $_SESSION['question2'] = $_SESSION['number2a']*$_SESSION['number2b'];
                
            ?>
            <p><?php echo $_SESSION['number2a']; ?> x <?php echo $_SESSION['number2b']; ?> = </p>
            <form action="" method="post">
                <input type="text" name="reponse2">
            </form>
            <?php var_dump($_SESSION['number2a']*$_SESSION['number2b']); ?>
        </div>
        <form action="" method="post">
            <input type="hidden" name="reponse1">
            <input type="hidden" name="reponse2">
            <input type="submit" value="valider mes réponses" name="validation">
        </form>
        <?php 
        if(isset($_POST['validation'])|| isset($_POST['reponse1'])|| isset($_POST['reponse2'])){
            $_SESSION['reponse-1']=$_POST['reponse1'];
            $_SESSION['reponse-2']=$_POST['reponse2'];
            $score=0;
            echo '<h3>Question 1 : </h3>';
            if ($_SESSION['reponse-1']==$_SESSION['question1']){
                echo "bien joué";
                $score++;
            }
            else{
                echo "raté";
             }
            
            echo '<h3>Question 2 : </h3>';
            if ($_POST['reponse2']==$_SESSION['question2']){
                echo "bien joué";
                $score++;
            }
            else{
                echo "raté";
            }
            echo "<p>votre score est de : " . $score . " sur 5</p>";
            
        }

        ?>

    </main>
</body>
</html>