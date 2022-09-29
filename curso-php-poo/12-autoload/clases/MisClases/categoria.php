<?php
namespace MisClases;

class Categoria{
    public $nombre;
    public $descripcion;

    public function __construct() {
        $this->nombre = "Estrategia MOBA";
        $this->descripcion = "Categoria enfocada a las revew de videojuegos de estrategia MOBA";
    }    
}
