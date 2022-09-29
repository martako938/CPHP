<?php
/*
// Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");  // permiso para leer y escribir  doc PHP

// Leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

// Escribir en el archivo
fwrite($archivo,"***Soy un texto metido desde PHP***<br/>");

// Cerrar archivo
fclose($archivo);

*/

// Copiar archivo
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

// Renombrar
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

// Eliminar
//unlink('archivito_recopiadito.txt') or die("Error al borrar");

// Comprobar si existe el archivo
if(file_exists("fichero_texto1.txt")){
    echo "El archivo existe";
}else{
    echo "NO EXISTE";
}