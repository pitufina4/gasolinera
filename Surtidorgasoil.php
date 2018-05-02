<?php

require_once("Surtidor.php");

class Surtidorgasoil extends Surtidor {
    var $premium;

    function __construct ($precio,$premium) {
        parent::__construct ($precio);
        $this->premium = $premium;
    }
    function setPremium ($premium) {
        $this->premium = $premium;
    }
    function getPremium () {
        return $this->premium;
    }
    function mostrar () {
        parent::mostrar();
        echo "Premium:".$this->getPremium();
    }
}