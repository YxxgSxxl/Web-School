<?php
$title = TITREONGLET;
$header = NOMSITE;
$titre = "Sélection de la photo de l'article " . $article['Designation'];
$menu = MENU;
$contenu = "";
$footer = "&copy; MMI Mulhouse";
ob_start();
?>

<form method="post" action="index.php?action=enregArticlePhoto&idArt<?=$article["Code"]?>" enctype="multipart/form-data">
<legend><strong>Deposez votre photo ici</strong></legend>
    <div class="form_elt">
        <input type="hidden" name="MAX_FILE_SIZE" value="500000">
        <input type="file" class="texte" name="photoArticle" accept="image/jpeg, image/png">
    </div>
    <input type="submit" class="valid" name="ok" value="Valdier">
</form>
<?php
$contenu = ob_get_clean();
$footer = "&copy; MMI Mulhouse";
require "gabarit.php";