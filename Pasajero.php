<?php

class Pasajero{
//ATRIBUTOS
private $nombre;
private $nroAsiento;
private $nroTicket;

//METODO CONSTRUCT
public function __construct($nombre, $nroAsiento, $nroTicket){
    $this -> nombre = $nombre;
    $this -> nroAsiento = $nroAsiento;
    $this -> nroTicket = $nroTicket;
}

//METODO DE ACCESO GET
public function getNombre (){
    return $this -> nombre;
}
public function getNroAsiento (){
    return $this -> nroAsiento;
}
public function getNroTicket (){
    return $this -> nroTicket;
}

//METODO DE ACCESO SET
public function setNombre ($nombreNuevo){
    $this -> nombre = $nombreNuevo;
}
public function setNroAsiento ($nroAsientoNuevo){
    $this -> nroAsiento = $nroAsientoNuevo;
}
public function setNroTicket ($nroTicketNuevo){
    $this -> nroTicket = $nroTicketNuevo;
}

//METODO __toString
public function __toString(){
  return  
}

/**
 * da el porcentaje de incremento
 */
public function darPorcentajeIncremento(){
    $porcentaje = 35;
    return $porcentaje;
}


}