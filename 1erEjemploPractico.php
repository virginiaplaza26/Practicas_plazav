<?php
class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad; 
    }

public function hablar() {
    echo "Hola, mi nombres es " . this->nombre;
}    

public function caminar(){
    echo $this->nombre . " está caminando.";
 }
}

//Creacion de un objeto
$Persona=new Persona("Virginia",42);
$persona->hablar();
?>