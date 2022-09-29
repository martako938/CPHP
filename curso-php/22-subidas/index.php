<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h1>Subir archivos con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" />
            <input type="submit" value="Enviar" />
        </form>
        
        <h1>Listado de imagenes</h1>
        <?php 
        $gestor = opendir('./images');  //para abrir el directorio de las imagenes y cargarlas
        if($gestor):
            while(($image = readdir($gestor)) !== false): //if para comprobar que existe el directorio
                if($image != '.' && $image != '..'):  // Comprueba que no sea directorio actual y directorio arriba
                    echo "<img src='images/$image' width='450px' /><br/>";//Pone una imagen cada que entra al ciclo
                endif;
            endwhile;
        endif;
        ?>
    </body>
</html>

