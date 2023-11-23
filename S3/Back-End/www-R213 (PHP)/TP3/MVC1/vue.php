<?php
$titre = "<h3>Liste des clients</h3>";

$resultat = "<table>";
// Affichage des titres de colonnes
$resultat .= "<tr>";
foreach($client[0] as $cle => $valeur)
{
  $resultat .= "<th>$cle</th>";
}
$resultat .= "</tr>";

// Affichage du contenu du tableau
for($i=0; $i<count($client); $i++)
{
  $resultat .= "<tr>";
  foreach($client[$i] as $valeur)
  {
    $resultat .= "<td>$valeur</td>";
  }
  $resultat .= "</tr>";
}
$resultat .= "</table>";
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
    <div class="resultat">
      <?= $titre ?>
      <?= $resultat ?>
    </div>
  </main>
</body>
</html>