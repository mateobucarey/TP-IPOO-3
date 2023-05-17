<?php
class ViajeFeliz2 {
    //ATRIBUTOS
    private $codigo;
    private $destino;
    private $objetoResponsable;
    private $colObjectPasajeros;
    //PRIVATE $objResponsable (hacer set get y tostring)
    //METODOS
    public function __construct($codigo, $destino, $objResponsable, $coleccionObjPasajeros){
        $this -> codigo= $codigo;
        $this -> destino= $destino;
        $this -> objetoResponsable = $objResponsable;
        $this -> colObjectPasajeros = $coleccionObjPasajeros;
    } 

    //METODO GET para obtener los valores de los atributos
    
    public function getCodigo (){
        return $this -> codigo;
    }
    public function getDestino (){
        return $this -> destino;
    }
    public function getObjetoResponsable (){
        return $this -> objetoResponsable;
    }
    public function getColObjectPasajeros (){
        return $this -> colObjectPasajeros;
    }

//METODO SET para modificar los datos 

    public function setCodigo($codigo){
        $this -> codigo = $codigo;
    }
    public function setDestino ($destino){
        $this -> destino = $destino;
    }
    public function setObjetoResponsable ($objectResponsableMod){
        $this -> objetoResponsable = $objectResponsableMod;
    }
    public function setColObjectPasajeros ($colObjectPasajerosMod){
        $this -> colObjectPasajeros = $colObjectPasajerosMod;
    }


    //operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero.
    function verificarPasajero ($dni){
        //boolean $valor
        //comprobar que el dni se encuentre dentro del dni de algun pasajero
        $valor = false; 
        $n = count($this -> getColObjectPasajeros());
        $i=0;
        while ($i<$n && $valor== false ){
            if ($dni == ($this->getColObjectPasajeros()[$i])->getDni()){
                $valor = true;
            }
         $i++;   
        }
        return $valor;
    }
    function modificarPasajeros($dniNuevo,$nombreNuevo,$apellidoNuevo,$telefonoNuevo){
            $valor = false;
            $n = count($this -> getColObjectPasajeros());
            $i=0;
        
            while ($i<$n && $valor== false ){
                if ($dniNuevo == ($this->getColObjectPasajeros()[$i])->getDni()){
                    $valor = true;
                    $this -> getColObjectPasajeros()[$i]->setNombre($nombreNuevo);
                    $this -> getColObjectPasajeros()[$i]-> setApellido($apellidoNuevo);
                    $this -> getColObjectPasajeros()[$i]-> setTelefono($telefonoNuevo);
                }
                $i++;
            }
    }

    function agregarPasajeros($objectPasajero){
       
        array_push($this->getColObjectPasajeros(),$objectPasajero);
    }

    function verificarLicencia($numLicencia){
        $valor = false;
        $numLicenciaActual = $this ->getObjetoResponsable()-> getNumLicencia();
        if($numLicencia==$numLicenciaActual){
            $valor = true;
        }
    return $valor;
    }


    public function __toString(){
        $n = count($this-> getColObjectPasajeros());
        $arregloPasajeros= null;
        for($i=0;$i<$n;$i++){
            $pasajeros = $this -> getColObjectPasajeros()[$i];
            $arregloPasajeros= $pasajeros . $arregloPasajeros;
        }

     $cadena = "codigo". $this -> getCodigo(). "destino ". $this-> getDestino(). "Persona responsable ". $this -> getObjetoResponsable().
     "pasajeros". $arregloPasajeros;
    return $cadena;
    }
}
        

        

    
    
