<?php
require "maitre2.php";
// Instanciation de la classe Chien : $milou est un objet de la classe "Chien"
// La classe Chien est héritée par la classe Maitre2
$milou = new Chien("Milou", "caniche");
var_dump($milou); // Description de l'objet $milou
echo "<div>".$milou->nomChien."</div>"; // Affichage de l'attribut "nomChien"
echo "<div>".$milou->race."</div>"; // Affichage de l'attribut "race"
$milou->changerRace("fox-terrier"); // Modification de l'attribut "race"
echo $milou->description(); // Affichage de la méthode "description"

// Instanciation de la classe Maitre2 : $luckyLuke est un objet de la classe "Maitre2"

// Lucky Luke est le maitre du chien Rantanplan
$luckyLuke = new Maitre2("Lucky Luke", "cowboy", "Amérique", "Rantanplan","toutou");
echo $luckyLuke->details();
// Instanciation de la classe Maitre2 : $asterix est un objet de la classe "Maitre2"
// Astérix ne possède pas de chien (seuls 3 paramètres sont indiqués lors de l'instanciation)
$asterix = new Maitre2("Astérix", "guerrier", "Gaules");
echo $asterix->details();

