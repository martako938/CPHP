<?php
    define('nombre', 'Brayan Cabrera');
    define('web','bcabrera@gmail.com.mx');
    
    echo '<h1>'.nombre.'<h1>';
    echo '<h1>'.web.'</h1>';
    
    //Constante 
    $web = "bcabrera/Soporte";
    $web = "bcabrera/Desarrollo";
    
    echo '<h1>'.$web.'</h1>';
    
    //Constantes predefinidas. 
    function holaRaul(){   //Todo está dentro de hola mundo y luego se manda a llamar
        echo PHP_OS;  //Sistema operativo
        echo "<br>";
        echo PHP_VERSION;
        echo "<br>";
        echo PHP_EXTENSION_DIR;
        echo "<br>";
        echo __LINE__;
        echo "<br>";
        echo __FILE__;
        echo "<br>";
        echo __FUNCTION__;
       
    }
    
    holaRaul();
?>