<?php

interface Ordenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();

}

class iMac implements Ordenador {
    private $modelo;

    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function encender() {
        return "Lo que sea";
    }

    public function apagar() {
        return "Lo que sea";
    }
    
    public function reiniciar() {
        return "Lo que sea";
    }

    public function desfragmentar() {
        return "Lo que sea";
    }

    public function detectarUSB() {
        return "Lo que sea";
    }
}

$maquintos = new iMac();
$maquintos->setModelo('Macbook PRO 2045');
echo $maquintos->getModelo(0);