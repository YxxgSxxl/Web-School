<?php
// TRAITEMENT DU FORMULAIRE
// Le résultat du traitement est enregistré dans $message
  if (!empty($_GET['prenom']))
  {
    $message = "Bonjour " . $_GET['prenom'];
  }
  else
  {
    $message = "Veuillez indiquer un prénom";
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
        <label>Prénom</label>
        <input type="text" class="texte" name="prenom" placeholder="Indiquez votre prénom">
      </div>
      <button class="valid" name="clic" value="ok">Cliquez ici</button>
    </form>
    <?php echo $message ?>
  </main>
</body>
</html>
