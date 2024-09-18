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

//Incluyo la clase en mi codigo 
require_once('Telefono.php');

//Se crea el objeto o la instancia
$iphone=new Telefono();

$iphone->color="White";
$iphone->marca="Apple";
$iphone->modelo="iphone 16 pro max";
$iphone->almacenamiento="512 GB";
$iphone->precio="30000";

$huawei=new Telefono();

$huawei->color="Red";
$huawei->marca="Huawei";
$huawei->modelo="Huawei P40 5G";
$huawei->almacenamiento="128 GB";
$huawei->precio="6500";

$redmi=new Telefono();

$redmi->color="Black";
$redmi->marca="Xiaomi";
$redmi->modelo="Redmi Note 13 Pro";
$redmi->almacenamiento="256 GB";
$redmi->precio="4500";

$samsung=new Telefono();

$samsung->color="Green";
$samsung->marca="Samsung";
$samsung->modelo="Samsung Galaxi S23 Ultra";
$samsung->almacenamiento="256 GB";
$samsung->precio="15000";

$iphone->caracteristicas();
$huawei->caracteristicas();
$redmi->caracteristicas();
$samsung->caracteristicas();

?>