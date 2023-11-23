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
      if (isset($_GET['nom']))
      {      
        echo "Bonjour " . $_GET['prenom'] . " " . $_GET['nom'];        // Affichage du prénom et du nom
      }
      else
      {
        echo "Veuillez à aussi indiquer un nom dans l'URL.";
      }
    }
    else
    {
      echo "Veuillez indiquer un prénom dans l'URL en ajoutant un prénom comme ceci : \"?prenom= Mettez un Prénom ici\"";
    }
    ?>
  </main>
</body>
</html>
