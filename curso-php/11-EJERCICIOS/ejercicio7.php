<?php

/* 
Ej 7 Imprimir todos los numeros impares, que hay en el intervalo de 
 * dos numero dados por el metodo get
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){ //comrueba si existe
    $numero1 = $_GET['numero1'];   //Si se guarda y castea en el int por METODO GET
                                    //Queda $numero1 = (int)$_GET['numero1'];  y
                                    //Funciona igual
    $numero2 = $_GET['numero2'];
    echo "<h2>INTERVALO</h2>";
    echo "<h2>Los numeros impares del intervalo [".$numero1.", ".$numero2."] son:</h2>";
  
    if($numero1+1 == $numero2){
        echo 'El numero 2 debe ser MAYOR</br>';
    }elseif($numero1 >= $numero2){
            echo 'El numero 1 NO debe ser MAYOR o IGUAL al numero 2</br>';
    }else{
        $i=$numero1+1;
        for($numeros=$i;$numeros<$numero2;$numeros++){
            if($numeros%2 != 0 ){  //Evalua para imprimir solo los numeros impares
                echo $numeros;             
                if(($numeros != $numero2-1)&&($numeros != $numero2-2)){//La segunda condicion es para que no imprima la ultima coma cuando el ultimo numero del ciclo es par
                    echo ", ";
                }
            }
        }
    }
}else{
    echo "<h1>No se guardó nada.</br>Introduce correctamente los valores</h1>";
}

?>