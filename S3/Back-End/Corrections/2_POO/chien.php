<?php
// Déclaration de la classe Chien
class Chien {
 // Déclaration des attributs de la classe Chien
 public $nomChien;
 public $race;
 /*******************************************************
 Initialise le nom et la race du chien lors de l'instanciation de l'objet
 Entrée :
 $nc [string] : Nom du chien
 $r [string] : Race du chien
 Sortie :
 $this->nomChien [string] : Nom du chien dans l'objet instancié
 $this->race [string] : Race du chien dans l'objet instancié

 Retour :
 *******************************************************/
 public function __construct($nc, $r) {
 $this->nomChien = $nc; // Initialisation de l'attribut $nomChien
 $this->race = $r; // Initialisation de l'attribut $race
 }
 /*******************************************************
 Retourne la description du chien
 Entrée :

 Sortie :

 Retour :
 [string] : Description du chien
 *******************************************************/
 public function description() {
 $message = "<div>";
 $message .= "<div>Le chien s'appelle <b>".$this->nomChien."</b></div>";
 $message .= "<div>Il est de race <b>".$this->race."</b></div>";
 $message .= "</div>";

 return $message;
 }


 public function changerRace($r){
    $this->race = $r ;
 }

} 