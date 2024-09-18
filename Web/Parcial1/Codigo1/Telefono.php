<?php
/*
    Codigo    1
    Objetivo    Declaracion de clase basica
    Fecha   30 Agosto 2024
    Fecha de modificacion:   2 Seotiembre 2024
    Modificaciones:
        Se agrego el atributo precio
        Se incremento el numero de iteraciones a 4
    Autor   Juan Miguel Castro Calero
*/

class Telefono{
    //Propiedades
    public $color;
    public $almacenamiento;
    public $modelo;
    public $marca;
    public $precio;

    //Comportamientos
    public function encender(){
        echo "El telefono" . $this->marca . " fue encendido" . "<br>";
    }
    
    public function apagar(){
        echo "El telefono" . $this->marca . " fue apagado" . "<br>";
    }

    public function caracteristicas(){
        echo "--------------------" . "<br>";
        echo "Marca:" . $this->marca . "<br>";
        echo "Modelo:" . $this->modelo . "<br>";
        echo "Color:" . $this->color . "<br>";
        echo "Almacenamiento:" . $this->almacenamiento . "<br>";
        echo "Precio:" . $this->precio . "<br>";        
        echo "--------------------" . "<br>";
    }
}


?>