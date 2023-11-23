<?php
// TRAITEMENT DU FORMULAIRE
// Initialisation des variables pour le formulaire prérempli
$titre = "<h3>Inscription parcours MMI</h3>";
$message = "Veuillez completer le formulaire";

if (isset($_POST["prenom"]))
    $prenom = $_POST["prenom"];
else
    $prenom = '';

if (isset($_POST["nom"]))
    $nom = $_POST["nom"];
else
    $nom = '';

if (isset($_POST["civile"]))
    $civile = $_POST["civile"];
else
    $civile = '';

if (isset($_POST["parcours"]))
    $parcours = $_POST["parcours"];
else
    $parcours = '';

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

if (isset($_POST["clic"])) {
    $message = "";
    $erreur = "";

    if (!empty($civile))
        $message = "Bonjour $civile ";
    else
        $erreur .= "Veuillez indiquer une civilité<br>";

    if (!empty($prenom) && !empty($nom))
        $message .= $prenom . " " . $nom . "<br>";
    else
        $erreur .= "Veuillez indiquer un nom et un prénom<br>";

    if (!empty($parcours)) {
        $message .= "Vous avez choisi le parcours :<br>";
        $message .= "<div class = 'data'>$parcours</div>";
    } else
        $erreur .= "Veuillez indiquer un parcours";
} else
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
                <label>
                    <input type="radio" name="civile" value="M" <?php if (isset($_POST["civil"]) && $_POST["civil"] == "Mme")
                        echo "checked";
                    ?>>
                    M.</label>
                <label>
                    <input type="radio" name="civile" value="Mme" <?php if (isset($_POST["civil"]) && $_POST["civil"] == "Mme")
                        echo "checked";
                    ?>>
                Mme.</label>
            </div>
            <div class="form_elt">
                <label> Parcours MMI </label>
                <select name="parcours">
                    <option value=""></option>
                    <option value="Création Numérique" <?php if (isset($_POST["parcours"]) && $_POST["parcours"] == "Création Numérique")
                        echo "selected";
                    ?>>Créa</option>
                    <option value="Stratégie Com" <?php if (isset($_POST["parcours"]) && $_POST["parcours"] == "Stratégie Com")
                        echo "selected";
                    ?>>Strat-UX</option>
                    <option value="Developpement Web" <?php if (isset($_POST["parcours"]) && $_POST["parcours"] == "Developpement Web")
                        echo "selected";
                    ?>>DWeb</option>
                </select>
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