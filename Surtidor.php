<?php

require_once("Persona.php");
class Surtidor {
    var $precio;

    function __construct ($precio) {
        $this->precio = $precio;
    }
    function setPrecio ($precio) {
        $this->precio = $precio;
    }
    function getPrecio () {
        return $this->precio;
    }
    function mostrar () {
        echo "Precio:".$this->getPrecio();
    }
}
