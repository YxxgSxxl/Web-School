<?php
// Initialisation des variables
$message = "Bonjour !";
$date = date("d/m/Y");
$nomServeur = $_SERVER["SERVER_NAME"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link href="/styles/style.css" rel="stylesheet">
  <title><?php echo $message; ?></title>
</head>

<body>
  <header>
    <h1>PHP</h1>
  </header>

  <main class="resultat">
    <div>
      <?php echo $message; ?>
      <br>
      Nous sommes le : <?php echo $date; ?>
      <br>
      <strong class="code">
        Il est très exactement, sur le serveur : <?php echo date("H:i:s"); ?>
      </strong>
      <br>
      Nom du serveur : <?php echo $nomServeur; ?>
    </div>
  </main>
</body>
</html>