<?php

abstract class Computadora{
    
    public $encendido;
 
    abstract public function encender(); 
       
    public function apagar() {
        $this->encendido = false;
    }
}

class PCAsus extends Computadora{
    public  $software; 
    
    public function arrancarSoftware() {
        $this->software = true;
    }
    
    public function encender() {
        $this->encendido = true;
    }
}

$computadora = new PCAsus();
$computadora->arrancarSoftware();
$computadora->encender();
$computadora->apagar();
var_dump($computadora);

