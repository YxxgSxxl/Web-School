<?php
require_once "modele/modele.php";

class client extends database
{
   // Retourne la liste des clients
   function getClients()
   {
      $req = 'SELECT id_client as "N°Clients", nom as "NOM", prenom as "Prénom" FROM client ORDER BY nom';
      $clients = $this->execReq($req);
      return $clients;
   }

   // Retourne les informations d'un client
   public function getClient($idClient)
   {
      $req = 'SELECT * FROM client WHERE id_client=?';
      $resultat = $this->execReqPrep($req, array($idClient));

      if (isset($resultat[0]))
         return $resultat[0];
      else
         return FALSE;
   }
}