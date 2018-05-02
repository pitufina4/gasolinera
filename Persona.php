<?php

require_once("Cliente.php");
require_once("Empleado.php");

class Persona {
    var $nombre;


    function __construct ($nombre) {
        $this->nombre = $nombre;
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getNombre () {
        return $this->nombre;
    }
    function mostrar () {

        echo "Nombre :".$this->getNombre();
    }
}
    



