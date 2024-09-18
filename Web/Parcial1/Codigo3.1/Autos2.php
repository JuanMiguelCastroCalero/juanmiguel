<?php
/*
    Parcial     1
    Codigo      3.1
    Objetivo    Repaso de la clase
    Fecha       11 Septiembre 2024
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
    public $kilometraje;

    public function __construct($marca,$modelo,$precio,$year,$pasajeros,$gas,$estado,$kilometraje){
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->precio=$precio;
        $this->year=$year;
        $this->pasajeros=$pasajeros;
        $this->gas=$gas;
        $this->estado=$estado;
        $this->kilometraje=$kilometraje;
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
            $this->kilometraje = $this->kilometraje + (5 * 10);
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
            $this->kilometraje = $this->kilometraje + (30 * 10);
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
            echo "Marca: " . $this->marca ."<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Precio: " . $this->precio . "<br>";
            echo "Año: " . $this->year . "<br>";
            echo "Pasajeros: " . $this->pasajeros . "<br>";
            echo "Gasolina: " . $this->gas . "<br>";
            echo "Estado: " . $this->estado . "<br>";
        }
        else{
            echo "No se pueden imprimir los datos ya que el auto se encuentra apagado" . "<br>";
        }
    }

    public function viajelibre($km){
        $consumogas=$km/10;
        if($this->estado){
            if($this->gas>=$consumogas){
                $this->gas=$this->gas-$consumogas;
                $this->kilometraje = $this->kilometraje + $km;
                echo "El auto hizo un viaje libre de " . $km . " km" . "<br>";
            }
            else{
                echo "No se puede realizar el viaje libre porque no tiene suficiente gasolina" . "<br>";
            }
        }
        else{
            echo "No se puede realizar el viaje libre ya que el auto se encuentra apagado" . "<br>";
        }
    }
    public function kilometraje(){
        if($this->estado){
            echo "El auto tiene recorrido un total de " . $this->kilometraje . " kilometros" . "<br>";
        }
        else{
            echo "No se puede mostrar el kilometraje ya que el auto se encuentra apagado" . "<br>";
        }
    }

    public function reiniciarkm(){
        if($this->estado){
            $this->kilometraje=0;
            echo "El kilometraje del auto ha sido reiniciado" . "<br>";
        } 
        else{
            echo "No se puede reiniciar el kilometraje ya que el auto se encuentra apagado" . "<br>";
        }
    }

    public function llenargasolina($litros){
        if($this->estado){
            $litros=100-$this->gas;
            $this->gas+=$litros;
            echo "Se ha llenado el tanque de gasolina del auto" . "<br>";
        } 
        else{
            echo "No se puede llenar la gasolina ya que el auto se encuentra apagado" . "<br>";
        }
    }

    
}

    

    


?>