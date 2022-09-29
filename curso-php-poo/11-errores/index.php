<?php

try{
    
    if(isset($_GET['id'])){
        echo "<h1>El parametro es: {$_GET['id']}</h1>"; // Verifica si llega id 
        //mediante la URL
    }else{
        throw new Exception('Faltan parametros por la URL');
    }    
    
} catch(Exception $e){
    echo "Ocurrio un error: ".$e->getMessage();
}



