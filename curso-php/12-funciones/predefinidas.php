<?php

//Debuggear
$nombre = "Brayan Raúl";
var_dump($nombre);

//Fechas
echo date('d-m-Y');
echo '<br/>';
echo time();

//Matemáticas
echo '<br/>';
echo "Raiz cuadrada de 10: ".sqrt(10);

echo '<br/>';
echo "Numero aleatorio entre 10 y 40: ". rand(10, 40);

echo '<br/>';
echo "Numero pi: ".pi();

echo '<br/>';
echo "Redondear: ".round(7.89234, 2);

//Mas funciones generales

echo '<br/>';
echo gettype($nombre);

//Detectar tipos
echo '<br/>';
if(is_string($nombre)){
    echo "Esa variable es un string";
}


echo '<br/>';
if(!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}

//Comprobar si una variable existe

echo '<br/>';
if(isset($edad)){
    echo "La variable existe";
}else{
    echo "La variable NO existe";
}

//Limpiar espacios

echo '<br/>';
$frase = "     mi contenido       ";
var_dump(trim($frase));

//Eliminar variables o indices de arrays
$year = 2021;
unset($year);

//var_dump($year);

//Comprobar variables vacias
$texto = "  ";

if(empty($texto)){
    echo "La variable texto está vacia";
}else{
    echo "La variable texto TIENE CONTENIDO";
}

//Contar caracteres de una cadena
echo "<br/>";
$cadena = "12345";
echo strlen($cadena);

echo "<br/>";

//Encontrar caracter
$frase = "Los sueños, sueños son";
echo strpos($frase,"55676");
echo "<br/>";

//Reemplazar palabras de un string
$frase = str_replace("sueños", "drogos", $frase);
echo $frase;
echo "<br/>";

//MAYUSCULAS Y minusculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);




?>
