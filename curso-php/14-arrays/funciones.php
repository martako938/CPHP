<?php

$cantantes = ['Luis Fonsi','McDinero','AhriKDA','AkaliKDA'];
$numeros = [1,2,9,938,12,69,99];

//Ordenar
sort($numeros);
var_dump($numeros);

//Añadir elementos a un array
$cantantes[] = 'Bunbury';

//Añadir elemento al array
array_push($cantantes, 'Ozuna');
//Quitar elemento al array 
//array_pop($cantantes);
//Quitar indices en concreto
unset($cantantes[0]);
//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta
var_dump(array_reverse($numeros));

//Busca dentro de un array
$resultado = array_search('AhriKDA',$cantantes);
var_dump($resultado);

//Contar numero de elementos
echo count($cantantes);
echo sizeof($cantantes);

?>

