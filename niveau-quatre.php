<?php session_start(); //pour que les *_SESSION marchent. le $_SESSION permet de terenir des infos ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Suez+One&display=swap" rel="stylesheet">
    <title>Multiplication - Niveau 4</title>
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
    <!--mode révision : l'utilisateur choisit une table de multiplication et doit répondre à une multiplication tirée au hasard dans la table sélectionnée. 
    
    En cas de doute utiliser var_dump pour écouter les variables et savoir ce qu'elles contiennent (un peu comme console.log)-->
    <main>
        <header>
            <h2 class="titre-page">Choisis une table à réviser</h2>
            <p>Sélectionne le chiffre de la table que tu veux réviser et trouve la réponse à la multiplication qui va apparaitre</p>
        </header>
        <form method="post" name="table_de_multiplication" action="">
            <select name="choix">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="submit" name="valider" value="OK"/>
        </form>
        <p>Combien font... </p>
        <?php
       
        if(isset($_POST['choix'])){ //lis les formulaires
            $_SESSION['multiplicande'] = $_POST['choix']; //récupération du choix du formulaire pour en faire le multiplicande
            $_SESSION['random-num']=random_int(0,10); // random pour avoir un multiplicateur
            echo $_SESSION['multiplicande'] . " x " . $_SESSION['random-num'] . " = " . "?"; //question
        
        ?>
        <form action="" method="post">
        
            <input type="text" name="reponse"> <!-- réponse utilisateur-->
            <input type="submit" value="valider">
        </form>
        <?php
        }
            if(isset($_POST['reponse'])){
                
                $resultat=$_SESSION['multiplicande']*$_SESSION['random-num'];
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
              
        ?>
    </main>
</body>
</html>