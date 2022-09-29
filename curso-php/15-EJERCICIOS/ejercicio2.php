<?php

/* 
 Escribir un programa en PHP que añada valores en un array mientras
 que su longitud sea menos a 120 y luego mostrar en pantalla
 */

$coleccion = array();

for($i = 0; $i < 120; $i++){
    array_push($coleccion, "Elemento:".$i);
    
}
echo $coleccion[68];
//var_dump($coleccion);

?>