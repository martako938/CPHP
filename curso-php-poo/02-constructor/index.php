<?php
require_once 'coche.php';

// Crear un objeto / instanciar la clase

$coche = new coche("Rojo","Ford","Mustang",300,400,2);
$coche1 = new coche("Amarillo","Chevrolet","Chevy",200,200,2);
$coche2 = new coche("Naranja","Dodge","Attitude",250,200,4);
$coche3 = new coche("Negro","Dodge","Durango",220,365,7);

$coche->color = "Rosa";
$coche->setMarca("Audi");

echo $coche->mostrarInformacion($coche1);

//var_dump($coche->getModelo());
//var_dump($coche->getColor());
//var_dump($coche);
//var_dump($coche2);
//var_dump($coche3);

