<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Suez+One&display=swap" rel="stylesheet">
    <title>Multiplication - Niveau 3</title>
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
    <main class="container">
        <div class="window-box">
            <header>
                <h2 class="titre-page">Révises plusieurs tables d'un coup</h2>
                <p>Ici tu peux afficher une ou plusieurs tables de ton choix</p>
            </header>
            
            <form method="POST" action="">
                <div class="flex-form">
                    <div>
                        <input type="checkbox" name="chiffre[]" value="1"> Table de 1<br>
                        <input type="checkbox" name="chiffre[]" value="2"> Table de 2<br>
                        <input type="checkbox" name="chiffre[]" value="3"> Table de 3<br>
                        <input type="checkbox" name="chiffre[]" value="4"> Table de 4<br>
                        <input type="checkbox" name="chiffre[]" value="5"> Table de 5<br>
                    </div>
                    <div>
                        <input type="checkbox" name="chiffre[]" value="6"> Table de 6<br>
                        <input type="checkbox" name="chiffre[]" value="7"> Table de 7<br>
                        <input type="checkbox" name="chiffre[]" value="8"> Table de 8<br>
                        <input type="checkbox" name="chiffre[]" value="9"> Table de 9<br>
                        <input type="checkbox" name="chiffre[]" value="10"> Table de 10<br>
                    </div>
                </div>
                <input type="submit" name="bouton" value="Afficher" class="afficher">
            </form>
        </div>
        <div  class="table-box flex-tables">  
            <?php
            if(isset($_POST["chiffre"])){
                for($i=0; $i < count($_POST["chiffre"]);$i++){?>
                    
                        <h3>Table de <?php echo$_POST["chiffre"][$i]; ?></h3>
                        <p><?php
                    for ($j=0; $j<11; $j++){
                        echo$_POST["chiffre"][$i] . "x" .$j. " = ". ($_POST["chiffre"][$i]*$j). "<br/>";
                    }
                    
                }
            }    
            ?> </p>
        </div>    
    </main>
    <script src="app.js"></script>
</body>
</html>