<?php

$frase = "Y entonces llegó un día. Un día como ningún otro...";

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";
    
    return $year;
    
}

//echo $year;

echo holaMundo();

//Funciones Variables

function buenasDias(){
    return "<h1>Hola! Buenos dias :)</h1>";
}

function buenasTardes(){
    return "<h1>Hey loco!. Que tranza la comida</h1>";
}

function buenasNoches(){
    return "<h1>Ya te vas a dormir?. Buenas noches :) :) </h1>";
}

$horario = $_GET["horario"];
$miFuncion = "buenas".$horario;

echo $miFuncion();


?>
