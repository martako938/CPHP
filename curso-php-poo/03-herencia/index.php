<?php
require_once 'clases.php';

$persona = new Persona();
$persona->setNombre('Victor');
var_dump($persona);

$informatico = new Informatico();
//$informatico->setAltura(1.90);
//echo $informatico->sabeLenguajes("HTML,MATLAB,CSS,JS");

var_dump($informatico);

$tecnico =new TecnicoRedes();

var_dump($tecnico);