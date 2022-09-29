<?php
/* 
Ej 4 Recoger 2 numeros por url con el parametro get y hacer todas las 
 * operaciones de una clculadora basica con ellos
 */
//echo "<hr/>";
//Var_dump($_GET);
//echo "<hr/>";

if(isset($_GET['numero1']) && isset($_GET['numero2'])){ //comrueba si existe
    $numero1 = $_GET['numero1'];   //Si se guarda y castea en el int por METODO GET
                                    //Queda $numero1 = (int)$_GET['numero1'];  y
                                    //Funciona igual
    $numero2 = $_GET['numero2'];
    echo "<h2>CALCULADORA</h2>";
    echo "<h2>Los numeros a operar son:</h2>";
    echo "<h2>".$numero1."</h2>";  
    echo "<h2>".$numero2."</h2>";

    echo 'Suma: '.($numero1+$numero2).'</br>';
    echo 'Resta: '.($numero1-$numero2).'</br>';
    echo 'Producto: '.($numero1*$numero2).'</br>';
    echo 'Division: '.($numero1/$numero2).'</br>';
    echo 'Modulo: '.($numero1%$numero2).'</br>';
}else{
    echo "<h1>Introduce correctamente los valores</h1>";
}

?>