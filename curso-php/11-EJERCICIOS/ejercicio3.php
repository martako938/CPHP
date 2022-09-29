<?php

/* 

Imprimir los cuadrados de los primero 40 numeros naturales 
 */

//FOR
/*
for($numeros=1;$numeros<=40;$numeros++){
    echo "<br/>".$numeros*$numeros."<br/>";
}
*/

//While

$numeros=1;
While($numeros<=40){
    echo "<br/>El cuadrado de ".$numeros." es: ".$numeros*$numeros."<br/>";
    $numeros++;
}

?>