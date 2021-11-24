<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */





/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/


function seleccionarOpcion(){
      
    do{
        echo "--------------------------------------------------------------\n";
        echo "INGRESE NÚMERO DE OPCIÓN:\n";
        echo "--------------------------------------------------------------\n";
        echo "\n  1 - Jugar al tateti";
        echo "\n  2 - Mostrar un juego";
        echo "\n  3 - Mostrar el primer juego ganador";
        echo "\n  4 - Mostrar porcentaje de Juegos ganados";
        echo "\n  5 - Mostrar resumen de Jugador";
        echo "\n  6 - Mostrar listado de juegos Ordenado por jugador O";
        echo "\n  7 - salir\n";
        echo "--------------------------------------------------------------\n";
        $opcionElegida= trim(fgets(STDIN));
        
    }WHILE ($opcionElegida <0 & $opcionElegida > 8);  
    
        return $opcionElegida;
    
}


/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:

//Inicialización de variables:

//Proceso:

//print_r($juego);
//imprimirResultado($juego);


$opcion = seleccionarOpcion();
    
switch ($opcion) {
case 1: 
    echo "Jugar al tateti";
    $juego = jugar();
        break;
case 2: 
    echo "Mostrar un juego";
        break;
case 3:
    echo "Mostrar el primer juego ganador";
        break;
case 4:
    echo "Mostrar porcentaje de Juegos ganados";
        break;
case 5:
    echo "Mostrar resumen de Jugador";
        break;
case 6:
    echo " Mostrar listado de juegos Ordenado por jugador O";
        break;
case 7://Salir
    echo "Exit";
        break;
}while($opcion != 7);

?>