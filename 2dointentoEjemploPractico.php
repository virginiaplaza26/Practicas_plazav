<?php
class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function hablar() {
        echo "Hola, mi nombre es " . $this->nombre;
    }

    public function caminar() {
        echo $this->nombre . " está caminando.";
    }
}

// Creación de un objeto
$persona = new Persona("Virginia", 42);
$persona->hablar();
?>

