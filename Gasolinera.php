<?php

require_once("Cliente.php");
require_once("Empleado.php");
require_once("Surtidorgasolina.php");
require_once("Surtidorgasoil.php");

class Gasolinera {
    var $ciudad;
    var $marca;
    var $clientes;
    var $empleados;
    var $surtidores;


    function __construct ($ciudad,$marca) {
        $this->ciudad = $ciudad;
        $this->marca = $marca;
        $this->clientes= array();
        $this->empleados= array();
        $this->surtidores= array();
    }
    function setCiudad ($ciudad) {
        $this->ciudad = $ciudad;
    }
    function getCiudad () {
        return $this->ciudad;
    }
    function setMarca ($marca) {
        $this->ciudad = $ciudad;
    }
    function getMarca () {
        return $this->marca;
    }

    function altaCliente ($cliente){
        $this->clientes[]=$cliente;
    }
    function altaEmpleado ($empleado){
        $this->empleados[]=$empleado;
    } 
    function anadirSurtidor ($surtidor){
        $this->surtidores[]=$surtidor;
    } 
    // Busca por Cif y cuando lo encuentra lo anula
    function bajaCliente ($cif){
        $enc = false;
        for ($i=0; $i < count($this->clientes) && ($enc == false); $i++) { 
            if ($this->clientes[$i] != null) {
                if ($cif == $this->clientes[$i]->getCif()) {
                    $this->clientes[$i] = null;
                    $enc = true;
                }
            }
        }
    }

    // Busca por el nombre y cuando lo encuentra lo anula
    function bajaEmpleado ($nombreEmpleado){
        $enc = false;
        for ($i=0; $i < count($this->empleados) && ($enc == false); $i++) { 
            if ($this->empleados[$i] != null) {
                if ($nombreEmpleado == $this->empleados[$i]) {
                    $this->empleados[$i] = null;
                    $enc = true;
                }
            }
        }
    }

    function mostrar () {
        
        echo "Ciudad :".$this->getCiudad();
        echo "<br>";
        echo "Marca :".$this->getMarca();
        echo "<br>";
        /*
        for ($i=0; $i< count($this->clientes); $i++){
            $this->clientes[$i]->mostrar();
            echo "<br>";
        }
        for ($i=0; $i< count($this->empleados); $i++){
            $this->empleados[$i]->mostrar();
        }
        for ($i=0; $i< count($this->surtidores); $i++){
            $this->surtidores[$i]->mostrar();
        }
    */
    }

}