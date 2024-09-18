<?php
/*
    Parcial     1
    Codigo      2
    Objetivo    Constructor y comportamientos
    Fecha       5 Septiembre 2024
    Autor       Juan Miguel Castro Calero
*/

class Telefono{
    //Propiedades
    public $color;
    public $almacenamiento;
    public $modelo;
    public $marca;
    public $precio;
    public $estado;

    public function __construct($color,$almacenamiento,$modelo,$marca,$precio,$estado)
    {
        $this->color=$color;
        $this->almacenamiento=$almacenamiento;
        $this->modelo=$modelo;
        $this->marca=$marca;
        $this->precio=$precio;
        $this->estado=$estado;
    }
    //Comportamientos
    public function encender(){
        if(!$this->estado){
            echo "El telefono " . $this->marca . " fue encendido" . "<br>";
            $this->estado=true;
        }
        else{
            echo "El telefono " . $this->marca . " ya esta encendido" . "<br>";
        }
    }
    
    public function apagar(){
        if($this->estado){
            echo "El telefono " . $this->marca . " fue apagado" . "<br>";
            $this->estado=false;
        }
        else{
            echo "El telefono " . $this->marca . " ya esta apagado" . "<br>";
        }
    }

    public function caracteristicas(){
        if($this->estado){
            echo "--------------------" . "<br>";
            echo "Marca:" . $this->marca . "<br>";
            echo "Modelo:" . $this->modelo . "<br>";
            echo "Color:" . $this->color . "<br>";
            echo "Almacenamiento:" . $this->almacenamiento . "GB<br>";
            echo "Precio:" . $this->precio . "<br>";  
            echo "Estado:" . $this->estado . "<br>";              
            echo "--------------------" . "<br>";
        }
        else{
            echo "No se pueden mostrar las caracteristicas ya que el telefono " . $this->marca . " se encuentra apagado" . "<br>";
        }
        
    }

    public function foto(){
        if($this->estado){
            $this->almacenamiento=$this->almacenamiento-0.01;
            if($this->almacenamiento>=0.01){
                echo "Foto guardada con exito" . "<br>";
            }
            else{
                echo "Error. Foto no se puede tomar, almacenamiento insuficiente" . "<br>";
            }
        }
        else{
            echo "No se puede tomar la foto ya que el telefono " . $this->marca . " se encuentra apagado" . "<br>";
        }
    }

    public function fotohd(){
        if($this->estado){
            $this->almacenamiento=$this->almacenamiento-0.1;
            if($this->almacenamiento>=0.1){
                echo "Foto HD guardada con exito" . "<br>";
            }
            else{
                echo "Error. Foto HD no se puede tomar, almacenamiento insuficiente" . "<br>";
            }
        }
        else{
            echo "No se puede tomar la foto HD ya que el telefono " . $this->marca . " se encuentra apagado" . "<br>";
        }
    }
}


?>