<?php
  // ****** ACCES AUX DONNEES ******
  try   // Connexion à la base de données
  {
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $bdd = new PDO('mysql:host=localhost;dbname=magasin', 'root', '', $options);
  }
  catch(Exception $err)
  {
    die('Erreur connexion MySQL : ' . $err->getMessage());
  }

  // Envoi de la requête SQL
  $reponse = $bdd->query("SELECT nom, prenom, ville FROM client");

  // Lecture de toutes les lignes de la réponse dans un tableau associatif
  $table = $reponse->fetchAll(PDO::FETCH_ASSOC);

  $bdd = null;                // Fin de la connexion

  // ****** PREPARATION DES DONNEES ******
  $titre = "<h3>Liste des clients</h3>";

  // Affichage des titres de colonnes
  $resultat = "<table><tr><th>Nom</th><th>Prénom</th><th>Ville</th></tr>";

  // Affichage du contenu du tableau
  var_dump($table);
  
  // foreach($table as $ligne)
  // {
  //   $resultat .= "<tr>";
  //   $resultat .= "<td>".$ligne['nom']."</td>";
  //   $resultat .= "<td>".$ligne['prenom']."</td>";
  //   $resultat .= "<td>".$ligne['ville']."</td>";
  //   $resultat .= "</tr>";
  // }
 
  $resultat .= "</table>";
?>

<!-- ****** AFFICHAGE DES DONNEES ****** -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link href="/styles/style.css" rel="stylesheet">
  <title>PHP</title>
</head>

<body>
  <header>
    <h1>PHP</h1>
  </header>
  
  <main class="resultat">
    <div class="resultat">
      <?= $titre ?>
      <?= $resultat ?>
    </div>
  </main>
</body>
</html>