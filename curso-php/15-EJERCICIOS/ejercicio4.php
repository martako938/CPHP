<?php

/* 
Crear un script en php que tenga 4 varibales, una de 
tipo array , string, int y boleana y que imprima el mensaje, 
segun el tipo de variable que sea.
 */

$matriz = array ("Hola SM8",88);
$titulo = "Proyecto SM8";
$numero =  99;
$verdadero = true;

if(is_array($matriz)){
    
    echo "<h1>El array es un array </h1>";
}

if(is_string($titulo)){
    echo "<h1>$titulo</h1>";
}

if(is_integer($numero)){
    echo "<h1>$numero</h1>";
}

if(is_bool($verdadero)){
    echo "<h1>El boleano es verdadero</h1>";
}