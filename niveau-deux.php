<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niveau 2</title>
</head>
<body>
    <form action="">
        <select name="quelle-table" id="quelle-table">
            <option value="un" id="un">1</option>
            <option value="deux" id="deux">2</option>
            <option value="trois" id="trois">3</option>
            <option value="quatre" id="quatre">4</option>
            <option value="cinq" id="cinq">5</option>
            <option value="six" id="six">6</option>
            <option value="sept" id="sept">7</option>
            <option value="huit" id="huit">8</option>
            <option value="neuf" id="neuf">9</option>
            <option value="dix"id="dix">10</option>
        </select>
    </form>
    <?php $multiplicande = select;
    for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++)
    {
        echo $multiplicande' x '.$multiplicateur.' = '.$multiplicande*$multiplicateur.'<br>';
    }
    ?>
</body>
</html>