<?php

/* 
Imprimier las tablas de multiplicar del 1 al 10 en 
 * Tablas de una pagina HTML
 */
echo "<table border='1'><tr>";  //inicio de la tabla
    echo "<tr>"; //Inicio fila uno de las celdas
        for($cabecera = 1; $cabecera <= 10;$cabecera++){
            echo "<td>Tabla del $cabecera</td>";
        }
    echo "</tr>"; // cierre fila 1 de las celdas 

    echo "<tr>"; // Inicia fila 2
        for($i = 1; $i <= 10;$i++){
            echo "<td>";   //Todas las multiplicaciones de un numero 
                for($x = 1;$x<=20;$x++){
                    echo "$i x $x = ".($i*$x)."<br>";  //Realiza la operacion 
                }
            echo "</td>";
        }    
    echo "</tr>"; // cierre fila 2 
echo "</table>";  
?>