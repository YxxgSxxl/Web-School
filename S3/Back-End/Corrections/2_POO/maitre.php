<?php
//Definition class Maitre
class Maitre {
    //déclaration des atributs (ou propriétés)
    public $Nom ;
    public $Metier ;
    public $Pays ;
    public $NomChien ;
    public $Race ;

//     Initialise le nom, le métier, le pays, le nom du chien et la race du chien du maitre lors de l'instanciation de l'objet
//  Entrée :

//      $n [string] : Nom 
//      $m [string] : Metier du maitre
//      $p [string] : pays du maitre
//      $nc [string] : Nom du chien
//      $r [string] : Race du chien

//  Sortie (=modification):

//      $this->$Nom [string] : Nom du maitre dans l'objet instancié
//      $this->$Metier [string] : Metier du maitre  dans l'objet instancié
//      $this->$Pays = [string] : Pays du maitre  dans l'objet instancié
//      $this->nomChien [string] : Nom du chien du maitre dans l'objet instancié
//      $this->race [string] : Race du chien du maitre dans l'objet instancié

// Retour :

public function __construct($n, $m, $p, $nc=null, $r=null){
    $this->Nom = $n ; //Initialisation de l'attribut $Nom
    $this->Metier = $m ; //Initialisation de l'attribut $Metier
    $this->Pays = $p ; //Initialisation de l'attribut $Pays
    $this->NomChien = $nc ; //Initialisation de l'attribut $NomChien
    $this->Race = $r ; //Initialisation de l'attribut $Race
}

public function details() {
    //check s'il y a un chien
    if (isset($this->NomChien)) {
        $message = "<div><b>" . $this->Nom . "</b>, <b>" . $this->Metier . "</b> en <b>" . $this->Pays . "</b> est le maître d'un chien :</div><div>Le chien s'appelle <b>" . $this->NomChien . "</b></div><div>Il est de race <b>". $this->Race . "</b></div>";
        return $message ;
    }
    else {
        $message = "<div><b>" . $this->Nom . "</b>, <b>" . $this->Metier . "</b> en <b>" . $this->Pays . "</b> ne possède pas de chien </div>" ;
        return $message ;
    }
}
public function affecter($nc, $r) {
    $this->NomChien = $nc ;
    $this->Race = $r ;
}


}