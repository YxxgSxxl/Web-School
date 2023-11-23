<?php
session_start();
$_SESSION['prenom']='Luc';
$_SESSION['nom']='Dupond';
$_SESSION['age']=25;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Page 1</title>
</head>
<body>
<?= 'Identifiant de session : '.session_id() ?>
<p>
Bonjour <?= $_SESSION['prenom'] ?><br>
Vous venez des <?php if (isset($_SESSION['pays'])) echo $_SESSION['pays']?>
</p><br>

<a href="page2.php" title="Lien vers page2.php">Lien vers page2</a>

<?php
$agent = $_SERVER["HTTP_USER_AGENT"];

if( preg_match('/MSIE (\d+\.\d+);/', $agent) ) {
  echo "<br><br>You're using Internet Explorer";
} else if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $agent) ) {
  echo "<br><br>You're using Chrome";
} else if (preg_match('/Edge\/\d+/', $agent) ) {
  echo "<br><br>You're using Edge";
} else if ( preg_match('/Firefox[\/\s](\d+\.\d+)/', $agent) ) {
  echo "<br><br>You're using Firefox";
} else if ( preg_match('/OPR[\/\s](\d+\.\d+)/', $agent) ) {
  echo "<br><br>You're using Opera";
} else if (preg_match('/Safari[\/\s](\d+\.\d+)/', $agent) ) {
  echo "<br><br>You're using Safari";
}
?>
</body>
</html>