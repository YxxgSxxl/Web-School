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
    $reponse = $bdd->query('SELECT id_comm as "N° Commande", nom as "NOM", prenom as "Prénom", date as "Date"   FROM `commande` INNER JOIN `client` ON commande.id_client=client.id_client  ORDER BY nom');
    $commandes = $reponse->fetchAll(PDO::FETCH_ASSOC);
    return $commandes;
}

function getArticlesCommande($idComm)
{
   $bdd = connexionBDD();
   $reponse = $bdd->query('SELECT quantite AS "Quantité", designation AS "Désignation", categorie AS "Catégorie", prix AS "Prix" FROM ligne INNER JOIN article ON ligne.id_article = article.id_article WHERE id_comm = ' . $idComm . '');
   $articlescommande = $reponse->fetchAll(PDO::FETCH_ASSOC);
   return $articlescommande;
}

function getTotalCommande($idComm)
{
    $bdd = connexionBDD();
    $reponse = $bdd->query('SELECT SUM(prix * quantite) AS "Total" FROM article INNER JOIN ligne ON article.id_article = ligne.id_article WHERE id_comm = ' . $idComm . '');
    $total = $reponse->fetch(PDO::FETCH_ASSOC);
    return $total['Total'];
}

function getIdClientCommande($idComm)
{
   $bdd = connexionBDD();
   $reponse = $bdd->query('SELECT id_client FROM commande WHERE id_comm = ' . $idComm);
   $idclient = $reponse->fetch(PDO::FETCH_ASSOC);
   return $idclient['id_client'];
}

// Retourne les informations d'un client
function getClient($idClient)
{
   $bdd = connexionBDD();
   $reponse = $bdd->prepare('SELECT * FROM client WHERE id_client=?');
   $reponse->execute(array($idClient));
   if ($reponse->rowCount() == 1)
      return $reponse->fetch(PDO::FETCH_ASSOC);
   else
      throw new Exception("Aucun client ne correspond à l'identifiant $idClient");
}