<?php
// TRAITEMENT DU FORMULAIRE
// Initialisation du message
$titre = "";
$message = "";

// Initialisation de la variable pour le formulaire prérempli
if(!empty($_POST["liste"]))
  $liste = $_POST["liste"];
else
  $liste = '';

// Le résultat du traitement est enregistré dans $message
if ($liste != "")
{
    $titre = "<h3>Liste des $liste</h3>";
}
else
{
    $message = "Veuillez indiquer une liste";
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
            <?= $message ?>
        </div>
    </main>
</body>

</html>