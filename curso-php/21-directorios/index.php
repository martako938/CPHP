<?php
if(!is_dir('mi_carpeta')){  //If para comprobar si existe la carpeta
    mkdir('mi_carpeta', 0777) or die("No se puede crear la carpeta");
}else{
    echo "Ya existe la carpeta";
}

//rmdir('mi_carpeta');
echo '<hr><h1>Contenido de la carpeta</h1>';
if ($gestor = opendir('./mi_carpeta')){ //Si existe mi carpeta
    while(false !== ($archivo = readdir($gestor))){ //Mientras haya algun $archivo en $gestor o sea el directorio
        if($archivo != '.' && $archivo != '..'){  // Comprobamos que sean archivos y no . y ..
            echo $archivo."<br/>";
        }
    }
}
