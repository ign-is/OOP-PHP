<?php
require_once 'autoload.php';

/*
$usuario = new Usuario();
echo $usuario->nombre;
echo "<br/>";
echo $usuario->email;

$categoria = new Categoria();
echo "<br/>". $categoria->nombre;
*/

// ESPACIOS DE NOMBRES Y PAQUETES
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
//use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal {
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    function getUsuario() {
        return $this->usuario;
    }

    function informacion() {
        echo __FILE__;
    }

}

// Objeto principal
$principal = new Principal();
$principal->informacion();
//var_dump($principal->usuario);
$metodos = get_class_methods($principal);

$busqueda = array_search('getUsuario', $metodos);
echo "<br/>";
var_dump($busqueda);

// Objeto otro paquete
// $usuario = new UsuarioAdmin();
// var_dump($usuario);

// Comprobar si existe una clase
$clase = class_exists('PanelAdministrador\Usuario');
if($clase) {
    echo "<br/><h1>La clase SI existe</h1>";
} else {
    echo "<br/><h1>La clase NO existe</h1>";
}