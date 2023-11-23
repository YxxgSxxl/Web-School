<?php
// Initialisation des messages
$titre = "";
$message = "";

// Mise en forme des données
if ($liste != "")
{
  $titre = `<h3>Liste des $liste</h3>";

  $resultat = "<table>";
  // Affichage des titres de colonnes
  $resultat .= "<tr>";
  foreach($table[0] as $cle => $valeur)
  {
    $resultat .= "<th>$cle</th>";
  }
  $resultat .= "</tr>";

  // Affichage du contenu du tableau
  for($i=0; $i<count($table); $i++)
  {
    $resultat .= "<tr>";
    foreach($table[$i] as $valeur)
    {
      $resultat .= "<td>$valeur</td>";
    }
    $resultat .= "</tr>";
  }
  $resultat .= "</table>";
}
else
  $resultat = "Veuillez choisir une liste";
}
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
        <span>Liste des clients</span>
        <input type="radio" name="liste" value="clients">
      </label>
      <label class="form_elt">
        <span>Liste des articles</span>
        <input type="radio" name="liste" value="articles">
      </label>
      <button class="valid" name="clic" value="ok">Cliquez ici</button>
    </form>
    <div class="resultat">
      <?= $titre ?>
      <?= $resultat ?>
    </div>
  </main>
</body>
</html>