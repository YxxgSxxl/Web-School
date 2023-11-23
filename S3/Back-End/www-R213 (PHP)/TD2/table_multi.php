<?php
// TRAITEMENT DU FORMULAIRE
// Initialisation des messages
$titre = "";
$message = "";
$erreur = "";

// Initialisation de la variable pour le formulaire prérempli
if(isset($_POST["nombre"]) && $_POST["nombre"] != "")
  $nombre = $_POST["nombre"];
else
  $nombre = '';

// Le résultat du traitement est enregistré dans $message
if($nombre != "")
{
  if (is_numeric($nombre) && $nombre > 0)
  {
    $titre = "<h3>Table de $nombre</h3>";
    $message = "<table>";
    for($i=1; $i<=10; $i++)
    {
      $message .= "<tr><td>$i x $nombre</td><td>". $i * $nombre . "</td></tr>";
    }
    $message .= "</table>";
  }
  else
    $erreur = "Veuillez indiquer une valeur positive";
}
else
  $message = "Veuillez indiquer un nombre";
?>

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
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <label class="form_elt">
        <span>Table de </span>
        <input type="text" class="texte" name="nombre" value="<?= $nombre ?>">
      </label>
      <button class="valid" name="clic" value="ok">Cliquez ici</button>
    </form>
    <div class="resultat">
      <?= $titre ?>
      <?= $message ?>
      <?php
        if ($erreur)
          echo "<div class = 'erreur'>$erreur</div>";
      ?>
    </div>
  </main>
</body>
</html>
