<?php

/* 
Ejercicio 2.
 * 1. Una funcion
 * 2. Validar un email con filter_var
 * 3. Recoger variable por get y validarla
 * 4. Mostrar el resultado
 */

function validarEmail($email){
    $status = 'No valido';
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){  // Valida si no esta vacio email y si es uno valido
        $status = 'Valido';
    }
    
    return $status;
}

if(isset($_GET['email'])){   // If Para validar si llega por get email
    echo validarEmail($_GET['email']);  // llamada a la  funcuin validar Email
}else{
    echo 'Pasa por get un email...';
}