<?php
session_start();

require "config/config.php";
require "controleur/controleur.php";

// var_dump($_POST);

if (isset($_SESSION['acces'])) {
    if (isset($_GET["action"])) {
        try {
            if ($_GET["action"] == "clients")
                clients(); // Affichage de la liste des clients
            else if ($_GET["action"] == "articles")
                articles();
            else if ($_GET["action"] == "articlePhoto")
                articlePhoto($_GET["idArt"]);
            else if ($_GET["action"] == "enregArticlePhoto")
                updateArticlePhoto($_GET["idArt"]);
            else if ($_GET["action"] == "commandes")
                commandes();
            else if ($_GET["action"] == "quitter")
                quitter();
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
    } else { // Page d'accueil
        accueil();
    }
} else {
    if(isset($_GET["action"]) && $_GET["action"] == "login") {
        logged($_POST["nom"], $_POST["mdp"]);   // Verification du login
    } else {
        login();
    }
}