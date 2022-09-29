<?php

interface Computadora{
    public function encender();
    public function apagar();
    public function desfragmentar();
    public function reiniciar();
}

class iMac implements Computadora{
    private $modelo;
    
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function encender(){
        ;
    }
    public function apagar() {
        ;
    }
    public function desfragmentar() {
        ;
    }
    public function reiniciar() {
        ;
    }
}

$maquintos = new iMac();
$maquintos->setModelo('Macbook Pro ');
echo $maquintos->getModelo();

//var_dump($maquintos);