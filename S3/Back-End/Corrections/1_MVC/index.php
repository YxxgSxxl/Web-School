<?php
require "config/config.php";
require "controleur/controleur.php";


if (isset($_GET["action"])) {
    try {

        if ($_GET["action"] == "clients")
            clients(); // Affichage de la liste des clients
        else if ($_GET["action"] == "articles")
            articles();
        else if ($_GET["action"] == "commandes")
            commandes();
        else if ($_GET["action"] == "commande")
            if (!is_numeric($_GET["idComm"])) {
                throw new Exception("Veuillez entrer un nombre valide !");
            } else {
                commande($_GET["idComm"]);
            } else
            throw new Exception("Action non valide");
    } catch (Exception $e) {
        erreur($e->getMessage());
    }
} else // Page d'accueil
    accueil();