<?php
$title = TITREONGLET; // Intégration du titre du site
$header = NOMSITE; // Intégration du nom du site au header
$titre = "Liste des clients du magasin"; // Titre h1 du site
$menu = MENU; // Intégration du header menu

// Affichage des titres de colonnes du tableau
echo '<table>
    <tr>';
        foreach($clients[0] as $cle => $valeur) {
        echo '<th>'.$cle.'</th>';
        }
        echo '</tr>';
    // Affichage des lignes du tableau
    foreach($clients as $ligne) {
    echo '<tr>';
        // Affichage des valeurs d'une ligne
        foreach($ligne as $valeur) {
        echo '<td>'.$valeur.'</td>';
        }
        echo '</tr>';
    }
    echo '
</table>';

$contenu = "";
$footer = "&copy; MMI Mulhouse";
require "gabarit.php";