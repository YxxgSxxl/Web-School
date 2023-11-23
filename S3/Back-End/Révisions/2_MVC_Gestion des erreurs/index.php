<?php
require "./config/config.php";
require "./controller/controleur.php";

if (isset($_GET["action"])) {
    try {
        if($_GET["action"] == "clients") {
            clients();
        }
        else if ($_GET["action"] == "articles") {
            articles();
        }
        else if ($_GET["action"] == "commandes") {
            commandes();
        } else {
            throw new Exception("Action non valide");
        }
    } catch (Exception $e) {
        erreur($e->getMessage());
    }
} else {
    accueil();
}