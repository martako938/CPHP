<?php

/* 
 Seision: Almacenar y persistir datos del usuario misntras se navega en un sitio web
 hasta que se cierra la sesion o se cierra el navegador
 */

//Iniciar la sesion

session_start();

$variable_normal = "Soy una cadena de texto";

$_SESSION['variable_persistente'] = "HOLA SOY UNA SESION ACTIVA" ;

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];

?>