<?php
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Juan Gonzalez";
        $this->email = "jgonzalez@sm8.com.mx";
    }    
}
