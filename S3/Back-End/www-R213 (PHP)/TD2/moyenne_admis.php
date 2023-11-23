<?php
// TRAITEMENT DU FORMULAIRE
// Initialisation du message
$message = "";
$moyenne = "";

// Initialisation de la variable pour le formulaire prérempli
if(!empty($_POST["moyenne"]))
  $moyenne = $_POST["moyenne"];
else
  $moyenne = '';

// Le résultat du traitement est enregistré dans $messmoyenne
if ($moyenne != "")
{
  if(is_numeric($moyenne) && $moyenne > 0)
  {
    if ($moyenne >= 10)
      $message = "Vous êtes admis";
    else if ($moyenne >= 8)
      $message = "Passez le rattrapage";
    else
      $message = "Vous êtes ajourné";
  }
  else
    $message = "Veuillez indiquer une valeur entre 0 et 20";
}
else
  $message = "Veuillez indiquer votre moyenne";
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
        <span>Quel votre moyenne</span>
        <input type="text" class="texte" name="moyenne" value="<?= $moyenne ?>">
      </label>
      <button class="valid" name="clic" value="ok">Cliquez ici</button>
    </form>
    <div class="resultat">
      <?= $message ?>
    </div>
  </main>
</body>
</html>
