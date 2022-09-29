<?php
//Operadores aritmeticos
$numero1 = 55;
$numero2 = 33;

echo 'suma:'.($numero1+$numero2).'</br>';
echo 'resta:'.($numero1-$numero2).'</br>';
echo 'producto:'.($numero1*$numero2).'</br>';
echo 'division:'.($numero1/$numero2).'</br>';
echo 'modulo:'.($numero1%$numero2).'</br>';

//Operadores incremento y decremento

$year = 2022;

$year++; //Aumenta en uno  ++$year;   $1+$year;   $year = Syear + 1

echo "<h1>$year</h1>";

$year--; //Disminuye en uno

echo "<h1>$year</h1>";

//Operadores de asignacion

$edad = 55;

echo $edad.'</br>';
echo ($edad+=5).'</br>';
echo ($edad-=5);

var_dump($edad); // ver el valor de la variable

?>
