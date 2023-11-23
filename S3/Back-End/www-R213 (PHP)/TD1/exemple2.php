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
        $heure = date("d/m/o");  // Stockage de l'heure dans la variable $heure
        echo $heure;              /* Affichage de l'heure */

        echo "<br>";
        echo "<br>";

        $msg = "Today, it is the : ";
        echo $msg;
        echo date('l jS \of F Y h:i:s A');
      ?>
    </div>
  </main>
</body>
</html>