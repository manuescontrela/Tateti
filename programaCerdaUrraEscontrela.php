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
* Legajo: FAI-3717
* mail: marcos.cerda@est.fi.uncoma.ar
* Legajo: FAI-3517
* mail:  marcos.cerda@est.fi.uncoma.edu.ar
* Usuario GitHUb: Amadesx
*******************
* Urra Juan Pablo
* Legajo: FAI-3730
* mail: jpablo.urra@est.fai.uncoma.edu.ar
* Usuario GitHub: UrraPablo */






/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

//*******************************INCISO01****************************************************************************************************/
/** Esta funcion realiza la precraga de datos de 10 juegos del TATETI */

/** @return array */
function cargarJuegos (){
    
    $coleccionJuegos = array();
    $coleccionJuegos[0] =array ("jugadorCruz"=> "cacho" , "jugadorCirculo" => "pepe", "puntosCruz"=> 5, "puntosCirculo" => 0);
    $coleccionJuegos[1] =array ("jugadorCruz"=> "carlo" , "jugadorCirculo" => "cacho", "puntosCruz"=> 1, "puntosCirculo" => 1);
    $coleccionJuegos[2] =array ("jugadorCruz"=> "laura" , "jugadorCirculo" => "mabel", "puntosCruz"=> 1, "puntosCirculo" => 1);
    $coleccionJuegos[3] =array ("jugadorCruz"=> "samuel" , "jugadorCirculo" => "marta", "puntosCruz"=> 6, "puntosCirculo" => 0);
    $coleccionJuegos[4] =array ("jugadorCruz"=> "pepe" , "jugadorCirculo" => "laura", "puntosCruz"=> 5, "puntosCirculo" => 0);
    $coleccionJuegos[5] =array ("jugadorCruz"=> "carla" , "jugadorCirculo" => "cacho", "puntosCruz"=> 5, "puntosCirculo" => 0);
    $coleccionJuegos[6] =array ("jugadorCruz"=> "ramon" , "jugadorCirculo" => "marta", "puntosCruz"=> 1, "puntosCirculo" => 1);
    $coleccionJuegos[7] =array ("jugadorCruz"=> "jose" , "jugadorCirculo" => "juan", "puntosCruz"=> 6, "puntosCirculo" => 0);
    $coleccionJuegos[8] =array ("jugadorCruz"=> "laura" , "jugadorCirculo" => "ramon", "puntosCruz"=> 0, "puntosCirculo" => 5);
    $coleccionJuegos[9] =array ("jugadorCruz"=> "carlo" , "jugadorCirculo" => "juan", "puntosCruz"=> 0, "puntosCirculo" => 5);
    $coleccionJuegos = [];

$jg1 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 1, "puntosCirculo" => 1];
$jg2 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "AMARILIS", "puntosCruz" => 3, "puntosCirculo" => 0];
$jg3 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "MILOS",    "puntosCruz" => 0, "puntosCirculo" => 4];
$jg4 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg5 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 5, "puntosCirculo" => 0];
$jg6 = ["jugadorCruz" => "FEDORA",   "jugadorCirculo" => "CALIXTO",  "puntosCruz" => 0, "puntosCirculo" => 3];
$jg7 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "AMARILIS", "puntosCruz" => 4, "puntosCirculo" => 0];
$jg8 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg9 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "FEDORA",   "puntosCruz" => 2, "puntosCirculo" => 0];
$jg10= ["jugadorCruz" => "MILOS",    "jugadorCirculo" => "ZENDA",   "puntosCruz" => 1, "puntosCirculo" => 1];

array_push($coleccionJuegos, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9, $jg10);

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
 
    if ($game[$numJuego-1]["puntosCruz"] > $game[$numJuego-1]["puntosCirculo"]){
        $winner = " (GANÓ X)";
        echo"****************************\n";
        echo"Juego Tateti n°". $numJuego. $winner. "\n";
        echo"Jugador X ". $game[$numJuego-1]["jugadorCruz"]." obtuvo ". $game[$numJuego-1]["puntosCruz"]."\n";
        echo"Jugador 0 ". $game[$numJuego-1]["jugadorCirculo"]." obtuvo ". $game[$numJuego-1]["puntosCirculo"]."\n";
        echo"****************************\n";
    }
    elseif($game[$numJuego-1]["puntosCruz"] < $game[$numJuego-1]["puntosCirculo"]){
        $winner = " (GANÓ O)";
        echo"****************************\n";
        echo"Juego Tateti n°". $numJuego. $winner. "\n";
        echo"Jugador X ". $game[$numJuego-1]["jugadorCruz"]." obtuvo ". $game[$numJuego-1]["puntosCruz"]."\n";
        echo"Jugador 0 ". $game[$numJuego-1]["jugadorCirculo"]." obtuvo ". $game[$numJuego-1]["puntosCirculo"]."\n";
        echo"****************************\n";
    }
    elseif($game[$numJuego-1]["puntosCruz"] == $game[$numJuego-1]["puntosCirculo"]){
        $winner = " (EMPATE)";
        echo"****************************\n";
        echo"Juego Tateti n°". $numJuego. $winner. "\n";
        echo"Jugador X ". $game[$numJuego-1]["jugadorCruz"]." obtuvo ". $game[$numJuego-1]["puntosCruz"]."\n";
        echo"Jugador 0 ". $game[$numJuego-1]["jugadorCirculo"]." obtuvo ". $game[$numJuego-1]["puntosCirculo"]."\n";
        echo"****************************\n";
    }
    else
    echo"El número de juego ingresado es inexistente";

}
//*******************************INCISO05****************************************************************************************************/
//En este caso se utiliza la funcion predefinida array_push para insertar el array de tipo asociativo al final
// de la coleccion de juegos

/** nombre de la funcion:  array_push
 * @param array  
 * @param mixed value
 * @return int
 */




//*******************************INCISO06****************************************************************************************************/

/** Esta funcion determina el numero del primer juego ganado
 * por un jugador.
 */
/** @param array juego
 *  @param string nombreJugador
 *  @return int
 */
function primerJuegoGanado($juego, $nombreJugador){
    // BOOLEAN: bandera, seEncontro, esJugadorx, ganoX, empatoX
    //INT: i

    // inicializacion de variables
    $indice = -1; // en caso que no gane el jugador  

    for($i =0; $i < count($juego); $i++) { // recorrido por indice de un array multidimensional
            foreach($juego[$i] as $key => $value){ // recorre cada juego del array       
                $bandera=true;
                $seEncontro=(strtoupper($nombreJugador)==strtoupper($value)); // determina si se encontro el jugador con ese nombre
                $esJugadorX=($key=="jugadorCruz"); // determina si el jugador eligio X u O 
                $ganoX=$juego[$i]["puntosCruz"] > $juego[$i]["puntosCirculo"];
                $empatoX=$juego[$i]["puntosCruz"] == $juego[$i]["puntosCirculo"];
                while($seEncontro && $bandera){ // recorrido parcial del array
                    if($esJugadorX){
                        if($ganoX){
                            $indice=$i+1;
        
                        }
        
                    }//fin if
                    else{
                        if(!$ganoX && !$empatoX){
                            $indice=$i+1;
        
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
    if($juego[$indice]["puntosCruz"] > $juego[$indice]["puntosCirculo"]){
        $simbolo = "X";

    }// fin if 
    else{
        $simbolo = "O";

    }//fin else
    }// fin while 
    
    return $simbolo; 

}// fin function


/**************************************INCISO07**************************************************************/
// Esta funcion calcula la cantidad de juegos que ganó, empató, perdió y los puntos del jugador
// ingresado por el usuario
/** @param array juego
 *  @param string name 
 *  @return array 
 * */ 
function resumeJugador($juego, $name){
// INT: ptosGanados, ptosEmpate, cantJuegoGanado, cantPerdidos, k    
// BOOLEAN: bandera, empato, gano_x, gano_o

// inicializacion de variables
$ptosGanados=0;
$ptosEmpate=0;
$cantJuegoGanado=0;
$cantPerdidos=0;
$resumen=array(); 
for ($k=0; $k <count($juego); $k++){
    foreach($juego[$k] as $clave => $valor){
        $bandera = true;
    while($valor == $name && $bandera){
        $empato=$juego[$k]["puntosCruz"] == $juego[$k]["puntosCirculo"];
        $gano_x=$juego[$k]["puntosCruz"] > $juego[$k]["puntosCirculo"];
        $gano_o=$juego[$k]["puntosCruz"] < $juego[$k]["puntosCirculo"];
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
                $ptosGanados=$ptosGanados+$juego[$k]["puntosCirculo"];
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
            $gano_x=$juego[$j]["puntosCruz"] > $juego[$j]["puntosCirculo"];
            $gano_o=$juego[$j]["puntosCruz"] < $juego[$j]["puntosCirculo"];
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
    // INT: k     BOOLEAN: gano_X, gano_O

    //inicializacion de variables 
    $ganadosPorSimbolo=0;

    for($k=0; $k <count($juego); $k++){
        $gano_X=$juego[$k]["puntosCruz"] > $juego[$k]["puntosCirculo"];
        $gano_O=$juego[$k]["puntosCruz"] < $juego[$k]["puntosCirculo"];
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
//Muestra el listado de los jugadores que eligieron el simbolo O

/**
 * @param array juego
 * @return array
 */
function ordenarPor_O($juego){
    //INT: k

    for($k=0; $k <count($juego); $k++){
        foreach($juego[$k] as $clave =>$dato){
            if($clave=="jugadorCirculo"){
                $jugadoresO[$k]["jugadorCirculo"] =strtoupper($dato);
    
            }//fin if
    
        }//fin foreach
        
    
    }// fin for
    
    return $jugadoresO;

}// fin function
/********************************************************************************************************** */
/** FUNCION PREDEFINIDA uasort */
// Esta funcion ordena el array en orden alfabetico, en base a una funcion de comparación.
// En nuestro caso lo usaremos para ordenar a los jugadores que eligieron el simbolo O
/** 
 * @param array nombreArray
 * @param callback
 * @return boolean 
 */

 //**************************************************************************************************** */
/** FUNCION PREDEFINIDA  strtoupper */
// Esta funcion devueve el string ingresado como parametro en mayuscula.
/**
 * @param string 
 * @return string
 */


/**************************************INCISO12**************************************************************/
/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
// ARRAY: juegos, juegoTateti, datos, a, b, jugadoresCirculo     
// INT: opcion, numJuegox, nroJuego, ptosAcumulados  
// FLOAT: porcentajeGanador
// BOOLEAN:   STRING: nombreJugador, ganoSimbolo, opcionSimbolo

//Inicialización de variables:
$juegos=cargarJuegos(); 


//Proceso:

//print_r($juego);
//imprimirResultado($juego);

//llamado a la funcion para definir que accion realiza el programa
$opcion = seleccionarOpcion();
//$salir=false; 
while($opcion!=7){    
switch ($opcion) {
case 1: 
    echo "JUGAR TATETI \n";
    $juegoTateti=jugar(); 
    array_push($juegos,$juegoTateti); 
        print_r($juegos); 
        break;
case 2: 

    echo "Ingrese número del juego que desea mostrar: \n" ;
    //$numJuegox = trim(fgets(STDIN)); ver si juego primero y despues ver el ultimo juego para saber si lo actualiza
    $max=count($juegos);
    $min=1;
    $nroJuego =solicitarNumeroEntre($min,$max); 
    mostrarJuegox($nroJuego,$juegos);


        break;
case 3:
    echo "MOSTRAR EL PRIMER JUEGO GANADOR \n";
    echo("Ingrese el nombre del jugador: \n");
    $nombreJugador=strtoupper(trim(fgets(STDIN))); 
    $nroJuego=primerJuegoGanado($juegos,$nombreJugador);
    if($nroJuego<>-1){
    $ganoSimbolo=simboloGanador($juegos,$nroJuego-1);
    echo("****************************************\n");
    echo("Juego TATETI: ".($nroJuego)." (ganó ".$ganoSimbolo.")\n");
    echo("Jugador X: ".$juegos[$nroJuego-1]["jugadorCruz"]." obtuvo ".$juegos[$nroJuego-1]["puntosCruz"]." puntos\n");
    echo("Jugador O: ".$juegos[$nroJuego-1]["jugadorCirculo"]." obtuvo ".$juegos[$nroJuego-1]["puntosCirculo"]." puntos\n");
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
    echo("Ingrese el nombre de un jugador:\n");
    $nombreJugador=trim(fgets(STDIN));
    $datos=resumeJugador($juegos, $nombreJugador); // el array datos contiene la informacion del juego
    $ptosAcumulados=$datos[1] + $datos[2];

    echo("***************************.\n");
    echo("Jugador: ".strtoupper($nombreJugador)."\n");
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
    // RECIBE LA COLECCION DE JUEGOS COMO PARAMETRO DE ENTRADA.  
    //$jugadoresCirculos=ordenarPor_O($juegos);

    $jugadoresCirculos=ordenarPor_O($juegos);
    function comparacion ($arr1,$arr2){
        if($arr1["jugadorCirculo"]>$arr2["jugadorCirculo"]){
            return 1;
        }
        else{
            return -1; 
        }

    }// fin function comparacion 
    //    uasort($juegos,"comparacion"); 
    //    print_r($juegos);
    uasort($jugadoresCirculos,"comparacion"); 
    print_r($jugadoresCirculos);

    
        break;
case 7://Salir
    echo "EXIT \n";
        break;
}// fin switch
$opcion = seleccionarOpcion();

}// fin while 

?>
