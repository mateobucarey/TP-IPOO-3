<?php
include_once ("Pasajero.php");
class PasajeroVip extends Pasajero{
//ATRIBUTOS
//iene como atributos adicionales el número de viajero frecuente y cantidad de millas de pasajero.
private $nroViajeroFrec;
private $cantMillasPasajero;

//METODO CONSTRUCT
public function __construct($nombre, $nroAsiento, $nroTicket, $nroViajeroFrec,$cantMillasPasajero){
    parent :: __construct ($nombre,$nroAsiento, $nroTicket);
    $this -> $nroViajeroFrec;
    $this -> $cantMillasPasajero;
}

//METODO DE ACCESO GET
public function getNroViajeroFrec (){
    return $this -> nroViajeroFrec;
}
public function getCantMillasPasajero (){
    return $this -> cantMillasPasajero;
}
//METODO DE ACCESO SET
public function setNroViajeroFrec ($nroViajeroFrecNuevo){
    $this -> nroViajeroFrec = $nroViajeroFrecNuevo;
}
public function setCantMillasPasajero ($cantMillasPasajeroNuevo){
    $this -> cantMillasPasajero = $cantMillasPasajeroNuevo;
}

//METODO __toString
public function __toString(){
  return  
}
public function darPorcentajeIncremento(){
  $porcentaje = 35;
  if ($this-> getCantMillasPasajero()>300){
    $porcentaje = $porcentaje + 30;
  }  
  return $porcentaje;
}


}