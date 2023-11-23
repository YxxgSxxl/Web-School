<?php
// TRAITEMENT DU FORMULAIRE
// Initialisation des variables pour le formulaire prérempli
if(!empty($_POST["prenom"]))
  $prenom = $_POST["prenom"];
else
  $prenom = '';

if(!empty($_POST["nom"]))
  $nom = $_POST["nom"];
else
  $nom = '';

// Le résultat du traitement est enregistré dans $message
  if (!empty($prenom) && !empty($nom))
    $message = "Bonjour " . $prenom . " " . $nom;
  else
    $message = "Veuillez indiquer un nom et un prénom";
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
      <div class="form_elt">
        <label>Nom</label>
        <input type="text" class="texte" name="nom" value="<?= $nom ?>">
      </div>
      <div class="form_elt">
        <label>Prénom</label>
        <input type="text" class="texte" name="prenom" value="<?= $prenom ?>">
      </div>
      <button class="valid" name="clic" value="ok">Cliquez ici</button>
    </form>
    <?= $message ?>
  </main>
</body>
</html>