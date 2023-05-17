<?php
include_once("Pasajero.php");
class PasajeroEspecial extends Pasajero{
//ATRIBUTOS
private $especial;

//METODO CONSTRUCT
public function __construct($nombre, $nroAsiento, $nroTicket, $especial){
    parent :: __construct($nombre, $nroAsiento, $nroTicket);
    $this -> especial = $especial;
}

//METODO DE ACCESO GET
public function getEspecial (){
    return $this -> especial;
}

//METODO DE ACCESO SET
public function setEspecial ($nuevoEspecial){
    $this -> especial = $nuevoEspecial;
}

//METODO __toString
public function __toString(){
  return  ;
}

public function darPorcentajeIncremento(){
    $porcentaje = 0;
    $resultado =0;
    $n = count($this -> getEspecial());
    //$valor = true;
    //while($i < $n && $valor){
    for($i=0;$i<$n;$i++){
        if($this -> getEspecial()[$i] == "r"){
            $resultado ++;
        }
        if($this -> getEspecial()[$i] =="s"){
            $resultado ++;
        }
        if ($this -> getEspecial()[$i] =="c"){
            $resultado++;
        }
    }
    if ($resultado == 3){
        $porcentaje = 30;
    } elseif ($resultado == 1){
        $porcentaje = 15;
    }
    return $porcentaje;
  }



}