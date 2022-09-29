<?php

class Usuario{
    
    const URL_COMPLETA = "http://localhost";
    public $email;
    public  $pasword;
    
    function getEmail() {
        return $this->email;
    }

    function getPasword() {
        return $this->pasword;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPasword($pasword) {
        $this->pasword = $pasword;
    }


    
}

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               $usuario = new Usuario();
echo $usuario::URL_COMPLETA;
var_dump($usuario);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
