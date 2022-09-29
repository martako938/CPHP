<?php

/* 
Ej 5 Imprimir todos los numeros, que hay en el intervalo de 
 * dos numero dados por el metodo get
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){ //comrueba si existe
    $numero1 = $_GET['numero1'];   //Si se guarda y castea en el int por METODO GET
                                    //Queda $numero1 = (int)$_GET['numero1'];  y
                                    //Funciona igual
    $numero2 = $_GET['numero2'];
    echo "<h2>INTERVALO</h2>";
    echo "<h2>Los numeros del intervalo [".$numero1.", ".$numero2."] son:</h2>";
  
    if($numero1+1 == $numero2){
        echo 'El numero 2 debe ser MAYOR</br>';
    }elseif($numero1 >= $numero2){
            echo 'El numero 1 NO debe ser MAYOR o IGUAL al numero 2</br>';
    }else{
        $i=$numero1+1;
        for($numeros=$i;$numeros<$numero2;$numeros++){
            if($numeros != $numero2-1){
                echo $numeros.", ";
            } else {
                echo $numeros;
            }
            
        }
    }
}else{
    echo "<h1>Introduce correctamente los valores</h1>";
}

?>