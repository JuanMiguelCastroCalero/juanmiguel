<?php
/*
    Parcial     1
    Codigo      3
    Objetivo    Repaso de la clase
    Fecha       9 Septiembre 2024
    Autor       Juan Miguel Castro Calero
*/

class Autos
{
    public $marca;
    public $modelo;
    public $precio;
    public $year;
    public $pasajeros;
    public $gas;
    public $estado;

    public function __construct($marca,$modelo,$precio,$year,$pasajeros,$gas,$estado){
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->precio=$precio;
        $this->year=$year;
        $this->pasajeros=$pasajeros;
        $this->gas=$gas;
        $this->estado=$estado;
    }

    public function encender(){
        if(!$this->estado){
            echo "El auto " . $this->marca . " fue encendido" . "<br>";
            $this->estado=true;
        }
        else{
            echo "El auto " . $this->marca . " ya esta encendido" . "<br>";
        }
    }

    public function apagar(){
        if($this->estado){
            echo "El auto " . $this->marca . " fue apagado" . "<br>";
            $this->estado=false;
        }
        else{
            echo "El auto " . $this->marca . " ya esta apagado" . "<br>";
        }
    }

    public function mostrargasolina(){
        if($this->estado){
            if($this->gas<=0){
                echo "Se encuentra con 0 Litros de gasolina" . "<br>";
            }
            else{
                echo "El auto tiene " . $this->gas . " Litros de gasolina" . "<br>";
            }
        }
        else{
            echo "No se puede mosrar la gasolina ya que el auto esta apagado" . "<br>";
        }
    }

    public function viajecorto(){
        if($this->estado){
            $this->gas=$this->gas-5;
            if($this->gas<=4){
                echo "No se puede hacer el viaje corto porque no tiene suficiente gasolina" . "<br>";
                
            }
            else{
                echo "El auto hizo un viaje corto" . "<br>";
            }
        }
        else{
            echo "No se puede realizar el viaje corto ya que el auto se encuentra apagado" . "<br>";
        }
        
            
    }

    public function viajelargo(){
        if($this->estado){
            $this->gas=$this->gas-30;
            if($this->gas<=29){
                echo "No se puede hacer el viaje largo porque no tiene suficiente gasolina" . "<br>";
                
            }
            else{
                echo "El auto hizo un viaje largo" . "<br>";
            }
        }
        else{
            echo "No se puede realizar el viaje largo ya que el auto se encuentra apagado" . "<br>";
        }
        
    }

    public function imprimirdatos(){
        if($this->estado){
            echo "Datos" . "<br>";
        }
    }

}






?>