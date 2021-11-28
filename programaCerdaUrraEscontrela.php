<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Escontrela Manuel
* Legajo: FAI-2817
* mail: manuel.escontrela@est.fi.uncoma.edu.ar
* Usuario GitHub: manuescontrela
*******************
* Cerda Marcos 
* Legajo: 
* mail: 
* Usuario GitHUb: 
*******************
* Urra Juan Pablo
* Legajo: FAI-3730
* mail: jpablo.urra@est.fai.uncoma.edu.ar
* Usuario GitHub: UrraPablo */






/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

// FUNCIONES DE LA EXPLICACION 3 (PUEDEN IR JUNTO CONLAS FUNCIONES DEL MENU)
//*******************************INCISO01****************************************************************************************************/
/** Esta funcion realiza la precraga de datos de 10 juegos del TATETI */

/** @return array */
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
    
//*******************************INCISO02****************************************************************************************************/

/** Esta funcion devuelve la opcion que ingresa el usuario en el juego TATETI */
/** @return int */

function seleccionarOpcion(){
      // INT: opcionElegida
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
//*******************************INCISO03****************************************************************************************************/
//Implementar una función que solicite al usuario un número entre un rango de valores. 
//Si el número ingresado por el usuario no es válido, la función se encarga de volver a pedirlo. 
//La función retorna un número válido.



//*******************************INCISO04****************************************************************************************************/
// Esta funcion función muestra los datos de un numero de juego especificado por el usuario
/** @param int numJuego 
 *  @param array game
 */

function mostrarJuegox($numJuego,$game){
// STRING: winner
echo "MOSTRAR JUEGO \n";

    //$game = cargarjuegos();

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

}
//*******************************INCISO05****************************************************************************************************/
//Esta funcion agrega un nuevo juego a la colección de juegos previamente precargados.

/**
 * @return array
 */

$sumarJuego= cargarJuegos();{ //declaracíon de variable que invoca colección
    //Inicializamos variables con valores tomados de tateti.php
    $cruz=$nombreJugadorCruz;
    $circ=$nombreJugadorCirculo;
    $puntosX=$puntosCruz;
    $puntos0=$$puntosCirculo;

    //cargar nuevo juego a la colección
    $nuevoJuego =array ("jugadorCruz"=> "$jCruz" , "jugadorCirculo" => "$jCirc", "puntosCruz"=> $pCruz, "puntosCirculo" =>$pCirc);
    array_push($sumarJuego, $nuevoJuego);
    //print_r($sumarJuego);
    return $sumarJuego;
   
        
    }



//*******************************INCISO06****************************************************************************************************/

/** Esta funcion determina el numero del primer juego ganado
 * por un jugador.
 */
/** @param array juego
 *  @param string nombreJugador
 *  @return int
 */
function primerJuegoGanado($juego, $nombreJugador){
    // BOOLEAN: bandera, seEncontro, esJugadorx, ganoX
    //INT: i

    // inicializacion de variables
    $indice = -1; // en caso que no gane el jugador  

    for($i = 0; $i < count($juego); $i++) { // recorrido por indice de un array multidimensional
            foreach($juego[$i] as $key => $value){ // recorre cada juego del array       
                $bandera=true;
                $seEncontro=($nombreJugador==$value); // determina si se encontro el jugador con ese nombre
                $esJugadorX=($key=="jugadorX"); // determina si el jugador eligio X u O 
                $ganoX=$juego[$i]["ptosX"] > $juego[$i]["ptosCirculo"];
                while($seEncontro && $bandera){ // recorrido parcial del array
                    if($esJugadorX){
                        if($ganoX){
                            $indice=$i;
        
                        }
        
                    }//fin if
                    else{
                        if(!$ganoX){
                            $indice=$i;
        
                        }
                         
        
                    }//fin else
        
                    //$indice = $i;
                    $bandera=false; 
        
                }// fin while
            }// fin foreach
           
        }// fin for

        return $indice; 
}// fin function 


/** Esta funcion determina el simbolo del primer juego ganado de un jugador.
 * utiliza el retorno de la funcion primerJuegoGanado, para recuperar el simbolo.
 * 
 */
/** @param array juego
 *  @param int indice
 *  @return string 
 */
function simboloGanador($juego, $indice){
    // BOOLEAN: bandera

    // inicializacion de variables 
    $bandera=true; 

    while($indice<>-1 && $bandera==true){
    $bandera = false;
    if($juego[$indice]["puntosCruz"] > $juego[$indice]["ptosCirculo"]){
        $simbolo = "X";

    }// fin if 
    else{
        $simbolo = "O";

    }//fin else
    }// fin while 
    
    return $simbolo; 

}// fin function


/**************************************INCISO07**************************************************************/
// Esta funcion calcula la cantidad de juegos que ganó, empató, perdió y los puntos de un jugador
// ingresado por el usuario
/** @param array juego
 *  @param string name 
 *  @return array 
 * */ 
function resumeJugador($juego, $name){
// INT: ptosGanados, ptosEmpate, cantJuegoGanado, cantPerdidos, k    BOOLEAN: bandera, empato, gano_x, gano_o

// inicializacion de variables
$ptosGanados=0;
$ptosEmpate=0;
$cantJuegoGanado=0;
$cantPerdidos=0;
$resumen=array(); 
for ($k=0; $k < count($juego); $k++){
    foreach($juego[$k] as $clave => $valor){
        $bandera = true;
    while($valor == $name && $bandera){
        $empato=$juego[$k]["puntosCruz"] == $juego[$k]["ptosCirculo"];
        $gano_x=$juego[$k]["puntosCruz"] > $juego[$k]["ptosCirculo"];
        $gano_o=$juego[$k]["puntosCruz"] < $juego[$k]["ptosCirculo"];
        $bandera=false; 
        if($clave == "jugadorCruz"){
            if($gano_x){
                $ptosGanados=$ptosGanados+$juego[$k]["puntosCruz"];
                $cantJuegoGanado=$cantJuegoGanado+1;

            }//fin if
            elseif($empato){
                $ptosEmpate = $ptosEmpate+1 ;

            }// fin esleif
            else{
                $cantPerdidos=$cantPerdidos+1;// no entra cuando perdio
            } // fin else

        }// fin if
        else{ // es jugador O
            if($gano_o){
                $ptosGanados=$ptosGanados+$juego[$k]["ptosCirculos"];
                $cantJuegoGanado=$cantJuegoGanado+1;
            }// fin if 
            elseif($empato){
                $ptosEmpate=$ptosEmpate +1;

            }//fin elseif
            else{
                $cantPerdidos=$cantPerdidos+1;

            }// fin else

        }// fin else 

    }// fin while 
}// fin foreach 
}// fin for
// almacenamiento de datos del juego en el array resumen 
$resumen[0]=$cantJuegoGanado; // juegos ganados
$resumen[1]=$ptosGanados;     // ptos ganados   
$resumen[2]=$ptosEmpate;      // ptos empatados  
$resumen[3]=$cantPerdidos;    // juegos perdidos   

return $resumen; 

} // fin function


/***************************************INCISO08*************************************************************/
//Esta funcion evalua y devuelve el simbolo elegido por el usuario (X u O). 

/** 
 *  @return string
 */
function simboloElegido(){
// BOOLEAN: condicion
    // inicializacion de variables 
    $condicion = true;

    while ($condicion==true){
    echo "ingrese simbolo del juego (X u O): ";
    $simbolo = strtoupper(trim(fgets(STDIN)));
    if ($simbolo=="X" ||$simbolo== "O"){
    $condicion=false;
    } else {
    $condicion=true;
    }
    }
    return ($simbolo);
    }
    
    

/****************************************INCISO09************************************************************/

/** Esta funcion calcula la cantidad de juegos ganados (sin importar el simbolo elegido) */
/** @param array juego
 *  @return int 
 */
function juegosGanados($juego){
    // INT: j   BOOLEAN: gano_o , gano_x
    
    // inicializacion de variables 
    $cantGanados =0;
    for ($j=0; $j<count($juego); $j++){
            $gano_x=$juego[$j]["ptosX"] > $juego[$j]["ptosCirculo"];
            $gano_o=$juego[$j]["ptosX"] < $juego[$j]["ptosCirculo"];
            if($gano_o || $gano_x){
                $cantGanados=$cantGanados+1;
            }// fin if
    
    }// fin for
    return $cantGanados;

}// fin function 

/**************************************INCISO10**************************************************************/
// Esta funcion calcula la cantidad de juegos ganados por el simbolo (X u O), elgido por el usuario.
/**
 * @param array juego
 * @param string simbolo
 * @return int
 */
function juegosGanadosPorSimbolo($juego,$simbolo){
    // INT: k, countGanados    BOOLEAN: gano_X, gano_O

    //inicializacion de variables 
    $ganadosPorSimbolo=0;

    for($k=0; $k < count($juego); $k++){
        $gano_X=$juego[$k]["puntosCruz"] > $juego[$k]["puntosCirculos"];
        $gano_O=$juego[$k]["puntosCruz"] < $juego[$k]["puntosCirculos"];
        if(strtoupper($simbolo)=="X"){
            if($gano_X){
                $ganadosPorSimbolo=$ganadosPorSimbolo+1; 

            }// fin if 

        }// fin if
        elseif($gano_O){
            $ganadosPorSimbolo = $ganadosPorSimbolo +1;

        } // fin elseif
    }// fin for 
    return $ganadosPorSimbolo; 

}// fin function

/********************************PTO 4 DEL MENU**************************************************** */
// Esta funcion calcula el porcentaje de juegos ganados por el simbolo elegido por el usuario (X u O)
/** 
 *  @param array juego
 *  @param string simbolo 
 *  @return float 
 */

function porcentajeGanador($juego,$simbolo){
    // INT: cantGanadoSimbolo, cantJuegosGanados

    // llamado a la funcion juegosGanados
    $cantJuegosGanados=juegosGanados($juego);
    
    //llamado a la funcion juegosGanadosPorSimbolo
    $cantGanadoSimbolo=juegosGanadosPorSimbolo($juego,$simbolo);

    // calculo del porcentaje 
    $porcentaje = ($cantGanadoSimbolo/$cantJuegosGanados)*100;

    return $porcentaje;

}// fin function


/**************************************INCISO11**************************************************************/
//Muestra el listado de los jugadores ordenados alfabeticamente que eligiero el simbolo O

/**
 * @param array juego
 * @return array
 */
function ordenarPor_O($juego){
    //INT: k


    for($k=0; $k <count($juego); $k++){
        foreach($juego[$k] as $clave =>$dato){
            if($clave=="jugadorCirculo"){
                $jugadoresO[$k]["jugadorO"] =$dato;
    
            }//fin if
    
        }//fin foreach
        
    
    }// fin for

    return $jugadoresO;

}// fin function 



/**************************************INCISO12**************************************************************/
/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
// ARRAY: juegos, datos  INT: opcion, numJuegox, ptosAcumulados   FLOAT: porcentajeGanador
// BOOLEAN:   STRING: nombreJugador

//Inicialización de variables:
$juegos=cargarJuegos(); 


//Proceso:

//print_r($juego);
//imprimirResultado($juego);

//llamado a la funcion para definir que accion realiza el programa
$opcion = seleccionarOpcion();
    
switch ($opcion) {
case 1: 
    echo "JUGAR TATETI \n";
    $juego = jugar();
        break;
case 2: 

    echo "Ingrese número del juego que desea mostrar: \n" ;
    $numJuegox = trim(fgets(STDIN));
    mostrarJuegox($numJuegox,$juegos);

        break;
case 3:
    echo "MOSTRAR EL PRIMER JUEGO GANADOR \n";
    echo("Ingrese el nombre del jugador: \n");
    $nombreJugador=trim(fgets(STDIN)); 
    $nroJuego=primerJuegoGanado($juegos,$nombreJugador);
    if($nroJuego<>-1){
    $ganoSimbolo=simboloGanador($juegos, $nroJuego);
    echo("****************************************");
    echo("Juego TATETI: ".$nroJuego." (ganó ".$ganoSimbolo.")\n");
    echo("Jugador X: ".$juegos[$nroJuego]["jugadorCruz"]." obtuvo ".$juegos[$nroJuego]["puntosCruz"]." puntos\n");
    echo("Jugador O: ".$juegos[$nroJuego]["jugadorCirculo"]." obtuvo ".$juegos[$nroJuego]["puntosCirculo"]." puntos\n");
    echo("****************************************");
    }// fin if 
    else{
        echo("El jugador ".$nombreJugador." no ganó ningun juego\n");

    }// fin else 

        break;
case 4:
    echo "MOSTRAR PORCENTAJE DE JUEGOS GANADOS \n";
    $opcionSimbolo=simboloElegido();
    $porcentajeGanador=porcentajeGanador($juegos,$opcionSimbolo);
    echo("El simbolo ".$opcionSimbolo." ganó el ".$porcentajeGanador."%  de los juegos");
        break;
case 5:
    echo "MOSTRAR RESUMEN DE JUGADOR \n";
    $datos=resumeJugador($juegos, $nombreJugador); // el array datos contiene la informacion del juego
    $ptosAcumulados=$datos[1] + $datos[2];

    echo("***************************.\n");
    echo("Jugador: ".strtoupper($nombre)."\n");
    echo("Ganó: ".$datos[0]." juegos\n");
    echo("Perdió: ".$datos[3]." juegos\n");
    echo("Empató: ".$datos[2]." juegos\n"); 
    echo("total puntos acumulados: ".$ptosAcumulados." puntos\n"); 
    echo("***************************\n"); 


        break;
case 6:
    echo " MOSTRAR LISTADO DE JUEGOS ORDENADO POR JUGADOR 0 (CIRCULO) \n";
    // funcion de para detrminar el orden del arreglo (ascendente / descendente)
    // en este caso lo funcion esta definida para ordenar de menor a mayor alfabeticamente
    function sort($a,$b){
        if($a==$b) return 0;
        return($a < $b)?-1:1;
    }// fin function 
    $jugadoresCirculos=ordenarPor_O($juegos);
    $jugadoresCirculos=uasort($jugadoresCirculos,"sort");

    print_r($jugadoresCirculos); 

    
        break;
case 7://Salir
    echo "EXIT \n";
        break;
}while($opcion != 7);

?>
