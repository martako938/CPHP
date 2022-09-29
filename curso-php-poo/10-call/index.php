<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;
    
    public function __construct($nombre, $edad, $ciudad){
        $this->nombre =$nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
    

       
    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0, 3);  //Saca las primeras 3 letras del metodo
        //que no existe
        
        if($prefix_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name),3); //Saca a partir de la tercer letra
            //elnombre del metodo que no existe
            
            if(!isset($this->$nombre_metodo)){
                return "El metodo invocado no existe";
            }
            return $this->$nombre_metodo;
        }
        else{
            return "El metodo invocado no existe";
        }
   
        return $nombre_metodo;
    }
 }

$persona = new Persona("Raul", 27, "Mexico");
echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();

//Estos dos metodos no existen
//echo $persona->setCiudad();
//echo $persona->getHola();
