<?php
require_once "modele/modele.php";
class article extends database
{
   /*******************************************************
   Retourne la liste des articles
   Entrée :


   Retour :
   [array] : Tableau associatif contenant la liste des articles
   *******************************************************/
   public function getArticles()
   {
      $req = 'SELECT id_article AS "Code", designation AS "Designation", categorie AS
      "Catégorie", prix AS "Prix" FROM article ORDER BY categorie;';

      $articles = $this->execReq($req);
      return $articles;
   }

   /*******************************************************
   Retourne la liste des articles
   Entrée :
   idArt [string] : Identifiant de l'article pour lequel on veut avoir la description

   Retour :
   [array] : Tableau associatif contenant les attrivuts de l'article
   *******************************************************/
  public function getArticle($idArt)
  {
     $req = 'SELECT id_article AS "Code", designation AS "Designation", categorie AS
     "Catégorie", prix AS "Prix" FROM article WHERE id_article=?;';

     $article = $this->execReqPrep($req, array($idArt));
     return $article[0];
  }

     /*******************************************************
   Retourne la liste des articles
   Entrée :
   idArt [string] : Identifiant de l'article
   _FILES [array] : Tableau contenant les informations de l'image téléchargée

   Retour :
   *******************************************************/
  public function updateArticlePhoto($idArt)
  {
     $req = 'SELECT id_article AS "Code", designation AS "Designation", categorie AS
     "Catégorie", prix AS "Prix" FROM article WHERE id_article=?;';

     $article = $this->execReqPrep($req, array($idArt));
     return $article[0];
  }
}

