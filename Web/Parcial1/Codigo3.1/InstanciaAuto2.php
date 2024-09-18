<?php
/*
    Parcial     1
    Codigo      3.1
    Objetivo    Repaso de la clase
    Fecha       11 Septiembre 2024
    Autor       Juan Miguel Castro Calero
*/

require_once('Autos.php');

$auto1=new Autos("Mercedes Benz","A 200 MH Progressive",200000,2023,2,100,false,0);

$auto1->encender();
$auto1->imprimirdatos();
$auto1->viajecorto();
$auto1->kilometraje();
$auto1->viajelibre(50);
$auto1->kilometraje();
$auto1->mostrargasolina();
$auto1->reiniciarkm();
$auto1->llenargasolina($litros);
$auto1->mostrargasolina();
$auto1->kilometraje();
