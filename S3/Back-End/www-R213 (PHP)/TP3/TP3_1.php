<?php
require "client.php";

$titre = "<h3>Liste des clients</h3>";
$resultat = "<table>";
$resultat .= "<tr>";
foreach ($client[0] as $cle => $valeur)
{
  $resultat .= "<th>" . $cle . "</th>";
}
$resultat .= "</tr>";


for ($i = 1; $i < count($client); $i++) {
  $resultat .= "<tr>";
  foreach ($client[$i] as $cle => $valeur)
  {
    $resultat .= "<td>" . $valeur . "</td>";
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