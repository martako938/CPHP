<?php

/* 
Ejercicio 1. Hacer un programa que tenga un array con 8 numeros enteros
 y que haga lo siguiente
 Recorrerlo y mostrarlo
 Ordenarlo y mostrarlo
 Mostrar su longitud
 Buscar algun elemento dentro del array
 Buscar elemento que llegue por la url metodo GET
 */
//FUNCIONES
function mostrarArray($numeros){
    $resultado = "";
    
    foreach ($numeros as $numero){
        //$resultado = $resultado.$numero."<br>";
        $resultado .= $numero."<br/>";
    }
    return $resultado;
}

//Crear array

$numeros = [10,200,30,400,50,600,70,800];

//Recorrer y mostrar

echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros);

//Ordenarlo y mostrarlo

echo"<h1>Ordenar y mostrar</h1>";

sort($numeros);
echo mostrarArray($numeros);

//var_dump($numeros);

//Mostrar su longitud
echo"<h1>Longitud</h1>";
echo count($numeros);

//Buscar en el array
if(isset($_GET['numero'])){
   $busqueda = $_GET['numero'];

    echo"<h1>Buscar en el array el numero $busqueda</h1>";

    $search = array_search($busqueda, $numeros);
    //var_dump($search);

    if(!empty($search)){
    
       echo "<h4>El numero buscado existe en el array, en el indice: $search</h4>";
    }else{
      echo "<h4>El numero NO existe en el array</h4>";
    } 
    
}




?>
