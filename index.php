<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Suez+One&display=swap" rel="stylesheet">
    <title>Multiplication</title>
    <link rel="stylesheet" href="style.scss">
</head>
<body>
    <header>
        <h1 class="multiplication">Multiplication</h1>
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
        <div>
            <h2 class="titre-page">Révisons un peu nos tables de multiplication !</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quos iste consectetur beatae quis cum obcaecati quo, molestiae repellat aliquam, nobis recusandae eligendi, nesciunt nam optio laudantium amet minima. Voluptates!</p>
        </div>
        <div>
            <div class="bg-y-arrow"></div>
            <div class="table-de-multiplication">
                
                    <?php
                    $trois=3;
                    Echo '<h3>Table de 3</h3><p>';
                    for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++)
                    {
                        echo $trois.' x '.$multiplicateur.' = '.$trois*$multiplicateur.'<br>';
                    }    
                    ?>
                </p>
            </div>
        </div>
    </main>
</body>
</html>