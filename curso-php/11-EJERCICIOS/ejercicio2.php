<?php

/* 
Sacar todos los numero pares que hay del 1 al 100 
 */
//$divisor =2;

for($numeros=0;$numeros<=100;$numeros++){
    if($numeros%2 == 0 ){    // comparar usando el modulo
        if($numeros == 100){    //no imprimir ultima coma
            echo "$numeros ";
        }else{
            echo "$numeros, ";
        }
        
    }else{
        echo "";
    }
    
}

?>