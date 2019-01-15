<?php
#Aqui vamos a crear toa la lógica de nuestro sitio web. 


function suma($numero, $numero2){
    $resultado = $numero + $numero2;
    return $resultado;
}

#Traemos nustro archivo vista. (Que es el view)
#Este se usa cundo no son archivos tan importantes y solo muetra
#warnings
include 'vista.php';
include_once 'vista.php';


#este se usa para forzar que el archivo se traiga.
require 'vista.php';


?>