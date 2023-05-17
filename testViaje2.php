<?php
include "viajeFeliz2.php";
include "Pasajero.php";
include "ResponsableV.php";

/**
 * Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido, numero de documento y teléfono.
 *  El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero. También se desea guardar la información de 
 * la persona responsable de realizar el viaje, para ello cree una clase ResponsableV que registre el número de empleado, número de licencia,
 *  nombre y apellido. La clase Viaje debe hacer referencia al responsable de realizar el viaje.
* Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. Luego implementar la operación que 
*agrega los pasajeros al viaje, solicitando por consola la información de los mismos. Se debe verificar que el pasajero no 
*este cargado mas de una vez en el viaje. De la misma forma cargue la información del responsable del viaje.
   */ 

    



/**
 * Menu de pasajeros
 */
function menuPasajeros(){
//int $opcionMenu

do {
    echo "------MENU DE OPCIONES------
1- Ingresar datos del viaje y cargar los pasajeros precargados: 
2- Modificar datos del viaje: 
3- Modificar los datos de los pasajeros
4- Agregar pasajeros:
5- Modificar los datos del responsable del Viaje:
6- Salir\n";
$opcionMenu = trim(fgets(STDIN));
if ($opcionMenu<0 || $opcionMenu >7){
    echo "La opcion ingresada es invalida, ingrese una opcion entre el 1 y el 7: ";
    $opcionMenu = trim(fgets(STDIN));
}
}while ($opcionMenu<0 || $opcionMenu >7 );

return $opcionMenu;
}


do {
    $opcionMenu= menuPasajeros();
    switch ($opcionMenu) {
     case 1:
        echo "Ingrese el codigo del viaje: ";
        $codigoViaje= trim(fgets(STDIN));
         echo "Ingrese el destino: ";
        $destino = trim(fgets(STDIN));
         echo "Ingrese la cantidad maxima de pasajeros: ";
        $cantMaxPasajeros = trim(fgets(STDIN));
        
        
        $objectPasajero1 = new Pasajero ("Jose","Garcia",333123, 1548928);
        $objectPasajero2 = new Pasajero ("Jazmin","Valenzuela",43530680,154584611);
        $objectPasajero3 = new Pasajero ("Nico", "Bucarey",41911258,154573646);
        $objectPasajero4 = new Pasajero ("Lionel", "Messi", 32897323,15419481);

        $coleccionObjPasajeros =[];
        $coleccionObjPasajeros[0]= $objectPasajero1;
        $coleccionObjPasajeros[1]= $objectPasajero2;
        $coleccionObjPasajeros[2]= $objectPasajero3;
        $coleccionObjPasajeros[3]= $objectPasajero4;

        
            
        $objectResponsable = new ResponsableV(12345,98765,"Alberto","Sanchez");
        $objectViaje = new ViajeFeliz2($codigoViaje, $destino, $objectResponsable, $coleccionObjPasajeros);

    break;
    case 2:
     echo "¿Desea modificar el codigo? SI/NO: ";
            $rta = trim(fgets(STDIN));
            if ($rta== "SI"){
                echo "Ingrese el nuevo codigo: ";
                $codigoMod = trim(fgets(STDIN));
                $objectViaje -> setCodigo ($codigoMod);
                echo $objectViaje -> getCodigo();
             }
        echo "\nDesea modificar el destino? SI/NO: ";
            $rta = trim(fgets(STDIN));
            if ($rta== "SI"){
                echo "Ingrese el nuevo destino";
                $destinoMod = trim(fgets(STDIN));
                $objectViaje -> setDestino ($destinoMod);
                echo $objectViaje -> getDestino();
            }            
        echo $objectViaje; 

    break;

    case 3:
        echo "Desea modificar los datos de algun pasajero?s/n \n";
        $rta = trim(fgets(STDIN));
        if($rta== "s"){
            echo "ingrese el dni del pasajero que desea modificar: ";
            $dniNuevo = trim(fgets(STDIN));
            do{
                $valor = $objectViaje -> verificarPasajero($dniNuevo);
                if ($valor== false){
                    echo "el Dni es incorrecto o no se ha cargado previamente, intente de nuevo";
                    $dniNuevo = trim(fgets(STDIN));
                }else{
                    echo "desea modificar el nombre?s/n";
                    $rta = trim(fgets(STDIN));
                    if ($rta=="s"){
                        echo "ingrese el nombre nuevo";
                        $nombreNuevo= trim(fgets(STDIN));
                     }
                     echo "desea modificar el apellido?s/n";
                     $rta = trim(fgets(STDIN));
                     if ($rta=="s"){
                        echo "ingrese el apellido nuevo: ";
                        $apellidoNuevo = trim(fgets(STDIN));
                     }
                     echo "desea modificar el numero de telefono?s/n ";
                     $rta = trim(fgets(STDIN));
                     if($rta=="s"){
                        echo "ingrese el numero de telefono nuevo: ";
                        $telefonoNuevo = trim(fgets(STDIN));
                     }

                    $objectViaje -> modificarPasajeros($dniNuevo,$nombreNuevo,$apellidoNuevo,$telefonoNuevo);
                    echo $objectViaje;
                }                

           }while ($valor == false);  
         }
    break;
    case 4:
        echo "ingrese el dni del pasajero a ingresar";
        $agregarDni = trim(fgets(STDIN));
        do{        
        $valor = $objectViaje -> verificarPasajero($agregarDni);
        if ($valor){
            echo "error, este dni ya se encuentra cargado previamente, ingrese el dni nuevamente ";
            $agregarDni = trim(fgets(STDIN));
        }else{
            echo "ingrese el Nombre a agregar: ";
            $agregarNombre = trim(fgets(STDIN));
            echo "ingrese el Apellido a agregar: ";
            $agregarApellido= trim(fgets(STDIN));
            echo "ingrese el numero de telefono: ";
            $agregarTelefono = trim(fgets(STDIN));
            $objectPasajero = new Pasajero ($agregarDni,$agregarNombre,$agregarApellido,$agregarTelefono);

            $objectViaje -> agregarPasajero($objectPasajero);
            echo $objectViaje;
        }
        }while($valor==true);
       
    break;
    
    
    case 5:
        echo $objectResponsable;
        echo "modificar el responsable del Viaje, ingrese el numero de licencia";
        $numeroLicencia = trim(fgets(STDIN));
        do {
            $valor = $objectViaje -> verificarLicencia($numeroLicencia);
            if ($valor){
                echo "este numero de licencia ya se encuentra cargado, intente nuevamente";
                $numeroLicencia;
            }else{
                $objectResponsable -> setNumLicencia($numeroLicencia);
                echo "ingrese el numero de empleado: ";
                $numEmpleadoNuevo = trim(fgets(STDIN));
                $objectResponsable-> setNumEmpleado($numEmpleadoNuevo);
                echo "ingrese nombre nuevo: ";
                $nombreNuevo = trim(fgets(STDIN));
                $objectResponsable -> setNombre($nombreNuevo);
                echo "ingrese apellido nuevo; ";
                $apellidoNuevo = trim(fgets(STDIN));
                $objectResponsable-> setApellido($apellidoNuevo);
                echo $objectResponsable;
            }

        }while($valor==true);
        break;
        
   
    case 6: 
       
        echo $objectViaje;

        
        break;

    }
}while($opcionMenu != 7);



 
