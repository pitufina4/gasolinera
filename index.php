<?php
require_once("Gasolinera.php");

/*
$gasol1 = new Gasolinera ("Alburquerque", "GALP");

$repos1 =new Repostaje ("50","2018-04-02");

$c1 =new Cliente ("Juan","01234567A");
$c2 =new Cliente ("Aitana","00000000A");
$c3 =new Cliente ("Ali","11111111A");

$gasol1->altaCliente($c1);
$gasol1->altaCliente($c2);
$gasol1->altaCliente($c3);
$gasol1->bajaCliente("11111111A");
$gasol1->mostrar();

$c1->anadirRepostaje ($repos1);


$e= new Empleado("Sandra",1);
$e1= new Empleado("Pepita",2);
$gasol1->altaEmpleado ($e);
$gasol1->altaEmpleado ($e1);

$gasol1->bajaEmpleado ($e1);
*/

$s1= new Surtidorgasolina (1.40,"95");
$s2= new Surtidorgasolina (1.40,"95");
$s3= new Surtidorgasolina (1.40,"95");
$s4= new Surtidorgasoil (1.15, false);
$s5= new Surtidorgasoil (1.15, false);
$s6= new Surtidorgasoil (1.15, false);
$gasol1->anadirSurtidor($s1);
$gasol1->anadirSurtidor($s2);
$gasol1->anadirSurtidor($s3);
$gasol1->anadirSurtidor($s4);
$gasol1->anadirSurtidor($s5);
$gasol1->anadirSurtidor($s6);

//Imprimir lo que está ocuriendo

echo "<pre>";
print_r($gasol1);
echo "</pre>";



