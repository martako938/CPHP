<?php

trait Utilidades{
    public function mostrarNombre() {
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    use Utilidades;
    
}

class Videojuego{
    public $nombre;
    public $anio;
    use Utilidades;
    
}

$coche = new Coche();
$persona =new Persona();
$videojuego = new Videojuego();

$coche->nombre ="Durango Nena";
$coche->mostrarNombre();

$persona->nombre="Carreto";
$persona->mostrarNombre();

$videojuego->nombre="GTA 5";
$videojuego->mostrarNombre();