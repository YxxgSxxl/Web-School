<?php
if (isset($_COOKIE['compteur'])) {
    setcookie('compteur', ++$_COOKIE['compteur'], time()+(3600));
} else {
    setcookie('compteur', 1, time()+(365*24*3600));
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Cookie</title>
</head>
<body>
  <?php
  if (!isset($_COOKIE['compteur'])) {
    echo "<p>Bonjour, merci pour votre première visite !<br></p>";
  } else {
    echo "<p>Bonjour, merci pour votre " . $_COOKIE['compteur'] . "ème visite !<br></p>";
  }
  ?>
</body>
</html>