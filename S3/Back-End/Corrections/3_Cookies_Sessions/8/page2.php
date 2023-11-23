<?php
session_start();

$_SESSION['pays']="Seychelles";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Page 2</title>
</head>
<body>
<?= 'Identifiant de session :'.session_id() ?>
<p>
Re-bonjour <?= $_SESSION['prenom'].' '.$_SESSION['nom'] ?><br>
Vous avez : <?= $_SESSION['age'] ?> ans.<br>
Vous venez des <?= $_SESSION['pays'] ?>
</p>
<a href="page1.php">Lien pour la page 1</a><br><br>
<a href="page3.php">Lien pour la page 3</a>
</body>
</html>