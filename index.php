<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Suez+One&display=swap" rel="stylesheet">
    <title>Multiplication</title>
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
        <div class="partage">
            <header>
                <h2 class="titre-page">Révisons un peu nos tables de multiplication !</h2>
                <p class="intro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quos iste consectetur beatae quis cum obcaecati quo, molestiae repellat aliquam, nobis recusandae eligendi, nesciunt nam optio laudantium amet minima. Voluptates!</p>
            </header>
            <div>
                <div class="bg-y-arrow "></div>
                <div class="table-de-trois">                
                       <a href="niveau-deux.php">
                            <?php
                            $trois=3;
                            Echo '<h3>Table de 3</h3><p>';
                            for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++)
                            {
                                echo $trois.' x '.$multiplicateur.' = '.$trois*$multiplicateur.'<br>';
                            }    
                            ?>
                       </a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <script src="app.js"></script>
</body>
</html>