<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>
        <?= $title ?>
    </title>
    <link href="style/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <div><a href="index.php">
                <h1>WebShop</h1>
            </a></div>
        <div class="menu"></div>
    </header>
    <main>
        <h2>
            <?= $titre ?>
        </h2>
        <form method="post" action="<?= $_SERVER["PHP_SELF"] . "?action=login" ?>">
            <div class="form_elt">
                <label>
                    <span>Nom</span>
                    <input type="text" class="texte" name="nom" placeholder="Indiquez votre nom">
                </label>
            </div>
            <div class="form_elt">
                <label>
                <span>Mot de passe</span>
                    <input type="password" class="texte" name="mdp" value="" placeholder="Indiquez votre mdp">
                </label>
            </div>
            <input type="submit" class="valid" name="ok" value="Valider">
        </form>
        <?= var_dump($_SERVER["PHP_SELF"]) ?>
        <!-- <?= $contenu ?> -->
    </main>
    <footer>
        <?= $footer ?>
    </footer>
</body>

</html>