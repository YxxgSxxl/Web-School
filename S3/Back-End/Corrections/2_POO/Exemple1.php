<?php
require "maitre.php" ;

// Instanciation de la classe Maitre : $Tintin est un objet de la classe "Maitre"
// Instanciation de la classe Maitre : $Astérix est un objet de la classe "Maitre"

$Tintin = new Maitre("Tintin", "journaliste", "Belgique", "Milou", "fox-terrier") ;
$Astérix = new Maitre("Astérix", "guerrier", "Gaules") ;

echo $Tintin ->details();
echo $Astérix ->details();

$luckyLuke = new Maitre("Lucky Luke", "cowboy", "Amérique");
echo $luckyLuke->details();
$luckyLuke->affecter("Rantanplan", "toutou");
echo $luckyLuke->details();

