<?php
require_once "chien.php";
class Maitre2 extends Chien{
 public $nom;
 public $metier;
 public $pays; 

 public function __construct($n, $m, $p, $nc=null, $r=null){
    $this->Nom = $n ; //Initialisation de l'attribut $Nom
    $this->Metier = $m ; //Initialisation de l'attribut $Metier
    $this->Pays = $p ; //Initialisation de l'attribut $Pays
    $this->NomChien = $nc ; //Initialisation de l'attribut $NomChien
    $this->Race = $r ; //Initialisation de l'attribut $Race
}

public function details() {
    //chek s'il y a un chien
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