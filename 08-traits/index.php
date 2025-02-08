<?php

trait Utilidades {
    public function mostrarNombre() {
        echo "<h1>EL nombre es ".$this->nombre."</h1>";
    }
}

class Cochee {
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona {
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoJuego {
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Cochee();
$coche->nombre = "Ferrari Testarosa";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Antonio Machado";
$persona->mostrarNombre();

$videojuego = new VideoJuego();
$videojuego->nombre = "GTA 4";
$videojuego->mostrarNombre();
