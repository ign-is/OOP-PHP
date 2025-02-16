<?php
namespace MisClases;

class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Juan Doe";
        $this->email = "juan@juan.com";
    }
}
