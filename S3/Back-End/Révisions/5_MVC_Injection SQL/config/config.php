<?php
// Déinition des constantes et paramètres du site
define("TITREONGLET", "Magasin"); // Titre de l'onglet
define("NOMSITE", "WEB SHOP"); // Titre affiché dans le header

// Header menu
define("MENU", "<a class='lien' href='index.php?action=clients'>Clients</a>
<a class='lien' href='index.php?action=articles'>Articles</a>
<a class='lien' href='index.php?action=commandes'>Commandes</a>");

// Connexion BDD
define("DBHOST", "localhost"); // hôte de la BDD mysql
define("DBNAME", "magasin"); // nom de la BDD mysql
define("DBUSER", "root"); // username de la BDD mysql
define("DBPWD", ""); // mdp de la BDD mysql