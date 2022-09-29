<?php

require_once 'configuracion.php';

Configuracion::setColor("Azul");
Configuracion::setEntorno("Localhost");
Configuracion::setNewsletter(true);

echo Configuracion::$color . '<br/>';
echo Configuracion::$newsletter . '<br/>';
echo Configuracion::$entorno . '<br/>'. '<br/>';

$configuracion = new Configuracion();
$configuracion::$color = "Rojo";
echo $configuracion::$color;

var_dump($configuracion);