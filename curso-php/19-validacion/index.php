<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>
        
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'faltan_valores'){
                    echo '<strong style="color:red">ERROR Introduce todos los datos en los campos del formulario </strong>';
                }
                if($error == 'nombre'){
                    echo '<strong style="color:red">Introduce bien el nombre</strong>';
                }
                
                if($error == 'apellidos'){
                    echo '<strong style="color:red">Los apellidos no son correctos</strong>';
                }
                
                if($error == 'edad'){
                    echo '<strong style="color:red">Introduce una edad correcta</strong>';
                }
                
                if($error == 'email'){
                    echo '<strong style="color:red">El correo es erroneo</strong>';
                }
                
                if($error == 'pass'){
                    echo '<strong style="color:red">Introduce una contraseña con mas de 5 letras</strong>';
                }
            }
            
            
        ?>
        
        <form method="POST" action="procesar_formulario.php">                              <!--Validacion en la vista-->
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br/> <!--required="required" pattern="[A-Za-z]+"-->
            
            <label for="apellidos">Apellidos</label><br/>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br/> <!--required="required" pattern="[A-Za-z]+"-->
            
            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"><br/> <!--required="required" pattern="[0-9]+"-->
            
            <label for="email">Email</label><br/>
            <input type="text" name="email" required="required"><br/> <!--required="required"-->
            
            <label for="pass">Contraseña</label><br/>
            <input type="password" name="pass" required="required" minlength="5"><br/> <!--required="required" minlength="5"-->
            
            <input type="submit" value="Enviar"/>
        </form>

    </body>
</html>
