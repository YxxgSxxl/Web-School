<?php
// TRAITEMENT DU FORMULAIRE
// Initialisation du message
$message = "";
$age = "";

// Initialisation de la variable pour le formulaire prérempli
if(!empty($_POST["age"]))
  $age = $_POST["age"];
else
  $age = '';

// Le résultat du traitement est enregistré dans $message
if ($age != "")
{
  if(is_numeric($age) && $age > 0)
  {
    if ($age >= 18)
      $message = "Vous êtes majeur";
    else
      $message = "Vous êtes mineur";
  }
  else
    $message = "Veuillez indiquer une valeur positive";
}
else
  $message = "Veuillez indiquer votre age";
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
        <span>Quel votre âge</span>
        <input type="text" class="texte" name="age" value="<?= $age ?>">
      </label>
      <button class="valid" name="clic" value="ok">Cliquez ici</button>
    </form>
    <div class="resultat">
      <?= $message ?>
    </div>
  </main>
</body>
</html>
