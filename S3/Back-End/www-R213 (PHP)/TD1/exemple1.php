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
    <div>
      <?php
        $sec = time();    // La variable $sec est initialisée avec le timestamp
        echo "Nombre de secondes écoulées depuis le 1er janvier 1970 :  $sec !";        // Affichage du nombre de secondes //

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        
        echo "Nombre de secondes écoulées depuis le 1er janvier 1970 : ";
        $sec = time();
        echo $sec;
        echo " !";
      ?>
    </div>
  </main>
</body>
</html>
