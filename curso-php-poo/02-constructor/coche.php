<?php

class coche{
    // Atributos o propiedades (variables)
    
    //PUBLIC Se puede acceder a el desde cualquier lugar
    public $color;
    
    //PROTECTED: Podemos acceder a el desde la clase que los define
    //y desde clases que hereden de esta clase
    protected $marca;
    
    //PRIVATE: Unicamente se accede desde la clase que los define
    private $modelo;
    
    
    public $velocidad;
    public $potencia;
    public $lugares;
    
    public function __construct($color, $marca, $modelo, $velocidad, $potencia, $lugares) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->potencia = $potencia;
        $this->lugares = $lugares;
    }
    
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
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
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
    
    public function mostrarInformacion(Coche $miCarro) {
        if(is_object($miCarro)){
            $informacion = "<h1>Informacion del coche</h1>";
            $informacion .= "Color: ".$miCarro->color;
            $informacion .= "<br/> Modelo: ".$miCarro->modelo;
            $informacion .= "<br/> Velocidad: ".$miCarro->velocidad;
        }else{
            $informacion = "Tu dato es este: $miCarro";
        }
        return $informacion;
    
    }
    
} //fin de la definicion clase