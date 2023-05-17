<?php
//número de empleado, número de licencia, nombre y apellido.
class ResponsableV{

private $numEmpleado;
private $numLicencia;
private $nombre;
private $apellido;

public function __construct($numEmpleado,$numLicencia,$nombre,$apellido){
$this -> numEmpleado = $numEmpleado;
$this -> numLicencia = $numLicencia;
$this -> nombre = $nombre;
$this -> apellido = $apellido;
}
//Metodos get 

public function getNumEmpleado (){
    return $this -> numEmpleado;
}
public function getNumLicencia(){
    return $this -> numLicencia;
}
public function getNombre(){
    return $this -> nombre;
}
public function getApellido(){
    return $this -> apellido;
}
//Metodos set

public function setNumEmpleado($numEmpleadoMod){
    $this -> numEmpleado = $numEmpleadoMod;
}
public function setNumLicencia($numLicenciaMod){
    $this -> numLicencia = $numLicenciaMod;
}
public function setNombre($nombreMod){
    $this -> nombre = $nombreMod;
}
public function setApellido($apellidoMod){
    $this -> apellido = $apellidoMod;
}

public function __toString()
{
    return "nombre: ". $this -> getNombre(). "apellido: ". $this -> getApellido(). "num de licencia: ". $this -> getNumLicencia().
    "num de empleado: ". $this -> getNumEmpleado();
}



}