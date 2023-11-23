<?php
// TRAITEMENT DU FORMULAIRE
// Le résultat du traitement est enregistré dans $message
  if (!empty($_GET['prenom']))
  {
    if (!empty($_GET['nom']))
    {
      $message = "Bonjour " . $_GET['prenom'] . " " . $_GET['nom'];
    }
    else
    {
      $message = "Veuillez mettre un nom.";
    }
  }
  else
  {
    $message = "Veuillez indiquer un prénom aussi.";
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
        <label>Nom</label>
        <input type="text" class="texte" name="nom" placeholder="Indiquez votre nom">
      </div>
      <div class="form_elt">
        <label>Prénom</label>
        <input type="text" class="texte" name="prenom" placeholder="Indiquez votre prénom">
      </div>
      <button class="valid" name="clic" value="ok">Cliquez ici</button>
    </form>
    <?php echo $message ?>
  </main>
</body>
</html>