<?php
$error = 'faltan_valores';


if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && 
  !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])){
    $error = 'ok';
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];  //Se castea de string a entero
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    //Validacion en servidor
    //Validar nombre
    if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
        $error = 'nombre';
    }
    //Validar apellidos
    if(!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)){
        $error = 'apellidos';
    }
    //Validar edad
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }
    //Validar email
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    //Validar password
    if(empty($pass) || strlen($pass)<5){
        $error = 'pass';
    }
    //var_dump($_POST);  //Debugueando el arreglo qeu llega por metodo post
    //var_dump($edad);   //Debugueando edad para ver si se castea a entero
    //var_dump($error);  //Debugueando error
}else{
    $error = 'faltan_valores';    
}

if($error != 'ok'){
    header("Location:index.php?error=$error");  //Redireccion cuando hay algun error

}

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        <?php if($error == 'ok'): ?>
        <h1>Datos validados correctamente</h1>
            <p><?=$nombre?></p>
            <p><?=$apellidos?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
            <p><?=$pass?></p>
        <?php endif; ?>
    </body>
</html>    
