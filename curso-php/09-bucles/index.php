<?php

//Bucle while
//Estructura de control Itera o repite la ejecucion de una serie de instrucciones
//las veces que sea necesario, en base a una condicion.
/*
while(condicion){
  bloque de instruccion
  otra instruccion
 }
  */

$numero = 0;

while($numero <= 100){
    echo "$numero";
    
    if ($numero != 100){  //Para que no imprima coma si es 100 
        echo ", ";
    }
    
    $numero++;
}

//Ejemplo
echo "<hr/>";

if (isset($_GET['numero'])){    //isset para ver si existe esta variable y que ya no salga el warning
    $numero = (int)$_GET['numero'];    //para castear/Cambiar a int porque al llegar por url es string
}else{
    $numero = 1;
}
//var_dump($numero); //Ver que tiipo de dato se gardo

echo "<h1>Tabla de multiplicar del numero $numero</h1>";

$contador = 1;
while($contador <= 10){
    echo"$numero X $contador = ".($numero*$contador)."<br/>";
    $contador++;
}

echo "<hr/>";
//DO WHILE   Para que se ejecute al menos una vez
/*
do{
    Bloque de instrucciones
 }while(condicion);
  */

$edad = 17;
$contador =1;
do{
    echo "Tienes acceso al local privado $contador<br/>";
    $contador++;
}while($edad >=18 && $contador <= 10);



?>
