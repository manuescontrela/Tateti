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
* Usuario GitHub: UrraPablo*/






/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

// FUNCIONES DE LA EXPLICACION 3 (PUEDEN IR JUNTO CONLAS FUNCIONES DEL MENU)
//*******************************INCISO1****************************************************************************************************/
/** Esta funcion realiza la precraga de datos de 10 juegos del TATETI */

/** @return array */
function cargarJuegos (){
    // COMO PONEMOS LAS VARIABLES INTERNAS??
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
    
//*******************************INCISO2****************************************************************************************************/

/** Esta funcion devuelve la opcion que ingresa el usuario en el juego TATETI */
/** @return int */

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
//*******************************INCISO3****************************************************************************************************/
//Implementar una función que solicite al usuario un número entre un rango de valores. 
//Si el número ingresado por el usuario no es válido, la función se encarga de volver a pedirlo. 
//La función retorna un número válido.


//*******************************INCISO4****************************************************************************************************/
//funcion/es de  mostrar juego (muestra juego solicitado por la opción 2 del menu)
/** @param int numJuego 
 */

function mostrarJuegox($numJuego){

echo "MOSTRAR JUEGO \n";

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

}
//*******************************INCISO5****************************************************************************************************/
//Implementar una función agregarJuego cuya entrada en la colección de juegos y un juego,
// y la función retorna la colección modificada al agregarse el nuevo juego.


//*******************************INCISO6****************************************************************************************************/
// funcion/es de mostrar el primer juego ganado aqui
/** Esta funcion determina el numero del primer juego ganado
 * por un jugador.
 */
/** @param array juego
 *  @param string nombreJugador
 *  @return int
 */
function primerJuegoGanado($juego, $nombreJugador){
    // BOOLEAN: bandera, seEncontro, esJugador, ganoX
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
    if($juego[$indice]["ptosX"] > $juego[$indice]["ptosCirculo"]){
        $simbolo = "X";

    }// fin if 
    else{
        $simbolo = "O";

    }//fin else
    }// fin while 
    
    return $simbolo; 

}// fin function


/**************************************INCISO7**************************************************************/
//Implementar una función que dada la colección de juegos y el nombre de un jugador, 
//retorne el resumen del jugador utilizando la estructura 
//b) de la sección EXPLICACACIÓN 2.



/***************************************INCISO08*************************************************************/
//Implementar una función sin parámetros formales que solicite al usuario un símbolo X o O, y retorne el símbolo elegido. 
//La función debe validar el datos ingresado por el usuario (Utilice funciones predefinidas de string).



/****************************************INCISO09************************************************************/
// funcion/es de mostrar listado de juegos ordenados por jugador O aqui
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
//Implementar una función que dada una colección de juegos y un símbolo (X o O) 
//retorne la cantidad de juegos ganados por el símbolo ingresado por parámetro.







/**************************************INCISO11**************************************************************/
//Implementar una función sin retorno que, dada una colección de juegos, 
//muestre la colección de juegos ordenado por el nombre del jugador cuyo símbolo es O.


/**************************************INCISO12**************************************************************/
/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:

//Inicialización de variables:
//Int $juego, $opcion, $juegox, $numJuegox

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

    echo "Ingrese número del juego que desea mostrar: \n" ;
    $numJuegox = trim(fgets(STDIN));
    $juegox = mostrarJuegox($numJuegox);

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