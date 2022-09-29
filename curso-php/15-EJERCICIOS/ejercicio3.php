<?php

/* 
 Ejercicio 3 
 Programa que compruebe si una variable esta vacia y si esta vacia
 rellenarla con un texto en minusculas y mostrarlo en mayusculas y negritas
 */

$texto= "";

//Si esta variable es vacia
if(empty($texto)){
    $texto = "hola esto es rellenar la variable texto";
    $textoMAYUS = strtoupper($texto);
    
    echo "<strong>$textoMAYUS</strong>";
}else{
    echo "La variable tiene este contenido.".$texto;
    
}
?>