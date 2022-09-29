<?php
/* 
 CONDICIONAL IF:
 if(condicion){
    instrucciones
 }else{
   otras instrucciones
  }
 * 
 * 
 Operadores de comparacion
  == igual
  ===identico
  !=distinto
 <> diferente 
 !== no identico 
  < menor que
 > mayor que
  <= meir igua que
  >mayor igual que
 * 
 * 
 * 
 Operadores de comparacion
 && AND Y
 || OR O
 ! NOT NO
 and, or 
 */

//Ejemplo 1 IF
$color = "verde";

if($color == "rojo"){
    echo "EL COLOR ES ROJO";    
}else{
    echo "el color NO es rojo";    
}
echo "<br>";

//Ejemplo 2 IF
$year = 2078;

if($year >= 2019){
    echo "Estamos en 2019 en adelante";
}else{
    echo "Es un año anterior a 2019";
}

//Ejemplo 3 

$nombre = "Brayan Cabrera";
$ciudad = "Ciudad de Mexico";
$edad = 26;
$mayoria_edad =18;
$continente= "Europa";

if($edad >= 18){
    echo "<h1>$nombre es mayor de edad</h1>";
    
    if ($continente == "America"){
        echo "<h2>y es de $ciudad</h2>";
    }else{
        echo "No es Americano";
    }
    
    
}else{
    echo "<h2>$nombre NO es mayor de edad</h2>";
}

echo "<hr/>";

//Ejemplo 4 ELSEIF


$dia = 7;

/*
if($dia == 1){
    echo "Es Lunes";
}else{
    if($dia == 2){
        echo "Es Martes";
    }else{
        if($dia == 3){
            echo "Es Miercoles";
        }else{
            if($dia == 4){
                echo "Es Jueves";
            }else{
                if($dia == 5){
                    echo "Es Vienres";
                }else{
                    echo "Es fin de semana";
                }
            }
        }
    }
}
*/
if($dia == 1){
    echo "LUNES";
}elseif($dia == 2){
    echo "MARTES";
}elseif($dia == 3){
    echo "MIERCOLES";
}elseif($dia == 4){
    echo "JUEVES";
}elseif($dia == 5){
    echo "VIERNES";
}else{
    echo "Es fin de semana";
}
echo "<hr/>";

//Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 16;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Esta en edad de trabajar";
}else{
    echo "No puede trabajar";
}

echo "<hr/>";

$pais = "China";
if($pais == "España" || $pais == "Mexico" || $pais == "Colombia"){
    echo "En este pais se habla español";
}else{
    echo "Aqui NO se habla español";
}

echo "<hr/>";
//SWITCH

$dia = 7;
switch($dia){
    case 1:
        echo "01 Lunes";
        break;
    case 2:
        echo "02 Martes";
        break;
    case 3:
        echo "03 Miercoles";
        break;
    case 4:
        echo "04 Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default :
    echo "ES FIN DE SEMANA";    
}

echo "<hr/>";

//GOTO
goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo "<h1>Me he saltado 4 echos</h1>";


?>


