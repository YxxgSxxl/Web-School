<?php
// TRAITEMENT DU FORMULAIRE
// Initialisation des variables pour le formulaire prérempli
$titre = "<h3>Inscription parcours MMI</h3>";
$message = "Veuillez completer le formulaire";

if(isset($_POST["prenom"]))
  $prenom = $_POST["prenom"];
else
  $prenom = '';

if(isset($_POST["nom"]))
  $nom = $_POST["nom"];
else
  $nom = '';

if(isset($_POST["civile"]))
  $civile = $_POST["civile"];
else
  $civile = '';

// Le résultat du traitement est enregistré dans $message

// Première méthode //
// if (isset($_POST["clic"]))
// {
//   $message = "<div class='highlight'> Bonjour " . $civile . " " . $prenom . " " . $nom . "</div>";

//       if (!empty($prenom) && !empty($nom) && !empty($civile)) {
//           if (!empty($prenom) && !empty($nom) && !empty($civile)) {
//       } else {
//           $erreur = "Veuillez indiquer la civilité";
//           $erreur .= "<br>Veuillez indiquer un nom et un prénom";
//       }
//   }
//   else {
//       $erreur = "Veuillez indiquer une civilité";
//   }
// }
// else
//   $message = "Veuillez completer le formulaire";

  if (isset($_POST["clic"]))
  {
    $message = "";
    $erreur = "";

    if (!empty($civile))
        $message= "Bonjour $civile ";
    else
        $erreur .= "Veuillez indiquer une civilité<br>";

    if (!empty($prenom) && !empty($nom))
        $message .= $prenom . " " . $nom;
    else
        $erreur .= "Veuillez indiquer un nom et un prénom<br>";
  }
  else
    $message = "Veuillez completer le formulaire";
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
  <?= $titre ?>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form_elt">
        <label>Nom</label>
        <input type="text" class="texte" name="nom" value="<?= $nom ?>">
      </div>
      <div class="form_elt">
        <label>Prénom</label>
        <input type="text" class="texte" name="prenom" value="<?= $prenom ?>">
      </div>
      <div class="form_elt">
        <label>Civilité</label>
        <label><input type="radio" name="civile" value="M.">M.</label>
        <label><input type="radio" name="civile" value="Mme.">Mme.</label>
      </div>
      <button class="valid" name="clic" value="ok">Cliquez ici</button>
    </form>
    <?php
    if (empty($erreur))
        echo $message;
    else
        echo "<div class='erreur'>$erreur</div>";
    ?>
  </main>
</body>
</html>