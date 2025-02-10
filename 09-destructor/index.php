<?php

class Usuario {
    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Juan Doe";
        $this->email = "juandoe@email.com";
        // Esto no se debe hacer
        // es solo con fines didacticos
        echo "Creando el objeto <br/>";
    }

    public function __toString() {
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct() {
        echo "<br/> Destruyendo el objeto";
    }
}

$usuario = new Usuario(); 

// for($i = 0; $i <= 200; $i++) {
//     echo $i."<br/>";
// }

echo $usuario;