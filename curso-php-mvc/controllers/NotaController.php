<?php

class NotaController{
    
    public function listar() {
        //Modelo
        require_once 'models/nota.php';
    
        //Logica accion del controlador
        $nota = new Nota();
        $nota->setNombre("Hola Nota");
        $nota->setContenido("Hola Nota PHP MVC");
        
        //Vista
        require_once 'views/nota/listar.php';
    }
    
    public function crear() {
        
    }
    
    public function borrar() {
        
    }
    
}
