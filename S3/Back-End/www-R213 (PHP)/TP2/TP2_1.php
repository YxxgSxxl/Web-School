<?php
// TRAITEMENT DU FORMULAIRE

$jour = $_GET['jour'];
$mois = $_GET['mois'];
$annee = $_GET['annee'];

// Le résultat du traitement est enregistré dans $message
  if (!empty($_GET['jour']))
  {
    if (!empty($_GET['mois']))
    {
      if (!empty($_GET['annee']))
      {
        $message = "La date est " . $jour . "/" . $mois . "/" . $anee;
      }
      else
      {
        $message = "Veuillez mettre l'année";
      }
    }
    else
    {
      $message = "Veuillez mettre le mois";
    }
  }
  else
  {
    $message = "Veuillez remplir le formulaire";
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
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <div class="form_elt">
        <label>Jour</label>
        <input type="text" class="texte" name="jour">
      </div>
      <div class="form_elt">
        <label>Mois</label>
        <input type="text" class="texte" name="mois">
      </div>
      <div class="form_elt">
        <label>Année</label>
        <input type="text" class="texte" name="anee">
      </div>
      <button class="valid" name="clic" value="ok">Cliquez ici</button>
    </form>
    <?php echo $message ?>
  </main>
</body>
</html>