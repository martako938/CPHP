<?php
//FOR
/*for(variiable contador, condicion ,actualizando contador){
    //Bloque de instrucciones
}
*/
$resultado = 0;
for($i=0; $i<=100; $i++){
    $resultado += +$i;
    //echo"<p>$resultado</p>";      //Muestra paso a paso
}
echo "<h1>El resultado es: $resultado</h1>";

//Ejemplo tabla de mulltiplicar

echo "<hr/>";

if (isset($_GET['numero'])){    //isset para ver si existe esta variable y que ya no salga el warning
    $numero = (int)$_GET['numero'];    //para castear/Cambiar a int porque al llegar por url es string
}else{
    $numero = 1;
}
//var_dump($numero); //Ver que tiipo de dato se gardo

echo "<h1>Tabla de multiplicar del numero $numero</h1>";


for($contador = 1;$contador <= 10;$contador++){
    if($numero == 45){
        echo "No se pueden mostras estas operaciones PROHIBIDAS";
        break;   
    }
    echo"$numero X $contador = ".($numero*$contador)."<br/>"; 
}

?>
