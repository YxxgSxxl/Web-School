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
    <h3>Exercice avec <code class="code">var_dump()</code></h3>
    <?php
    // Déclaration des tableaux
    $prenoms = array('Vincent','François','Paul','Virginie');

    $villes=array('FRANCE'=>array('Colmar','Mulhouse','Strasbourg'),
                  'ITALIE'=>array('Rome','Venise'));

    $coordonnees=['nom'=>'Dupont',
                  'prenom'=>'Benoît',
                  'numero'=>8,
                  'rue'=>'villa des Gobelins',
                  'codePostal'=>'75013',
                  'ville'=>'Paris'];
    // Affichage des tableaux ainsi que le nombre d'éléments de ceux-ci              
    echo var_dump($coordonnees, $villes); 
    echo "nombre d'éléments dans le tableau \$prenoms : " . count($prenoms);
    ?>
  </main>
</body>
</html>