<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
    <?= 'Identifiant de session :' .session_id() ?>

    <p>
        Contenu des variables de session :
        <?php 
            var_dump($_SESSION);
        ?>
    </p>

    <a href="page1.php">Vers la page 1</a><br><br>
    <a href="page2.php">Vers la page 2</a><br><br>
    <a href="page4.php">Vers la page 4</a>
    
</body>
</html>