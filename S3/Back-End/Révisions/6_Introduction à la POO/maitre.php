<?php
class tintin {
    public $nom;
    public $metier;
    public $pays;
    public $nomChien;
    public $race;

    public function __construct($n, $m, $p, $nc, $r) {
        $this->nom = $n;
        $this->metier = $m;
        $this->pays = $p;
        $this->nomChien = $nc;
        $this->race = $r;
    }

    public function description() {
        $message = "<div>";
        $message .= "<div><b>" . $this->nom . "</b>, <b>" . $this->metier . "</b> en <b>" . $this->pays . "</b> est ke maitre d'un chien :</div>";
        $message .= "<div>Le chien s'appelle  <b>".$this->nomChien."</b></div>";
        $message .= "<div>Il est de race <b>".$this->race."</b></div>";
        $message .= "</div>";
        return $message;
        }
}