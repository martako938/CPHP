<h1>Bienvenido a SM8 con MVC</h1>
<?php
require_once 'autoload.php';

if(isset($_GET['controller'])  && class_exists($_GET['controller'].'Controller')){ // se le concatena .'Controller'  para que la url sea mas corta
    $nombre_controlador = $_GET['controller'].'Controller';
    
    $controlador = new $nombre_controlador();
    //$controlador->mostrarTodos();
    //$controlador->crear();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }else{
        echo  "La pagina que buscas no existe 1";
        
    } 
}else{
    echo  "La pagina que buscas no existe 2";
    var_dump($nombre_controlador);
}


