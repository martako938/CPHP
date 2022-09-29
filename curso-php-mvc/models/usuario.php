<?php
require_once 'ModeloBase.php';

class Usuario extends ModeloBase{
    public $nombre;
    public $apellidos;
    public $email;
    public $paswords;
    
    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPaswords() {
        return $this->paswords;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPaswords($paswords) {
        $this->paswords = $paswords;
    }

    
}

