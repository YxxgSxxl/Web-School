<?php
require_once "modele/modele.php";

class commande extends database
{
   /*******************************************************
Retourne la liste des commandes
Entrée :
Retour :
[array] : Tableau associatif contenant la liste des articles
*******************************************************/
   // Retourne la liste des commandes
   public function getCommandes()
   {
      $req = 'SELECT id_comm as "N° Commande", nom as "NOM", prenom as "Prénom", date as "Date"   FROM `commande` INNER JOIN `client` ON commande.id_client=client.id_client  ORDER BY nom';
      $commande = $this->execReq($req);
      return $commande;
   }

   public function getTotalCommande($idComm)
   {
      $req = 'SELECT SUM(prix * quantite) AS "Total"  FROM ligne INNER JOIN article ON ligne.id_article = article.id_article WHERE id_comm = ?;';
      $resultat = $this->execReqPrep($req, array($idComm));

      if (isset($resultat[0]))
         return $resultat[0]['Total'];
      else
         return FALSE;
   }

   public function getIdClientCommande($idComm)
   {
      // $bdd = connexionBDD();
      // $reponse = $bdd->query('SELECT id_client FROM commande WHERE id_comm = ' . $idComm);
      // $idclient = $reponse->fetch(PDO::FETCH_ASSOC);
      // return $idclient['id_client'];

      $req = 'SELECT id_client FROM commande WHERE id_comm = ?;';
      $resultat = $this->execReqPrep($req, array($idComm));

      if (isset($resultat[0]["id_client"]))
         return $resultat[0]["id_client"];
      else
         return FALSE;
   }

   public function getArticlesCommande($idComm)
   {
      // $bdd = connexionBDD();
      // $reponse = $bdd->query('SELECT quantite AS "Quantité", designation AS "Désignation", categorie AS "Catégorie", prix AS "Prix" FROM ligne INNER JOIN article ON ligne.id_article = article.id_article WHERE id_comm = ' . $idComm . '');
      // $articlescommande = $reponse->fetchAll(PDO::FETCH_ASSOC);
      // return $articlescommande;

      $req = 'SELECT quantite AS "Quantité", designation AS "Désignation", categorie AS "Catégorie", prix AS "Prix" FROM ligne INNER JOIN article ON ligne.id_article = article.id_article WHERE id_comm = ?;';
      $articles = $this->execReqPrep($req, array($idComm));
      return $articles;

      // if (isset($resultat[0]))
      //    return $resultat[0];
      // else
      //    return FALSE;
   }
}