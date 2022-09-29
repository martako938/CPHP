<?php

/* 
Crear un array con el contenido de la tabla:

ACCION  AVENTURA   DEPORTES
GTA     ASSASINS   FIFA 19
COD     CRASH      PES 19
PUGB    Prince of  MOTOR GP 19
        persia
 
Cada columna debe ir en un fichero separado (includes)
 
 */

$tabla =array(
    "ACCION" => array("GTA 5","Call of Duty","PUGB"),
    "AVENTURA" => array("Assasind Cred","Crash Bandicoot","Prince of Persia"),
    "DEPORTES" => array("FIFA 2019","PES 2019","Motor GP 2019")
 );

 //var_dump($tabla);
 $categorias = array_keys($tabla);
 
 ?>

<table border="1">
    <?php require_once 'ejercicio5/encabezado.php'; ?>
    <?php require_once 'ejercicio5/primera.php';  ?>
    <?php require_once 'ejercicio5/segunda.php';  ?>
    <?php require_once 'ejercicio5/tercera.php';  ?>  
</table>