<?php
require "./config/config.php";
require "./controller/controleur.php";

if (isset($_GET["action"])) {
    if($_GET["action"] == "clients") {
        clients();
    }
    else if ($_GET["action"] == "articles") {
        articles();
    }
    else if ($_GET["action"] == "commandes") {
        commandes();
    }
} else {
    accueil();
}