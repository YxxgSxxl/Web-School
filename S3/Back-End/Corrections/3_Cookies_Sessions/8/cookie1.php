<?php
  setcookie('prenom', 'Rémi', time()+3600);
  setcookie('pays', 'France', time()+365*24*3600);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Cookie</title>
</head>
<body>
  <p>
    Bonjour 
    <a href="cookie2.php">lien vers la page suivante</a>
  </p>
</body>
</html>