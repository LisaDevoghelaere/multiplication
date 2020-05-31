<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
</head>
<body>
    <!--Page 1 - Afficher la table de multiplication de 3-->
    <main>
        <?php
        $trois=3;
        Echo 'Table de multiplication de 3<br>';
        for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++)
        {
            echo $trois.' x '.$multiplicateur.' = '.$trois*$multiplicateur.'<br>';
        }
    
        ?>
    </main>
    <!--Penser à créer un menu pour naviguer de page en page !!!!-->
</body>
</html>