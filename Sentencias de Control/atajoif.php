<?php
$edad = 18;

// variable = (condición ? Valor_Si_TRUE : Valor_Si_FALSE')

// La función isset(variable) nos devuelve true o false si la variable
// de parámetro existe y tiene un valor.

$edad = (isset($edad)) ? $edad : 'El usuario no estableció su edad' ;

echo 'Edad: '. $edad;

?>