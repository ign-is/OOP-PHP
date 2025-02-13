<?php
namespace PanelAdministrador;

class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Mike Tyson";
        $this->email = "mike@mike.com";
    }
}