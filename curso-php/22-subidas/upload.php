<?php

$archivo = $_FILES['archivo']; //Variable $_FILES se guarda en la variable archivo 
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif" ){ // if para validar que sea una imagen valida
    
    if(!is_dir('images')){     //Si no existe el directorio images, lo crea con 
        mkdir('images', 0777);  //Creacion del directorio con todos los permisos 
    }
    
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);   //Mueve el archivo de temporal a la carpeta seleccionada
    
    header("Refresh: 5; URL=index.php");
    echo "<h1>Imagen subida correctamente</h1>";
    
}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>Sube una imagen con un formato correcto, por favor...</h1>";
}

