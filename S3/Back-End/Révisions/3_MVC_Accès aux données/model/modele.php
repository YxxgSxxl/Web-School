<?php
// Connexion à la base de donnée
function connexionBDD()
{
    try { // Connexion
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $base = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPWD, $options);
    } catch (Exception $err) { // Erreurs
        throw new Exception("Connexion à la BDD"); // .$err->getMessage());
    }
    return $base;
}

// Retourne la liste des clients
function getClients()
{
    $bdd = connexionBDD();
    $reponse = $bdd->query('SELECT id_client, nom, prenom FROM client');
    $clients = $reponse->fetchAll(PDO::FETCH_ASSOC);
    return $clients;
}

function getArticles()
{
    $bdd = connexionBDD();
    $reponse = $bdd->query('SELECT * FROM article');
    $articles = $reponse->fetchAll(PDO::FETCH_ASSOC);
    return $articles;
}

function getCommandes()
{
    $bdd = connexionBDD();
    $reponse = $bdd->query('SELECT * FROM commande');
    $commandes = $reponse->fetchAll(PDO::FETCH_ASSOC);
    return $commandes;
}