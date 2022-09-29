<?php

//Para poder imprimir el objeto convirtiendolo a string

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Brayan Cabrera";
        $this->email = "martako938@gmail.com";
        echo "Instancia del objeto creada<br/>";
    }
    
    public function __toString(){
        return "Hola, {$this->nombre}, estas registrado con: {$this->email}";
    }
    
    public function __destruct() {
        echo "<br/>Destruyendo el objeto";
    }
    
}

$usuario = new Usuario();
echo $usuario;


/*
for($i =0; $i <= 30; $i++){
    echo $i."</br>";
}
 */