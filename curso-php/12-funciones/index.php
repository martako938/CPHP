<?php

/* 
Conjunto de instrucciones agrupadas bajo un nombre concreto
 * y pueden reutilizarse solamente invocando la funcion tantas 
 * veces como queramos  
 
 function nombreDeMifuncion(){
    //BLOQUE /Conjunto de instrucciones
  }
 */

//Ejemplo 1
 function muestraNombres(){
     echo "Juan Gonzalez<br/>";
     echo "Giovany de la Luz<br/>";
     echo "Erik Cayetano<br/>";
     echo "Jessica Flores<br/>";
     echo "<hr/>";
 }
     //Invocar funcion      
     muestraNombres();
     //muestraNombres();
     //muestraNombres();

//Ejemplo 2
function tabla($numero){
    //var_dump($numero);
    echo "<h3> Tabla de multiplicar de numero: $numero <h3/>";
    for($i = 1; $i <= 10; $i ++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion";
        echo "</br>";
    }
}  

/*
if(isset($_GET['numero'])){ //Verificar que se recibe el numero por medio de la url
    tabla ($_GET['numero']);          
 }
 else{
     echo 'No se recibio numero para sacar la tabla';
 }
*/
//Haciendo contante los numeros
/*for($i = 1; $i <= 10; $i++){
    echo tabla($i);
}*/


//Ejemplo 3 

function calculadora($numero1, $numero2, $negrita = false){
    //Conjunto e instrucciones a ejecutar
    $suma = $numero1 + $numero2 ;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2; 
    
    $cadena_texto = "";
    
    if($negrita){
        $cadena_texto.="<h1>";
        
    }
    
    $cadena_texto.="</br>";
    $cadena_texto.="Suma: $suma </br>";
    $cadena_texto.="Resta: $resta </br>";
    $cadena_texto.="Multiplicacion: $multiplicacion </br>";
    $cadena_texto.="Division: $division </br>"; 
    
    
    if($negrita){
        $cadena_texto.="</h1>";
    }
    $cadena_texto.="<hr/>";
    
    //var_dump($cadena_texto);
    
    return $cadena_texto;
}

//calculadora(3,7);
echo calculadora(6,9,false);
//calculadora(12,4);


//Ejemplo 4
function getNombre($nombre){   //Funcion para obtener nombre
    $texto = "El nombre es $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            ."<br/>".
            getApellidos($apellidos);
    return $texto;
}

echo devuelveElNombre("Israel","Angeles");

?>
