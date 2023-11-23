<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link href="/styles/style.css" rel="stylesheet">
  <title>PHP</title>
</head>

<body>
  <header>
    <h1>PHP</h1>
  </header>

  <main class="resultat">
    <?php
    if (isset($_GET['prenom']))
    {
      echo "Bonjour " . $_GET['prenom'];        // Affichage du prénom
    }
    else
    {
      echo "Veuillez indiquer un prénom dans l'URL en ajoutant un prénom comme ceci : \"?prenom= Mettez un Prénom ici\"";
    }
    ?>
  </main>
</body>
</html>
