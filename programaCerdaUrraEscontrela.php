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

function cargarJuegos (){
    $coleccionJuegos = array();
    $coleccionJuegos[1] =array ("jugadorCruz"=> "cacho" , "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0);
    $coleccionJuegos[2] =array ("jugadorCruz"=> "carlo" , "jugadorCirculo" => "cacho", "puntosCruz"=> 1, "puntosCirculo" => 1);
    $coleccionJuegos[3] =array ("jugadorCruz"=> "laura" , "jugadorCirculo" => "mabel", "puntosCruz"=> 1, "puntosCirculo" => 1);
    $coleccionJuegos[4] =array ("jugadorCruz"=> "samuel" , "jugadorCirculo" => "marta", "puntosCruz"=> 6, "puntosCirculo" => 0);
    $coleccionJuegos[5] =array ("jugadorCruz"=> "pepe" , "jugadorCirculo" => "laura", "puntosCruz"=> 5, "puntosCirculo" => 0);
    $coleccionJuegos[6] =array ("jugadorCruz"=> "carla" , "jugadorCirculo" => "cacho", "puntosCruz"=> 5, "puntosCirculo" => 0);
    $coleccionJuegos[7] =array ("jugadorCruz"=> "ramon" , "jugadorCirculo" => "marta", "puntosCruz"=> 1, "puntosCirculo" => 1);
    $coleccionJuegos[8] =array ("jugadorCruz"=> "jose" , "jugadorCirculo" => "juan", "puntosCruz"=> 6, "puntosCirculo" => 0);
    $coleccionJuegos[9] =array ("jugadorCruz"=> "laura" , "jugadorCirculo" => "ramon", "puntosCruz"=> 0, "puntosCirculo" => 5);
    $coleccionJuegos[10] =array ("jugadorCruz"=> "carlo" , "jugadorCirculo" => "juan", "puntosCruz"=> 0, "puntosCirculo" => 5);
    
    return $coleccionJuegos;
    }
    


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
    echo "JUGAR TATETI \n";
    $juego = jugar();
        break;
case 2: 
    echo "MOSTRAR JUEGO \n";
    echo "Ingrese número del juego que desea mostrar: \n" ;
    $numJuego = trim(fgets(STDIN));
    $game = cargarjuegos();

    if ($game[$numJuego]["puntosCruz"] > $game[$numJuego]["puntosCirculo"]){
        $winner = " (GANÓ X)";
        echo"****************************\n";
        echo"Juego Tateti n°". $numJuego. $winner. "\n";
        echo"Jugador X ". $game[$numJuego]["jugadorCruz"]." obtuvo ". $game[$numJuego]["puntosCruz"]."\n";
        echo"Jugador 0 ". $game[$numJuego]["jugadorCirculo"]." obtuvo ". $game[$numJuego]["puntosCirculo"]."\n";
        echo"****************************\n";
    }
    elseif($game[$numJuego]["puntosCruz"] < $game[$numJuego]["puntosCirculo"]){
        $winner = " (GANÓ O)";
        echo"****************************\n";
        echo"Juego Tateti n°". $numJuego. $winner. "\n";
        echo"Jugador X ". $game[$numJuego]["jugadorCruz"]." obtuvo ". $game[$numJuego]["puntosCruz"]."\n";
        echo"Jugador 0 ". $game[$numJuego]["jugadorCirculo"]." obtuvo ". $game[$numJuego]["puntosCirculo"]."\n";
        echo"****************************\n";
    }
    elseif($game[$numJuego]["puntosCruz"] == $game[$numJuego]["puntosCirculo"]){
        $winner = " (EMPATE)";
        echo"****************************\n";
        echo"Juego Tateti n°". $numJuego. $winner. "\n";
        echo"Jugador X ". $game[$numJuego]["jugadorCruz"]." obtuvo ". $game[$numJuego]["puntosCruz"]."\n";
        echo"Jugador 0 ". $game[$numJuego]["jugadorCirculo"]." obtuvo ". $game[$numJuego]["puntosCirculo"]."\n";
        echo"****************************\n";
    }
    else
    echo"El número de juego ingresado es inexistente";

        break;
case 3:
    echo "MOSTRAR EL PRIMER JUEGO GANADOR \n";
        break;
case 4:
    echo "MOSTRAR PORCENTAJE DE JUEGOS GANADOS \n";
        break;
case 5:
    echo "MOSTRAR RESUMEN DE JUGADOR \n";
        break;
case 6:
    echo " MOSTRAR LISTADO DE JUEGOS ORDENADO POR JUGADOR 0 (CIRCULO) \n";
        break;
case 7://Salir
    echo "EXIT \n";
        break;
}while($opcion != 7);

?>