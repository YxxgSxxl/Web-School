<?php
require_once "modele/article.php";
require_once "modele/client.php";
require_once "modele/commande.php";

// Affichage de la page d'accès
function login() {
    require "vue/vueLogin.php";
}

function logged($nom, $mdp) {
    if($mdp == MDP) {
        $_SESSION["acces"] = $nom; // Initialisation de la variable de session
        accueil();
    } else {
        login();
    }
}

function quitter() {
    setcookie(session_name(), '', 1, '/');
    session_destroy();
    login();
}

// Affichage de la page d'accueil
function accueil()
{
    require "vue/vueAccueil.php";
}

function clients()
{
    $objClient = new client();
    $clients = $objClient->getClients();
    require "vue/vueClients.php";
}

function commandes()
{
    $objCom = new commande();
    $commandes = $objCom->getCommandes();
    require "vue/vueCommandes.php";
}


function commande($idComm)
{
    $objCom = new commande();
    $objClient = new client();

    $articles = $objCom->getArticlesCommande($idComm);
    $id = $objCom->getIdClientCommande($idComm);
    $client = $objClient->getClient($objCom->getIdClientCommande($idComm));
    $total = $objCom->getTotalCommande($idComm);
    require "vue/vueCommande.php";
}


function articles()
{
    setcookie('page', '?action=articles', time()+3600);
    $objArt = new article();
    $articles = $objArt->getArticles();
    require "vue/vueArticles.php";
}

function articlePhoto($idArt)
{
    $objArt = new article();
    $article = $objArt->getArticle($idArt);
    require "vue/vueArticlePhoto.php";
}

function enregArticlePhoto($idArt)
{
    $objArt = new article();
    $article = $objArt->updateArticlePhoto($idArt);
    articles();
}


function erreur($message)
{
    require "vue/vueErreur.php";
}