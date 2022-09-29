<?php
//Programacion orianteada a objetos en PHP (POO)

//Definir una clase molde para crear mas ojetos de tipo coche
//con careacteristicas parecidas

class coche{
    // Atributos o propiedades (variables)
    public $color = "Rojo";
    public $marca = "Ford";
    public $modelo = "Mustang";
    public $velocidad = 300;
    public $potencia = 500;
    public $lugares = 2;
    
    //Metodos, son acciones que hace el objeto (antes funciones)
    public function getColor(){
        // Busca en esta clase la propiedad X
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

        public function acelerar(){
        $this->velocidad++;
    }
    
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad() {
        return $this->velocidad;
    }
    
} //fin de la deficinicion de la clase

// Crear un objeto / instanciar la clase

$coche = new Coche();

var_dump($coche);

//Usar los metodos

//Dice que velocidad va
//echo $coche->getVelocidad();

//Cambiar el color 
$coche->setColor("Naranja");

echo "El color del coche es: ".$coche->getColor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad de coche: ".$coche->getVelocidad();

$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Nissan");
var_dump($coche);
var_dump($coche2);