<?php

class Personnage {
    
    public $vie = 80;
    public $atk = 20;
    public $nom;
    
    public function __construct($nom) {
        $this->nom = $nom;
    }
    
    public function crier() {
        echo 'LEEROY JENKINS';
    }
    
    public function regenerer($regen = null) {
        if(is_null($regen))
            $this->vie = 100;
        else
            $this->vie += $regen;
    }
    
    public function mort() {
        return $this->vie <= 0;
    }
    
    public function attaque($cible) {
        $cible->vie -= $this->atk;
    }
    
}