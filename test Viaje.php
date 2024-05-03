<?php   
include_once "Viaje.php";
include_once "Pasajeros.php";
include_once "ResponsableV.php";

function menuDeOpciones(){
    echo "___________________________________________________________ \n";
    echo "|       Seleccione una opción                              |\n "; 
    echo "| 1) Cargar informacion de viaje                           |\n" ;
    echo "| 2) Modificar informacion de un viaje                     |\n" ;
    echo "| 3) Ver los datos de un viaje                             |\n";
    echo "| 4) Modificar datos de pasajeros                          |\n";
    echo "| 5) Agregar pasajeros a un viaje                          |\n" ;
    echo "| 6) Cargar informacion del responsable del viaje          |\n";
    echo "| 7) Salir                                                 |\n";
    echo "|__________________________________________________________| \n";

    $opcion = trim(fgets(STDIN));

    echo "\n";
    return $opcion;
}