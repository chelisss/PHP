<?php

$usuario = 'Luis';

function saludo($nombre){
    //echo 'Saludos, '. $nombre. '!';
    echo "Saludos, $nombre !";
    echo '<br/>';
}

saludo('Luis');
saludo('David');


function sumar($a,$b){
    $resultado = $a + $b;
    echo 'El resultado es: '. $resultado;
    echo '<br/>'; 
}

sumar(1,2);
sumar(1,158);
sumar(15,20);


//Ahora usaremos return en vez de echo en funciones
function restar($a,$b){
    $resultado = $a - $b;
    //El return corta la ejecución de esa función donde la encuentra.
    return $resultado;    
}

$resultado = restar(10,1);



//Regresando a la función de saludo:
function saludar($amigo){
   return "Saludos, $amigo";
}

$saludo = saludar('Enrique');
echo $saludo;

/**
 * Una función solo debe PROCESAR la información, NUNCA MOSTRARLA.
 * Después tu muestras la información con el valor de RETORNO.
 */
?>