<?php
require_once("Persona.php");
require_once("Repostaje.php");

class Cliente extends Persona {
    var $cif;
    var $repostajes;

    function __construct ($nombre,$cif) {
        parent::__construct ($nombre);
        $this->cif = $cif;
        $this->repostajes =array();
    }
    function setCif ($cif) {
        $this->cif = $cif;
    }
    function getCif () {
        return $this->cif;
    }
    function anadirRepostaje($repostaje){
        $this->repostajes[]=$repostaje;

    }
    function mostrar () {
        parent::mostrar();
        echo "Cif :".$this->getCif();
        for($i=0; $i < count($this->repostajes); $i++){
            $this->repostajes[$i]->mostrar();
        }    
    }
   

}