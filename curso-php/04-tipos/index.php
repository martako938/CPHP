<?php

/*$numero = 100;
$decimal = 56.9;
$texto = "Soy un texto";
$verdadero = true; 
$nula = NULL;
echo "<br>";
echo $texto;*/
        
        //Forma rapida
  $numero = 100;
$decimal = 56.9;
$texto = 'Soy un texto'.$numero;
$verdadero = true; 
$nula = NULL;
echo "<br>";
echo $texto ;    
        

echo "<br>";
echo gettype($numero);
echo "<br>";
echo gettype($decimal);
echo "<br>";
echo gettype($texto);
echo "<br>";
echo gettype($verdadero);
echo "<br>";
echo gettype($nula);


//Debugear 
$nombre = "Brayan Cabrera";

var_dump($nombre);
?>

