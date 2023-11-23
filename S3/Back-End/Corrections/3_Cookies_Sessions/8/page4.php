<?php
session_start();

setcookie(session_name(), '', 1, '/');

session_destroy();
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

    <a href="page1.php">Vers la page 1</a><br><br>
    
</body>
</html>