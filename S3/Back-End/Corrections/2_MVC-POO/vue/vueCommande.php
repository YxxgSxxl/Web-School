<?php

    $title = TITREONGLET;
    $header = NOMSITE;
    $titre = "Commande n°$idComm";
    $menu = MENU;
    ob_start();

    if (isset($_GET['idComm'])){
    ?>

        <div class="titreCommande">Client :</div>
        <p class="resultat"><?= $client['nom'].' '.$client['prenom'] ?></p>
        <p class="resultat"><?= $client['adresse']?></p>
        <p class="resultat"><?= $client['ville'] ?></p>
        
        <div class="titreCommande">Articles :</div>

        <table><tr>
            <?php
            foreach($articles[0] as $table => $valeur){
                echo '<th>'.$table.'</th>';
            }
            foreach($articles as $ligne) {
                echo '<tr>';
                //affichage des valeurs d'une ligne
                foreach($ligne as $valeur){
                    echo '<td>'.$valeur.'</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
            ?>
            <div class="titreCommande">Total : <?=$total?>€</div>
            <?php
            echo '<a class="action" href="?action=commandes">Retour</a>';


    }

    


    $contenu = ob_get_clean();


    $footer = "&copy; MMI Mulhouse";
    require "gabarit.php";
?>

